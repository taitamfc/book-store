<!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
<section class="">
    <div class="container">
        <div class="section-title section-title--bordered">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
            @foreach( $related_products as $product )
            <div class="single-slide">
                @include('frontend.includes.global.product-card')
            </div>
            @endforeach
        </div>
    </div>
</section>