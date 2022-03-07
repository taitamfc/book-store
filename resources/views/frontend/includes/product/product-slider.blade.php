<!-- Product Details Slider Big Image-->
<div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
    "slidesToShow": 1,
    "arrows": false,
    "fade": true,
    "draggable": false,
    "swipe": false,
    "asNavFor": ".product-slider-nav"
    }'>
    <div class="single-slide">
        <img src="{{ $product->image }}" alt="">
    </div>

</div>
<!-- Product Details Slider Nav -->
<!-- <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
    "infinite":true,
    "autoplay": true,
    "autoplaySpeed": 8000,
    "slidesToShow": 4,
    "arrows": true,
    "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
    "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
    "asNavFor": ".product-details-slider",
    "focusOnSelect": true
    }'>
    <div class="single-slide">
        <img src="{{ $product->image }}" alt="">
    </div>

</div> -->