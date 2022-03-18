<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $statuses = [
            'new',
            'complete'
        ];
        $query = Order::query(true);

        $product_id = $request->product_id;
        $status     = $request->status;
        $product_name  = $request->product_name;
        $customer_info  = $request->customer_info;

        if($product_name){
            $query->with('order_items')->whereHas('order_items', function($query) use($product_name){
                $query->with('product')->whereHas('product', function($query) use($product_name){
                    $query->where('title', 'like', '%'.$product_name.'%');
                });
            });
        }
        if($customer_info){
            $query->orWhere('first_name', 'like', '%'.$customer_info.'%');
            $query->orWhere('last_name', 'like', '%'.$customer_info.'%');
            $query->orWhere('email', 'like', '%'.$customer_info.'%');
            $query->orWhere('phone', 'like', '%'.$customer_info.'%');
        }

        if($status){
            $query->where('order_status',$status);
        }


        $items = $query->paginate(10);

        $params = [
            'items'         => $items,
            'sl_status'     => $status,
            'product_name'  => $product_name,
            'customer_info' => $customer_info,
            'product_id'    => $product_id,
            'statuses'      => $statuses,
        ];

        return view('admin.orders.index',$params);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Order::find($id);
        $params = [
            'item'          => $item
        ];
        return view('admin.orders.show',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Order::find($id);
        $old_order_status = $item->order_status;
        $item->order_status = $request->order_status;
        try {
            DB::beginTransaction();
            $item->save();

            //update stock when order complete
            if( $request->order_status == 'complete' &&  $old_order_status == 'new' ){
                if( count($item->order_items) ){
                    foreach( $item->order_items  as $order_item){
                        $product = Product::find($order_item->product_id)->decrement('stock', $order_item->quantity);
                        DB::commit();
                    }
                }
            }
            
            return redirect()->route('orders.index')->with('message','Item saved!')->with('alert-class','success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())
            ->with('alert-class','danger')
            ->with('message','Can not save item');
        }
    }
}
