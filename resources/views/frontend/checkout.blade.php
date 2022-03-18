@extends('frontend.layouts.master')

@section('content')
@include('frontend.includes.global.breadcrumb')
<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Checkout Form s-->
                <div class="checkout-form">
                    <form action="{{ route('website.do-checkout') }}" method="POST">
                    @csrf
                    <div class="row row-40">
                        <div class="col-lg-7 mb--20">
                            @if( count($errors->all()) )
                                <ul class="alert alert-danger">
                                @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                                </ul>
                            @endif
                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-40">
                                <h4 class="checkout-title">Billing Address</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                    </div>
                              
                                   
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Phone number" name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Address line 1" name="address" value="{{ old('address') }}">
                                    </div>
                                </div>
                            </div>
           
                            <div class="order-note-block mt--30">
                                <label for="order-note">Order notes</label>
                                <textarea name="order_note" id="order-note" cols="30" rows="10" class="order-note"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">{{ old('order_note') }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <!-- Cart Total -->
                                <div class="col-12">
                                    <div class="checkout-cart-total">
                                        <h2 class="checkout-title">YOUR ORDER</h2>
                                        <h4>Product <span>Total</span></h4>
                                        <ul>
                                        <?php 
                                        
                                        $total = $carts['total'];
                                        foreach($carts['items'] as $key => $cart):
                                        ?>
                                            <li>
                                                <span class="left">{{ $cart->product->title }} x {{ $cart->quantity }}</span> 
                                                <span class="right">{{ number_format($cart->price * $cart->quantity) }}</span>
                                            </li>
                                        <?php endforeach;?>    
                                        </ul>
      
                                        <h4>Grand Total <span>{{ number_format($total) }}</span></h4>
                                        <div class="method-notice mt--25">
                                            <article>
                                                <h3 class="d-none sr-only">blog-article</h3>
                                                Sorry, it seems that there are no available payment methods for
                                                your state. Please contact us if you
                                                require
                                                assistance
                                                or wish to make alternate arrangements.
                                            </article>
                                        </div>
                                        <div class="term-block">
                                            <input type="checkbox" id="accept_terms2" name="accept_terms" value="1">
                                            <label for="accept_terms2">I’ve read and accept the terms &
                                                conditions</label>
                                        </div>
                                        <button class="place-order w-100">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection