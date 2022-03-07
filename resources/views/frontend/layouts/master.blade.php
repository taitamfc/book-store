<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pustok - Book Store HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('frontend/css/main.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/image/favicon.ico') }}">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header header-4 mb--20 d-none d-lg-block">
            @include('frontend.includes.theme.header-top')
            @include('frontend.includes.theme.header-middle')
            @include('frontend.includes.theme.header-bottom')
        </div>
        @include('frontend.includes.theme.site-mobile-menu')
        @include('frontend.includes.theme.fixed-header')

        @yield('content')

        
    </div>

    <!--=================================
    Brands Slider
    ===================================== -->
    @include('frontend.includes.theme.brands-slider')               
    
    <!--=================================
    Footer Area
    ===================================== -->
    @include('frontend.includes.theme.site-footer')
    
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="{{ asset('frontend/js/plugins.js')}}"></script>
    <script src="{{ asset('frontend/js/ajax-mail.js')}}"></script>
    <script src="{{ asset('frontend/js/custom.js')}}"></script>

    @yield('footer_scripts')
</body>

</html>