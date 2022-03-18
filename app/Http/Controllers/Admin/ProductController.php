<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Product::query(true);

        $q      = $request->q;
        $status = $request->status;
        $sort   = $request->sort;
        $category_id = $request->category_id;

        if($q){
            $query->where('title','LIKE','%'.$q.'%');
        }

        if($category_id){
            $query->where('category_id',$category_id);
        }

        if($status){
            switch ($status) {
                case 'deactive':
                    $query->where('status',0);
                    break;
                case 'active':
                    $query->where('status',1);
                    break;
            }
        }

        switch ($sort) {
            case 'id_desc':
                $query->orderBy('id','DESC');
                break;
            case 'id_asc':
                $query->orderBy('id','ASC');
                break;
            default:
                $query->orderBy('id','DESC');
                break;
        }

        $items = $query->paginate(10);
        $cat_parents = Category::where('parent_id',0)->get();
        $params = [
            'cat_parents'   => $cat_parents,
            'items'         => $items,
            'q'             => $q,
            'status'        => $status,
            'sort'          => $sort,
            'category_id'   => $category_id
        ];

        return view('admin.products.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_parents = Category::where('parent_id',0)->get();
        $params = [
            'cat_parents'   => $cat_parents,
        ];
        return view('admin.products.create',$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $item = new Product();
        $item->title        = $request->title;
        $item->slug         = Str::slug($request->title);
        $item->status       = $request->status;
        $item->category_id  = $request->category_id;
        $item->price        = $request->price;
        $item->stock        = $request->stock;
        $item->description  = $request->description;

        //handle image
        if( $request->hasFile('image') ){
            $fileName = $item->slug.'.'.$request->image->extension();
            $request->image->move(public_path('uploads/product'), $fileName);
            $item->image = '/uploads/product/'.$fileName;
        }

        try {
            $item->save();
            return redirect()->route('products.index')->with('message','Item saved!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()
                    ->back()
                    ->withInput($request->input())
                    ->with('alert-class','danger')
                    ->with('message','Can not save item');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::find($id);
        $cat_parents = Category::where('parent_id',0)->where('id','!=',$id)->get();
        $params = [
            'cat_parents'   => $cat_parents,
            'item'          => $item,
        ];
        return view('admin.products.edit',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $item = Product::find($id);
        $item->title        = $request->title;
        $item->slug         = Str::slug($request->title);
        $item->status       = $request->status;
        $item->category_id  = $request->category_id;
        $item->price        = $request->price;
        $item->stock        = $request->stock;
        $item->description  = $request->description;

        //handle image
        if( $request->hasFile('image') ){
            $fileName = $item->slug.'.'.$request->image->extension();
            $request->image->move(public_path('uploads/product'), $fileName);
            $item->image = '/uploads/product/'.$fileName;
        }

        try {
            $item->save();
            return redirect()->route('products.index')->with('message','Item saved!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())->with('error','Can not save item');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = Product::find($id);
            $item->delete();
            return redirect()->route('products.index')->with('message','Item deleted!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())->with('error','Can not delete item');
        }
    }
}
