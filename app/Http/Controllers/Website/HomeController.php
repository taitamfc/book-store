<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $lastest_products = Product::where('status',1)->limit(10)->get();

        $params = [
            'lastest_products' => $lastest_products
        ];

        return view('website.home',$params);
    }
}
