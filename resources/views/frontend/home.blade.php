@extends('frontend.layouts.master')

@section('content')
<!--=================================
Hero Area
===================================== -->
@include('frontend.includes.home.hero-area')

<!--=================================
Home Features Section
===================================== -->
@include('frontend.includes.home.home-features')

<!--=================================
Home Two Column Section
===================================== -->
@include('frontend.includes.home.home-promotion')
@endsection