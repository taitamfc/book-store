<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        $q = $request->q;
        $order_by = $request->order_by;

        $products = Product::where('status',1);

        if( $q ){
            $products = $products->where('title','LIKE','%'.$q.'%');
        }

        if( $order_by ){
            switch ($order_by) {
                case 'name_desc':
                    $products = $products->orderBy('title','DESC');
                    break;
                case 'name_asc':
                    $products = $products->orderBy('title','ASC');
                    break;
                case 'price_desc':
                    $products = $products->orderBy('price','DESC');
                    break;
                case 'price_asc':
                    $products = $products->orderBy('price','ASC');
                    break;
                default:
                    # code...
                    break;
            }
        }

        $products = $products->paginate(12);

        $params = [
            'products' => $products
        ];
        return view('frontend.shop',$params);
    }
    public function show($slug){
        $product            = Product::where('status',1)->where('slug',$slug)->first();
        $related_products   = Product::where('status',1)->where('category_id',$product->category_id)->limit(8)->get();
        $params = [
            'product' => $product,
            'related_products' => $related_products,
        ];
        return view('frontend.product',$params);
    }
}
