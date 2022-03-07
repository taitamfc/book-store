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
        return view('frontend.cart',compact('carts'));
    }
    public function delete($id){
        $cart_code = $this->get_cartCode();
        $cart = Cart::where("code",$cart_code)->where("product_id",$id)->delete();
        return redirect()->back()->with('success','Remove item from cart successfully!');
    }
    public function add(Request $request, $id){
        $product        = Product::find($id);

        $cart_code = $this->get_cartCode();
        $qty = ($request->qty) ? $request->qty : 1;

        $cart = Cart::where("code",$cart_code)->where("product_id",$id)->first();
        if( $cart ){
            $cart->quantity = $cart->quantity + $qty;
            $cart->save();
            return redirect()->back()->with('success','Add to cart successfully!');
        } 
        
      
        $cart = new Cart();
        $cart->price        = $product->price;
        $cart->quantity     = 1;
        $cart->code         = $cart_code;
        $cart->product_id   = $id;
        $cart->save();
        
        return redirect()->back()->with('success','Add to cart successfully!');
    }

    public function update(Request $request){
        $cart_code = $this->get_cartCode();
        foreach( $request->qtys as $product_id => $qty ){
            $cart = Cart::where("code",$cart_code)->where("product_id",$product_id)->update(['quantity'=>$qty]);
        }
        return redirect()->back()->with('success','Update cart successfully!');
    }
}
