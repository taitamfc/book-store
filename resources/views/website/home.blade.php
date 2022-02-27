@extends('website.layouts.master')

@section('content')
    @include('website.includes.slider-area')
    @include('website.includes.best-selling', ['products' => $lastest_products])
    <!-- @include('website.includes.services-area')                        
    @include('website.includes.our-client')                        
    @include('website.includes.banners')           -->
@endsection