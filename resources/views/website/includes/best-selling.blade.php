<div class="best-selling section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2>Best Selling Books Ever</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="selling-active">
                    <?php foreach($products as $product):?>
                        @include('website.includes.product-item',['product'=>$product])
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>