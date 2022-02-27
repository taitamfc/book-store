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

            <div class="col-xl-4 col-lg-4 col-md-6">

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

            <div class="col-xl-8 col-lg-8 col-md-6">
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
                        <?php for($i = 1; $i < 9; $i++):?>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                            <div class="properties pb-30">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="{{ route('website.product',1) }}"><img
                                                src="{{ asset('website/assets/img/gallery/xbest_selling1.jpg.pagespeed.ic.KAl4WKwsoc.webp') }}"
                                                alt="" data-pagespeed-url-hash="3319296635"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </div>
                                    <div class="properties-caption properties-caption2">
                                        <h3><a href="{{ route('website.product',1) }}">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor;?>
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