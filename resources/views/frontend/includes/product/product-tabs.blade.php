<div class="sb-custom-tab review-tab section-padding">
    <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                aria-selected="true">
                DESCRIPTION
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                aria-selected="true">
                REVIEWS (1)
            </a>
        </li>
    </ul>
    <div class="tab-content space-db--20" id="myTabContent">
        @include('frontend.includes.product.product-tab-description');
        @include('frontend.includes.product.product-tab-review');
    </div>
</div>