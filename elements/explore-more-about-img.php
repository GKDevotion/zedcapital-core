<style>
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.15rem;
        min-height: 55px;
    }

    .card-text {
        color: #6c757d;
        font-size: 1rem;
    }

    .card {
        border: 1px;
        background-color: var(--zed-backgound-color);
    }

    .explore-divider {
        height: 1px;
        width: 100%;
        background-color: var(--zed-border-color);
        margin: 15px auto;
    }

    .continue-reading-arraw:hover i{
        transition: transform 0.2s ease;
        transform: translateX(10px);
    }

    .text-timer{
        font-size: 0.9rem;
        color: #6c757d;
    }
</style>

<section class="bg-white">
    <div class="container py-5">
        <!-- Section header -->
        <div class="row align-items-center mb-4">
            <div class="col-10" data-aos="fade-up" data-aos-duration="850">
                <h2 class="h2 mb-2">Explore more <?php echo $paramArr['name'];?> with Zed Capital</h2>
            </div>
            <div class="col-2 text-end" data-aos="fade-up" data-aos-duration="850">
                <a href="#" class="show-all-btn">
                    Show All
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- Card grid -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850">
                <div class="card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/explore-1.jpg" class="card-img-top" alt="CFDs vs Stocks">
                    <div class="card-body">
                        <div class="card-title">CFDs vs Stocks: Which Trading Instrument is Right for You?</div>

                        <div class="explore-divider"></div>

                        <div class="card-text mt-2 mb-3">
                        Forex trading, or foreign exchange or FX trading, involves exchanging one currency for another.
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <div class="text-start">
                                    <a href="#" class="text-danger continue-reading-arraw fw-semibold text-decoration-none">
                                        Continue reading 
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-timer text-end">
                                    2025-03-28 17:30
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850">
                <div class="card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/explore-2.jpg" class="card-img-top" alt="Top 10 Blue-Chip Stocks">
                    <div class="card-body">
                        <div class="card-title">Top 10 Blue-Chip Stocks</div>

                        <div class="explore-divider"></div>

                        <div class="card-text mt-2 mb-3">
                        Forex trading, or foreign exchange or FX trading, involves exchanging one currency for another.
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="text-start">
                                    <a href="#" class="text-danger continue-reading-arraw fw-semibold text-decoration-none">
                                        Continue reading 
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-timer text-end">
                                    2025-03-28 17:30
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850">
                <div class="card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/explore-3.jpg" class="card-img-top" alt="Pre-Market and After-Hours Trading">
                    <div class="card-body">
                        <div class="card-title">How to Take Advantage of Pre-Market and After-Hours Trading</div>

                        <div class="explore-divider"></div>

                        <div class="card-text mt-2 mb-3">
                        Forex trading, or foreign exchange or FX trading, involves exchanging one currency for another.
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="text-start">
                                    <a href="#" class="text-danger continue-reading-arraw fw-semibold text-decoration-none">
                                        Continue reading 
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-timer text-end">
                                    2025-03-28 17:30
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>