<?php
 
namespace App\View\Composers;
 
use Illuminate\View\View;

use App\Models\Cart;
 
class CartComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $carts;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    // public function __construct()
    // {
        
    // }

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

        $total = 0;
        foreach($carts as $key => $cart){
            $total += $cart->price * $cart->quantity;
        }

        $carts = [
            'items' => $carts,
            'total' => $total,
        ];

        return $carts;
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $carts = $this->getCarts();
        $view->with('carts', $carts);
    }
}