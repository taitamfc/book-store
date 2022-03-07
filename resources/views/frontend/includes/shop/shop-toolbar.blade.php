<?php
    $order_bys = [
        'default' => 'Default Sorting',
        'name_asc' => 'By:Name (A - Z)',
        'name_desc' => 'By:Name (Z - A)',
        'price_asc' => 'By:Price (Low > High)',
        'price_desc' => 'By:Price (High > Low)',
    ];
?>
<div class="shop-toolbar with-sidebar mb--30">
    <form action="" class="auto_submit" method="GET">
        <input type="hidden" name="page" value="<?= ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; ?>">
        <input type="hidden" name="q" value="<?= ( isset( $_GET['q'] ) ) ? $_GET['q'] : ''; ?>">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-6  mt--10 mt-sm--0">
                <span class="toolbar-status">
                    Showing {{ $products->count() }} of {{ $products->total() }} items
                </span>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                <div class="sorting-selection">
                    <span>Sort By:</span>
                    <select class="form-control nice-select sort-select mr-0 order_by" name="order_by">
                        <?php foreach($order_bys as $order_by_key => $order_by_value):?>
                            <option value="{{ $order_by_key }}"
                            <?= ( isset( $_GET['order_by'] ) && $_GET['order_by'] == $order_by_key ) ? 'selected' : ''; ?>
                            >{{ $order_by_value }}</option> 
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>