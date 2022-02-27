<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Cart;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_cartCode(){
        if (session()->has('cart_code')) {
            $cart_code = session()->get('cart_code');
        } else {
            $cart_code = time();
            session()->put('cart_code', $cart_code);
        }

        return $cart_code;
    }
    public function getCarts(){
        $cart_code = $this->get_cartCode();
        $carts = Cart::where("code",$cart_code)->get();
        return $carts;
    }
}
