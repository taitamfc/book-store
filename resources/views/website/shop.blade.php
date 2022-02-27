@extends('website.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="slider-area">
                <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                    <div class="hero-caption hero-caption2">
                        <h2>Book Category</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="listing-area pt-50 pb-50">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-4">

                <div class="category-listing mb-50">

                    <div class="single-listing">

                        <div class="select-Categories pb-30">
                            <div class="small-tittle mb-20">
                                <h4>Filter by Category</h4>
                            </div>
                            <label class="container">History
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                        </div>


                        <div class="select-Categories">
                            <div class="small-tittle mb-20">
                                <h4>Filter by Author Name</h4>
                            </div>
                            <label class="container">Buster Hyman
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                        </div>

                    </div>
                </div>

            </div>

            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="row justify-content-end">
                    <div class="col-xl-4">
                        <div class="product_page_tittle">
                            <div class="short_by">
                                <select name="#" id="product_short_list" style="display: none;">
                                    <option>Browse by popularity</option>
                                    <option>Name</option>
                                    <option>NEW</option>
                                    <option>Old</option>
                                    <option>Price</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Browse by popularity</span>
                                    <ul class="list">
                                        <li data-value="Browse by popularity" class="option selected focus">Browse by
                                            popularity</li>
                                        <li data-value="Name" class="option">Name</li>
                                        <li data-value="NEW" class="option">NEW</li>
                                        <li data-value="Old" class="option">Old</li>
                                        <li data-value="Price" class="option">Price</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best-selling p-0">
                    <div class="row">
                    <?php foreach($products as $product):?>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-6">
                            @include('website.includes.product-item', ['product' => $product])
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="more-btn text-center mt-15">
                            <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection