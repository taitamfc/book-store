@extends('frontend.layouts.master')

@section('content')
@include('frontend.includes.global.breadcrumb')
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row  mb--60">
            <div class="col-lg-5 mb--30">
            @include('frontend.includes.product.product-slider')
            </div>
            <div class="col-lg-7">
                <div class="product-details-info pl-lg--30 ">
                    <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                    <h3 class="product-title">{{ $product->title }}</h3>
                    <div class="price-block">
                        <span class="price-new">{{ number_format($product->price) }}</span>
                        <!-- <del class="price-old">£91.86</del> -->
                    </div>
                    <!-- @include('frontend.includes.product.product-rating') -->
                    
                    <!-- <article class="product-details-article">
                        <h4 class="sr-only">Product Summery</h4>
                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust
                            with ruffles at the bottom of the
                            dress.</p>
                    </article> -->
                    <form action="{{ route('website.cart-add',$product->id) }}">
                        <div class="add-to-cart-row">
                            <div class="count-input-block">
                                <span class="widget-label">Qty</span>
                                <input type="number" name="qty" class="form-control text-center" value="1">
                            </div>
                            <div class="add-cart-btn">
                                <button type="submit" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="compare-wishlist-row">
                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                    </div> -->
                </div>
            </div>
        </div>
        @include('frontend.includes.product.product-tabs')
    </div>
    @include('frontend.includes.product.product-related')
    
</main>
@endsection