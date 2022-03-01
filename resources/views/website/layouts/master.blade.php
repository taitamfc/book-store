<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/xfavicon.png.pagespeed.ic.OYy94fDeJN.webp">

    <link rel="stylesheet" href="{{ asset('website/assets/css/all1.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('website/assets/css/all2.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">

</head>

<body>
    @include('website.includes.header-area')
    
    <main>
                     
        
        @yield('content')

        <!-- @include('website.includes.subscribe-area')                           -->
    </main>
    @include('website.includes.footer')          
    

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="{{ asset('website/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('website/assets/js/jquery.slicknav.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/wow.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/jquery.magnific-popup.js') }}"> </script>
    <script src="{{ asset('website/assets/js/jquery.nice-select.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/jquery.counterup.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/waypoints.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/price_rangs.js') }}"> </script>

    <script src="{{ asset('website/assets/js/jquery.form.js') }}"> </script>
    <script src="{{ asset('website/assets/js/jquery.validate.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/contact.js') }}"> </script>
    <script src="{{ asset('website/assets/js/mail-script.js') }}"> </script>
    <script src="{{ asset('website/assets/js/jquery.ajaxchimp.min.js') }}"> </script>
    <script src="{{ asset('website/assets/js/plugins.js') }}"> </script>
    <script src="{{ asset('website/assets/js/main.js') }}"> </script>
</body>

</html>