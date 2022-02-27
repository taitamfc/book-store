@extends('website.layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="slider-area">
                <div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
                    <div class="hero-caption hero-caption2">
                        <h2>Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="cart_area section-padding">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($carts as $cart):?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ asset('website/assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp')}}"
                                            alt="" data-pagespeed-url-hash="4146589661"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{ number_format($cart->price) }}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number" type="text" value="{{ $cart->quantity }}" min="0" max="10">
                                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5>$720.00</h5>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        <tr class="bottom_button">
                            <td>
                                <a class="btn" href="#">Update Cart</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>
        
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn" href="{{ route('website.shop') }}">Continue Shopping</a>
                    <a class="btn checkout_btn" href="{{ route('website.checkout') }}">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection