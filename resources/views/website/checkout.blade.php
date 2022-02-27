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
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name">
                            <span class="placeholder" data-placeholder="First name"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="name">
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company"
                                placeholder="Company name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="number">
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="compemailany">
                            <span class="placeholder" data-placeholder="Email Address"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select>
                            <div class="nice-select country_select" tabindex="0"><span class="current">Country</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">Country</li>
                                    <li data-value="2" class="option">Country</li>
                                    <li data-value="4" class="option">Country</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Address line 01"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Address line 02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">District</option>
                                <option value="2">District</option>
                                <option value="4">District</option>
                            </select>
                            <div class="nice-select country_select" tabindex="0"><span class="current">District</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">District</li>
                                    <li data-value="2" class="option">District</li>
                                    <li data-value="4" class="option">District</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="checkout-cap">
                                <input type="checkbox" id="fruit1" name="keep-log">
                                <label for="fruit1">Create an account?</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                                <div class="checkout-cap">
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Order Notes"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li>
                                <a href="#">Product<span>Total</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Fresh Blackberry
                                    <span class="middle">x 02</span>
                                    <span class="last">$720.00</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Fresh Tomatoes
                                    <span class="middle">x 02</span>
                                    <span class="last">$720.00</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Fresh Brocoli
                                    <span class="middle">x 02</span>
                                    <span class="last">$720.00</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="list list_2">
                            <li>
                                <a href="#">Subtotal <span>$2160.00</span></a>
                            </li>
                            <li>
                                <a href="#">Shipping
                                    <span>Flat rate: $50.00</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Total<span>$2210.00</span>
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
                        <a class="btn w-100" href="#">Proceed to Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection