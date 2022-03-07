<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug){

        $category = Category::select('id')->where('status',1)->where('slug',$slug)->first();
        $products = Product::where('status',1)->where('category_id',$category->id)->paginate(12);
        $params = [
            'products' => $products
        ];
        return view('frontend.shop',$params);
    }
}
