@extends('frontend.layouts.master')

@section('content')
@include('frontend.includes.global.breadcrumb')
<!-- Cart Page Start -->
<main class="cart-page-main-block inner-page-sec-padding-bottom">
    <div class="cart_area cart-area-padding  ">
        <div class="container">
            <div class="page-section-title">
                <h1>Shopping Cart</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('website.cart-update') }}" method="POST">
                    @csrf
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb--40">
                            <table class="table">
                                <!-- Head Row -->
                                <thead>
                                    <tr>
                                        <th class="pro-remove"></th>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $total = $carts['total'];
                                foreach($carts['items'] as $key => $cart):?>
                                    <!-- Product Row -->
                                    <tr>
                                        <td class="pro-remove">
                                            <a href="{{ route('website.cart-delete',$cart->product_id) }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                        <td class="pro-thumbnail">
                                            <a href="{{ route('website.product',$cart->product->slug) }}">
                                                <img src="{{ $cart->product->image }}"
                                                    alt="Product">
                                            </a>
                                        </td>
                                        <td class="pro-title">
                                            <a href="{{ route('website.product',$cart->product->slug) }}">{{ $cart->product->title }}</a>
                                        </td>

                                        <td class="pro-price"><span>{{ number_format($cart->price) }}</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <div class="count-input-block">
                                                    <input type="number" class="form-control text-center" name="qtys[{{$cart->product_id}}]" value="{{ $cart->quantity }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>{{ number_format($cart->price * $cart->quantity) }}</span></td>
                                    </tr>
                                    <?php endforeach;?>
                                    <!-- Discount Row  -->
                                    <tr class="">
                                        <td colspan="6" class="actions">
                                            <!-- <div class="coupon-block">
                                                <div class="coupon-text">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text"
                                                        id="coupon_code" value="" placeholder="Coupon code">
                                                </div>
                                                <div class="coupon-btn">
                                                    <input type="submit" class="btn btn-outlined" name="apply_coupon"
                                                        value="Apply coupon">
                                                </div>
                                            </div> -->
                                            <div class="update-block text-right">
                                                <input type="submit" class="btn btn-outlined" name="update_cart"
                                                    value="Update cart">
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb--30 mb-lg--0">
                    
                </div>
                <!-- Cart Summary -->
                <div class="col-lg-6 col-12 d-flex">
                    <div class="cart-summary">
                        <div class="cart-summary-wrap">
                            <h4><span>Cart Summary</span></h4>
                            <h2>Grand Total <span class="text-primary">{{ number_format($total) }}</span></h2>
                        </div>
                        <div class="cart-summary-button">
                            <a href="{{ route('website.checkout') }}" class="checkout-btn c-btn btn--primary">Checkout</a>
                            <a href="{{ route('website.shop') }}" class="update-btn c-btn btn-outlined">Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Cart Page End -->
@endsection