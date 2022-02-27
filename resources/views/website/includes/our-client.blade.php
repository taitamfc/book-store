<section class="our-client section-padding best-selling">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">

                <div class="section-tittle  mb-40">
                    <h2>Latest Published items</h2>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="nav-button mb-40">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab"
                                aria-controls="nav-one" aria-selected="true">All</a>
                            <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab"
                                aria-controls="nav-two" aria-selected="false">Horror</a>
                            <a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab"
                                aria-controls="nav-three" aria-selected="false">Thriller</a>
                            <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab"
                                aria-controls="nav-four" aria-selected="false">Science Fiction</a>
                            <a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab"
                                aria-controls="nav-five" aria-selected="false">History</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="row">
                    <?php for( $i=1;$i<=6;$i++ ): ?>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="book-details.html"><img
                                            src="{{ asset('website/assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp')}}"
                                            alt=""></a>
                                </div>
                                <div class="properties-caption properties-caption2">
                                    <h3><a href="book-details.html">Moon Dance</a></h3>
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
                                            <span>$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor;?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                <div class="row">
                    <?php for( $i=1;$i<=6;$i++ ): ?>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="book-details.html"><img
                                            src="{{ asset('website/assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp')}}"
                                            alt=""></a>
                                </div>
                                <div class="properties-caption properties-caption2">
                                    <h3><a href="book-details.html">Moon Dance</a></h3>
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
                                            <span>$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor;?>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="more-btn text-center mt-15">
                    <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
                </div>
            </div>
        </div>
    </div>
</section>