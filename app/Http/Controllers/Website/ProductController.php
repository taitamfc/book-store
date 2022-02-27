<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('status',1)->paginate(12);
        $params = [
            'products' => $products
        ];
        return view('website.shop',$params);
    }
    public function show($slug){
        $product = Product::where('status',1)->where('slug',$slug)->first();
        $params = [
            'product' => $product
        ];
        return view('website.product',$params);
    }
}
