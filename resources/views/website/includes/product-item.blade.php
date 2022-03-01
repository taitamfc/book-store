<div class="properties pb-30">
    <div class="properties-card">
        <div class="properties-img">
            <a title="{{ $product->title }}" href="{{ route('website.product',$product->slug) }}"><img
                    src="{{ $product->image }}"
                    alt="{{ $product->title }}" ></a>
        </div>
        <div class="properties-caption properties-caption2">
            <h3><a title="{{ $product->title }}" href="{{ route('website.product',$product->slug) }}">{{ Str::limit($product->title, 40, $end='...') }}</a></h3>
            <p>J. R Rain</p>
            <div class="properties-footer d-flex justify-content-between align-items-center">
                <div class="review">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>(<span>120</span> Review)</p>
                </div>
                <div class="price">
                    <span>{{ number_format($product->price) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>