<ul id="navigation">
    <li><a href="{{ route('website.home') }}">Home</a></li>
    <li><a href="{{ route('website.shop') }}">Shop</a></li>
    <li><a href="#">Categories</a>
        <ul class="submenu">
            <li><a href="{{ route('website.category',1) }}">Cat 1</a></li>
            <li><a href="{{ route('website.category',1) }}">Cat 2</a></li>
        </ul>
    </li>
    <li><a href="{{ route('website.cart') }}">Cart</a></li>
</ul>