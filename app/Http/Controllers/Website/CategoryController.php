<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){

        $products = Product::where('status',1)->where('category_id',$id)->paginate(12);
        $params = [
            'products' => $products
        ];
        return view('website.shop',$params);
    }
}
