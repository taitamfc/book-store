<div class="header-middle pt--10 pb--10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <a href="{{ route('website.home') }}" class="site-brand">
                    <img src="{{ asset('frontend/image/logo.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-5">
                <div class="header-search-block">
                    <form action="{{ route('website.shop') }}" method="GET">
                        <input type="text" placeholder="Search entire store here" name="q">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="main-navigation flex-lg-right">
                    @include('frontend.includes.theme.cart')
                </div>
            </div>
        </div>
    </div>
</div>