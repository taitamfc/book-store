<?php
$total = $carts['total'];
?> 
<div class="cart-widget">
    <div class="login-block">
        <a href="{{ route('website.login') }}" class="font-weight-bold">Login</a> <br>
        <span>or</span><a href="{{ route('website.register') }}">Register</a>
    </div>
    <div class="cart-block">
        <div class="cart-total">
            <span class="text-number">
                {{ count($carts['items']) }}
            </span>
            <span class="text-item">
                Shopping Cart
            </span>
            <span class="price">
                {{ number_format($total) }}
                <i class="fas fa-chevron-down"></i>
            </span>
        </div>
        <div class="cart-dropdown-block">
            @foreach($carts['items'] as $key => $cart)
                <div class=" single-cart-block ">
                    <div class="cart-product">
                        <a href="{{ route('website.product',$cart->product->slug) }}" class="image">
                            <img src="{{ $cart->product->image }}" alt="">
                        </a>
                        <div class="content">
                            <h3 class="title"><a href="{{ route('website.product',$cart->product->slug) }}">{{ $cart->product->title }}</a>
                            </h3>
                            <p class="price"><span class="qty">{{$cart->quantity}} ×</span> {{ number_format($cart->price) }}</p>
                            <a href="{{ route('website.cart-delete',$cart->product_id) }}" class="cross-btn"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
           
            <div class=" single-cart-block ">
                <div class="btn-block">
                    <a href="{{ route('website.cart') }}" class="btn">View Cart <i class="fas fa-chevron-right"></i></a>
                    <a href="{{ route('website.checkout') }}" class="btn btn--primary">Check Out <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>