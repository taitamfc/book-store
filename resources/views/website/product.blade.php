@extends('website.layouts.master')

@section('content')


<div class="services-area2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        @if(Session::has('success'))
                        <div class="alert alert-success mt-10" role="alert">
                            {{ Session::get('success')}} <a href="{{ route('website.cart') }}" class="alert-link">View cart</a>
                        </div>
                        @endif
                        <div class="single-services d-flex align-items-center mb-0">
                            <div class="features-img">
                                <img src="{{ $product->image }}" alt="{{ $product->title }}">
                            </div>
                            <div class="features-caption">
                                <h3>{{ $product->title }}</h3>
                                <p>By Evan Winter</p>
                                <div class="price">
                                    <span>{{ number_format($product->price) }}</span>
                                </div>
                                <div class="review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>(120 Review)</p>
                                </div>
                                <a href="{{ route('website.cart-add', $product->id) }}" class="white-btn mr-10">Add to
                                    Cart</a>
                                <a href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="our-client section-padding best-selling">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10">
                <div class="nav-button f-left">

                    <nav>
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab"
                                aria-controls="nav-one" aria-selected="true">Description</a>
                            <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab"
                                aria-controls="nav-two" aria-selected="false">Author</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="row">
                    <div class="offset-xl-1 col-lg-9">
                        <div class="desc">
                            {{ $product->description }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                <div class="row">
                    <div class="offset-xl-1 col-lg-9">
                        <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature
                            women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl
                            Cook eventually left Kendrick School in Reading at the age of 15, where she went to
                            secretarial school and then into an insurance office. After moving to London and then
                            Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
                            officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year
                            before John took a job in Southern Rhodesia with a motor company. Beryl bought their young
                            son a box of watercolours, and when showing him how to use it, she decided that she herself
                            quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday
                            and it was with this that she produced her first significant work, a half-length portrait of
                            a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named
                            ‘Hangover’ by Beryl’s husband and</p>
                        <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this
                            fact, we are seeing more and more recipe books and Internet websites that are dedicated to
                            the act of cooking for one. Divorce and the death of spouses or grown children leaving for
                            college are all reasons that someone accustomed to cooking for more than one would suddenly
                            need to learn how to adjust all the cooking practices utilized before into a streamlined
                            plan of cooking that is more efficient for one person creating less.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





@endsection