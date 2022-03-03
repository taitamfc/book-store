<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pustok - Book Store HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="frontend/css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="frontend/css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
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

        <!--=================================
        Hero Area
        ===================================== -->
        @include('frontend.includes.home.hero-area')
        
        <!--=================================
        Home Features Section
        ===================================== -->
        @include('frontend.includes.home.home-features')
        
        <!--=================================
        Home Category Gallery
        ===================================== -->
        @include('frontend.includes.home.home-category')
        
        <!--=================================
        Home Two Column Section
        ===================================== -->
        @include('frontend.includes.home.home-promotion')
        
    
        <!--=================================
        Footer
        ===================================== -->
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
    <script src="frontend/js/plugins.js"></script>
    <script src="frontend/js/ajax-mail.js"></script>
    <script src="frontend/js/custom.js"></script>
</body>

</html>