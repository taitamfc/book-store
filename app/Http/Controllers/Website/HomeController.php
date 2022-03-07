<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $featured_products  = Product::where('status',1)->orderBy('id','ASC')->limit(8)->get();
        $lastest_products   = Product::where('status',1)->orderBy('id','DESC')->limit(8)->get();
        $most_view_products = Product::where('status',1)->orderBy('id','ASC')->limit(8)->get();

        $params = [
            'featured_products'     => $featured_products,
            'lastest_products'      => $lastest_products,
            'most_view_products'    => $most_view_products,
            'currentRouteName'      => Route::currentRouteName()
        ];

        return view('frontend.home',$params);
    }
}
