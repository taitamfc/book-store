<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index(){
        $carts = $this->getCarts();
        return view('frontend.checkout',[
            'carts' => $carts
        ]);
    }
    public function doCheckout(Request $request){

        $request->validate([
            'first_name'    => 'required|min:2',
            'last_name'     => 'required|min:2',
            'email'         => 'required|email',
            'phone'         => 'required',
            'address'       => 'required|min:2',
        ]);
 
        $order = new Order();
        $order->first_name  = $request->first_name;
        $order->last_name   = $request->last_name;
        $order->email       = $request->email;
        $order->phone       = $request->phone;
        $order->address     = $request->address;
        $order->order_note  = $request->order_note;

        $carts = $this->getCarts();
        $order->total       = $carts['total'];


        try {
            DB::beginTransaction();
            $order->save();
            
            if( count($carts['items']) > 0){
                //save order_items
                foreach( $carts['items']  as $cart){
                    $orderItem = new OrderItem();
                    $orderItem->order_id    = $order->id;
                    $orderItem->product_id  = $cart->product_id;
                    $orderItem->price       = $cart->price;
                    $orderItem->quantity    = $cart->quantity;
                    try {
                        $orderItem->save();

                        $cart_code = $this->get_cartCode();
                        Cart::where('code',$cart_code)->delete();

                        DB::commit();
                    } catch (\Exception $e) {
                        Log::error($e->getMessage());
                        return redirect()->back()->withInput($request->input())->with('error','Can not save order');
                    }
                }
            }else{
                throw new \Exception("Cart empty");
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())->with('error','Can not save order');
        }
        return redirect()->route('website.success',$order->id)->with('success','Order saved');
    }
    public function success($order_id = 0){
        $order = Order::find($order_id);

        $params = [
            'order' => $order
        ];
        return view('frontend.success',$params);

    }
}
