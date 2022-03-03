<div class="single-block">
    <div class="sb-custom-tab text-lg-left text-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="shop-tab" data-bs-toggle="tab" href="#shop" role="tab"
                    aria-controls="shop" aria-selected="true">
                    Featured Products
                </a>
                <span class="arrow-icon"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="men-tab" data-bs-toggle="tab" href="#men" role="tab" aria-controls="men"
                    aria-selected="true">
                    New Arrivals
                </a>
                <span class="arrow-icon"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="woman-tab" data-bs-toggle="tab" href="#woman" role="tab" aria-controls="woman"
                    aria-selected="false">
                    Most view products
                </a>
                <span class="arrow-icon"></span>
            </li>
        </ul>
        <div class="tab-content space-db--30" id="myTabContent">
            <div class="tab-pane active " id="shop" role="tabpanel" aria-labelledby="shop-tab">
                <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 4,
                        "rows":2,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                    @foreach( $featured_products as $product )
                    <div class="single-slide">
                       @include('frontend.includes.global.product-card')
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                                    "autoplay": true,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow": 4,
                                    "rows":2,
                                    "dots":true
                                    }' data-slick-responsive='[
                            {"breakpoint":992, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                    <!-- start loop -->
                    @foreach( $lastest_products as $product )
                    <div class="single-slide">
                       @include('frontend.includes.global.product-card')
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                    "autoplay": true,
                    "autoplaySpeed": 8000,
                    "slidesToShow": 4,
                    "rows":2,
                    "dots":true
                }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'
                >
                    @foreach( $most_view_products as $product )
                    <div class="single-slide">
                       @include('frontend.includes.global.product-card')
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>