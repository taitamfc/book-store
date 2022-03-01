@extends('website.layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="slider-area">
                <div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
                    <div class="hero-caption hero-caption2">
                        <h2>Check Out</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="checkout_area section-padding">
    <div class="container">

        <div class="billing_details">
            <form action="{{ route('website.do-checkout') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <div class="row contact_form" >
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="first" name="name" placeholder="Full name">
                                <span class="placeholder" placeholder="Full name"></span>
                            </div>

                            <div class="col-md-6 form-group ">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group ">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
            
                            <div class="col-md-12 form-group ">
                                <input type="text" class="form-control" id="add1" name="address" placeholder="Address">
                            </div>
                            <div class="col-md-12 form-group ">
                                <textarea class="form-control" id="add1" name="note" placeholder="Order note"></textarea>
                            </div>
                        </div>
        
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product<span>Total</span>
                                    </a>
                                </li>
                                <?php 
                                $total = 0;
                                foreach($carts as $cart):
                                $total += $cart->price;
                                ?>
                                <li>
                                    <a href="#">{{ $cart->product->title }}
                                        <span class="middle">x {{ $cart->quantity }}</span>
                                        <span class="last">{{ number_format($cart->price * $cart->quantity) }}</span>
                                    </a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <ul class="list list_2">
        
                                <li>
                                    <a href="javascript:;">Total<span>{{ number_format($total) }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p> Please send a check to Store Name, Store Street, Store Town, Store State / County, Store
                                    Postcode. </p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="assets/img/gallery/card.jpg" alt="" data-pagespeed-url-hash="3046227137"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <div class="check"></div>
                                </div>
                                <p> Please send a check to Store Name, Store Street, Store Town, Store State / County, Store
                                    Postcode. </p>
                            </div>
                            <div class="creat_account checkout-cap">
                                <input type="checkbox" id="f-option8" name="selector">
                                <label for="f-option8">I’ve read and accept the <a href="#">terms &amp; conditions*</a>
                                </label>
                            </div>
                            <input type="submit" class="btn w-100" value="Proceed to Paypal">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


@endsection