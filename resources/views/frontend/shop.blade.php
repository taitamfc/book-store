@extends('frontend.layouts.master')
@section('content')
@include('frontend.includes.global.breadcrumb')
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2">
            @include('frontend.includes.shop.shop-toolbar')
                <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
                    @foreach( $products as $product )
                    <div class="col-lg-3 col-sm-6">
                        @include('frontend.includes.global.product-card')
                    </div>
                    @endforeach
                </div>
                <!-- Pagination Block -->
                {{ $products->links('frontend.includes.global.pagination') }}
            </div>
            @include('frontend.includes.shop.sidebar')
        </div>
    </div>
</main>
@endsection

@section('footer_scripts')
<script>
    jQuery( document ).ready( function(){
        jQuery('.order_by').on('change',function(){
            jQuery(this).closest('.auto_submit').submit();
            // var order_by = jQuery(this).val();
            
            // const urlParams = new URLSearchParams(window.location.search);
            // var q       = urlParams.get('q');
            // var limit   = urlParams.get('limit');
            // var page    = urlParams.get('page');

            // urlParams.set('order_by', (order_by != null ? order_by : '') );
            // urlParams.set('q', (q != null ? q : '') );
            // urlParams.set('limit', (limit != null ? limit : '') );
            // urlParams.set('page', (page != null ? page : '') );
            // window.location.search = urlParams;
        });
    });
</script>
@endsection