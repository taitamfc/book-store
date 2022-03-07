<nav class="category-nav  primary-nav 
    <?= (isset($currentRouteName) && $currentRouteName == 'website.home') ? 'show' : ''; ?>"
    >
    <div>
        <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
            categories</a>
        <ul class="category-menu">
            @foreach( $categories as $category )
                @if( count($category->sub_cats) )
                <li class="cat-item has-children">
                    <a href="{{ route('website.category',$category->slug) }}">{{ $category->title }}</a>
                    <ul class="sub-menu">
                        @foreach( $category->sub_cats as $sub_cat )
                        <li><a href="{{ route('website.category',$sub_cat->slug) }}">{{ $sub_cat->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li class="cat-item"><a href="#">{{ $category->title }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>