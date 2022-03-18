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

        $query = Product::query(true);

        if( $q ){
            $query->where('title','LIKE','%'.$q.'%');
        }

        if( $order_by ){
            switch ($order_by) {
                case 'name_desc':
                    $query->orderBy('title','DESC');
                    break;
                case 'name_asc':
                    $query->orderBy('title','ASC');
                    break;
                case 'price_desc':
                    $query->orderBy('price','DESC');
                    break;
                case 'price_asc':
                    $query->orderBy('price','ASC');
                    break;
                default:
                    $query->orderBy('id','DESC');
                    break;
            }
        }

        $products = $query->paginate(12);

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
