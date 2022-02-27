<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(){
        $carts = $this->getCarts();
        return view('website.cart',compact('carts'));
    }
    public function add(Request $request, $id){
        $product        = Product::find($id);

        $cart_code = $this->get_cartCode();
        $carts = $this->getCarts();
        foreach($carts as $cart){
            if($cart->product_id == $id){
                $cart = Cart::where("code",$cart_code)->where("product_id",$cart->product_id)->first();
                $cart->quantity = $cart->quantity + 1;
                $cart->save();
                return redirect()->back()->with('success','Add to cart successfully!');
            }
        }
      
        $cart = new Cart();
        $cart->price        = $product->price;
        $cart->quantity     = 1;
        $cart->code         = $cart_code;
        $cart->product_id   = $id;
        $cart->save();
        
        return redirect()->back()->with('success','Add to cart successfully!');
    }
}
