<div class="product-card">
    <div class="product-grid-content">
        <div class="product-header">
            <a href="" class="author">
                Epple
            </a>
            <h3><a href="product-details.html">Here Is A Quick Cure For Book</a></h3>
        </div>
        <div class="product-card--body">
            <div class="card-image">
            <img src="{{ $product->image }}" alt="">
                <div class="hover-contents">
                    <a href="{{ route('website.product',$product->slug) }}" class="hover-image">
                        <img src="{{ $product->image }}" alt="">
                    </a>
                    <div class="hover-btns">
                        <a href="{{ route('website.cart-add',$product->id) }}" class="single-btn">
                            <i class="fas fa-shopping-basket"></i>
                        </a>
                        <!-- <a href="wishlist.html" class="single-btn">
                            <i class="fas fa-heart"></i>
                        </a>
                        <a href="compare.html" class="single-btn">
                            <i class="fas fa-random"></i>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                            <i class="fas fa-eye"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="price-block">
                <span class="price">{{ number_format($product->price) }} đ</span>
            </div>
        </div>
    </div>
</div>