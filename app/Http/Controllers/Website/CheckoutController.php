<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $carts = $this->getCarts();
        return view('website.checkout',[
            'carts' => $carts
        ]);
    }
    public function doCheckout(Request $request){
        dd( $request->all() );
    }
    public function success(){
        return view('website.checkout');
    }
}
