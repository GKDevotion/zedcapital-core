<?php
$seoArr = [
    "title" => "Trade the World's Largest Financial Market | Zed Academy Forex Guide",
    "description" => "Trade the world's largest financial market with Zed Academy. Learn forex strategies, access global liquidity and invest confidently in international markets.",
    "keyword" => "largest financial market, forex trading, global market trading, Zed Academy trading, international trading platform, how to trade the world's largest financial market online, strategies for trading global financial markets, Zed Academy guide to forex and global markets, trade currency and forex in the world's largest market, learn professional trading in international markets, best platform to trade the world's largest financial market, global forex trading tips and insights"
];
include_once ('elements/header.php');
// include_once ('elements/product-child-menu');
?>

<style>
    .forex-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/product-forex-background.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 74vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 120px;
    }

    .forex-header-divider {
        width: 75px;
        background-color: var(--zed-primary);
    }

    .how-it-work-circle{
        background-color: var(--zed-primary);
        width: 120px; 
        height: 120px; 
        line-height: 1.2; 
        font-size: 1.25rem; 
        padding: 10px;
    }

    .forex-header h2{
        width: 75%;
    }

    .forex-header p{
        width: 50%;
    }

    @media (max-width: 767.98px) {

        .forex-header{
            background-size: contain;
            background-position: center;
            position: relative;
            min-height: 65vh;
        }
        .set-diamond-image{
            display: none;
        }

        .forex-header h2{
            width: 100%;
        }

        .forex-header p{
            width: 100%;
        }
    }
</style>

<section class="py-5 forex-header">
    <div class="container">
        <div class="row align-items-center">
        
            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute start-50 top-0 float-y" style="width: 80px; height: 50px;margin: 0 -200px;">
            </div>

            <!-- Text Column -->
            <div class="col-md-6 text-black"  >
                <h1 class="fw-bold h2 mb-5 pe-2" data-aos="fade-up" data-aos-duration="800">
                    Trade the World's Largest Financial Market
                </h1>
                <div class="p-1 forex-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    <b>Forex</b> is the world's largest financial market, where currencies trade continuously across major, minor and exotic pairs driven by macroeconomics, central bank policy and market sentiment.
                </p>

            </div>

        </div>
    </div>
</section>

<div class="container" style="margin-top: -30px;" >
    <div class="row align-items-center pt-0">
        <!-- Red Circle with Text -->
        <div class="col-md-2 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="800">
            <div class="how-it-work-circle d-flex align-items-center justify-content-center rounded-circle text-white fw-bold text-center mx-auto" >
                <div>How it<br>Works</div>
            </div>
        </div>

        <!-- Bullet Points -->
        <div class="col-md-10 p-0">
            <ul class="mb-0" data-aos="fade-up" data-aos-duration="800" style="list-style-type: none;">
                <li class="px-0 px-md-5 mt-3 mt-md-0">
                    With our advanced platform, competitive trading conditions and institutional grade infrastructure, you can trade with speed, precision and confidence.
                </li>
            </ul>
            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/forex-red-black-diamond.png" alt="Corner Image" class="position-absolute end-0 bottom-0 float-y" style="width: 100px; height: 80px;margin: 15px -50px">
            </div>
        </div>
    </div>
</div>

<style>
    .card-background{
        background-color: #ffffffbf;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-background:hover {
        border: 1px solid var(--zed-secondary);
    }

    .stock-heading{
        display: flex;
        align-items: center;   /* Vertical center */
    }

    @media (max-width: 767.98px) {
        .card-background{
            padding: 2rem !important;
        }
    }
    
    .network-container img {
        max-width: 100%;
        height: auto;
    }
    
    .info-section h5 {
        font-weight: bold;
    }

    .info-section p {
        color: #6c757d;
    }
</style>

<div class="container-fluid py-5">
    <div class="row align-items-center">
        
        <!-- Left Side Icons -->
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="800">
            <img src="<?php echo getBaseUrl(); ?>/assets/images/forex-benefit.webp" class="w-100 ps-0 ps-md-5" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-1 px-md-5 pe-1 pe-md-5">
            <div class="info-section" data-aos="fade-up" data-aos-duration="800">
                <h3 class="fw-bold mb-4">Why Trade Forex with us</h3>
                
                <h5>Global Market Access</h5>
                <p>
                    Trade all major and minor currency pairs including USD, EUR, GBP, JPY, AUD and more.
                </p>

                <h5>High Liquidity</h5>
                <p>
                    Enter and exit trades at any time with seamless execution supported by deep liquidity.
                </p>

                <h5>Flexibility</h5>
                <p>
                    Benefit from opportunities in both rising and falling markets across sessions worldwide.
                </p>

                <h5>Professional Platform</h5>
                <p>
                    Use our MT5 system for advanced charting, technical indicators, analysis tools and automated strategies.
                </p>

                <h5>Transparent Trading Conditions</h5>
                <p>
                    Experience competitive spreads, fast execution and reliable pricing.
                </p>

                <a href="#" class="show-all-btn w-100 d-none" data-aos="fade-up" data-aos-duration="800" title="Read More">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="position-relative set-diamond-image">
        <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/red-black-diamonds.png" alt="Red Black Diamonds" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -60px 90px;" >
    </div>
</div>

<style>
    .stock-card {
        border-radius: 15px;
        box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
        padding: 20px;
        text-align: center;
        background-color: aliceblue;
        margin: 10px 20px;
    }
    .btn-buy {
        background-color: var(--zed-success);
        color: white;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        margin-top: 10px;
    }

    .btn-buy:hover {
        background-color: var(--zed-success-hover);
        color: white;
    }

    .btn-sell {
        background-color: var(--zed-primary);
        color: white;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        margin-top: 10px;
    }

    .btn-sell:hover {
        background: var(--zed-primary-hover) !important;
        color: white;
    }

    .divider {
        height: 10px;
        width: 60px;
        background-color: var(--zed-primary);
        margin: 20px auto;
    }

    .sl-divider {
        height: 0px;
        width: 80px;
        background-color: var(--zed-dark-text);
        margin: 10px auto;
    }

    .btn-danger{
        background-color: var(--zed-primary);
    }

    .text-shadow{
        text-shadow: 0 2px 2px #999999;
    }

    .carousel-control-next, .carousel-control-prev{
        width: 8%;
    }

    .bg-red{
        --bs-bg-opacity: 1 !important;
        background-color: var(--zed-primary)!important ;
    }

    .owl-nav, .owl-dots{
        display: none;
    }

    .stock-card img{
        width: 60px !important;
        height: 60px;
        margin: -45px 0px;
        /* border-radius: 50px; */
    }

    .stock-card h5{
        text-align: end;
    }
</style>

<div class="container py-5 mb-5">
    <!-- Title -->
    <div class="text-center mb-4">
        <h2 class="h2" data-aos="fade-up" data-aos-duration="800">
            Institutional Market Feed - Forex CFDs
        </h2>
        <div class="divider" data-aos="fade-up" data-aos-duration="800"></div>
        <p class="text-muted w-75 p-0 p-md-2 m-auto" data-aos="fade-up" data-aos-duration="800">
            One of the most significant advantages of trading CFDs on pairs are that you can gain full exposure to price movements with a small initial deposit.
        </p>
    </div>

    <div id="productTradeSlider" class="row g-4 justify-content-center">
        <div class="owl-carousel">
            <!-- Card AUDUSD -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/AUDUSD.png" class="" alt="Australian Dollar / U.S. Dollar">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                AUDUSD
                            </span>
                        </h5>
                    </div>

                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold AUDUSD-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold AUDUSD-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>

                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>

                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card EURUSD-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/EURUSD.png" class="" alt="Euro / U.S. Dollar">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                EURUSD
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold EURUSD-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold EURUSD-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card EURGBP-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/EURGBP.png" class="" alt="Euro / British Pound">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                EURGBP
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold EURGBP-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold EURGBP-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card EURJPY-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/EURJPY.png" class="" alt="Euro / Japanese Yen">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                EURJPY
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold EURJPY-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold EURJPY-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card GBPUSD -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/GBPUSD.png" class="" alt="British Pound / U.S. Dollar">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                GBPUSD
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold GBPUSD-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold GBPUSD-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>
            
            <!-- Card GBPJPY -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/GBPJPY.png" class="" alt="British Pound / Japanese Yen">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                GBPJPY
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold GBPJPY-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold GBPJPY-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>
            
            <!-- Card NZDUSD -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/NZDUSD.png" class="" alt="New Zealand Dollar / U.S. Dollar">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                NZDUSD
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold NZDUSD-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold NZDUSD-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>
            
            <!-- Card USDCAD -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/USDCAD.png" class="" alt="U.S. Dollar / Canadian Dollar">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                USDCAD
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold USDCAD-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold USDCAD-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>
            
            <!-- Card USDCHF -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/USDCHF.png" class="" alt="U.S. Dollar / Swiss Franc">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                USDCHF
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold USDCHF-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold USDCHF-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card USDJPY -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/products/USDJPY.png" class="" alt="U.S. Dollar / Japanese Yen">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                USDJPY
                            </span>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold USDJPY-s-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold USDJPY-s-ask">0.00</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="my-4 py-2">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2 mt-4">
                        <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                        <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="text-center mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="850">
        <a href="javascript:void(0)" class="btn btn-danger px-4 py-2 mt-2 rounded-pill openLiveAccount" title="Read More">
            Click here to view the Forex
        </a>
    </div>
</div>

<script>

    // List of symbols to fetch
    const symbols = ["AUDUSD", "EURUSD", "EURGBP", "EURJPY", "GBPUSD", "GBPJPY", "NZDUSD", "USDCAD", "USDCHF", "USDJPY"];

    function fetchMarketData() {
        $.ajax({
            url: 'https://livechart.zedcapital.com:5000/data',
            method: 'GET',
            dataType: 'json',
            success: function(response) {

                // Filter objects that match any of the symbols
                const filteredData = response.filter(item => 
                    symbols.some( symbol => item.Symbol.includes( symbol ) )
                );

                if (filteredData.length > 0) {
                    $.each(filteredData, function(index, company) {

                        // Remove trailing dots (.) from Symbol
                        const cleanedSymbol = company.Symbol.replace(/\./g, '-');
                        // Append each company's data to the div
                        $("."+cleanedSymbol+"-bid").text( company.Bid );
                        $("."+cleanedSymbol+"-ask").text( company.Ask );

                        // const bidElem = document.querySelector(`.${cleanedSymbol}-bid`);
                        // const askElem = document.querySelector(`.${cleanedSymbol}-ask`);

                        // if (bidElem && askElem) {
                        //     const bid = $("."+cleanedSymbol+"-bid").text();
                        //     const ask = $("."+cleanedSymbol+"-ask").text();

                        //     bidElem.textContent = bid;
                        //     askElem.textContent = ask;

                        //     // Add green/red animation or color update based on change
                        //     bidElem.classList.toggle("text-success", bid > ask);
                        //     bidElem.classList.toggle("text-danger", bid < ask);
                        //     askElem.classList.toggle("text-success", ask > bid);
                        //     askElem.classList.toggle("text-danger", ask < bid);
                        // }
                    });
                } else {
                    $('#companyData').text('No matching company data found.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    setInterval(fetchMarketData, 1000); // Fetch every 1 second
</script>

<style>
    .stock-section {
        background-color: #e53935;
        color: white;
        padding: 0;
        position: relative;
        overflow: hidden;
    }
    .stock-section h2 {
        font-weight: bold;
    }
    .stock-section .icons img {
        width: 70px;
        height: 70px;
        object-fit: contain;
        background: white;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        transition: transform 0.4s ease;
    }
    .stock-section .icons img:hover {
        transform: translateY(-10px);
    }
    .icons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }
</style>

<section class="stock-section">
    <div class="container py-5 py-md-4">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="h2">Currency Pairs at Your Fingertips</h2>
                <div class="my-5" style="width: 60px; height: 8px; background: white;"></div>
                <p class="fw-bold d-none">
                    Forex trading involves exchanging one currency for another, allowing you to speculate on currency price movements. Unlike other financial instruments, you don't own the currency but profit from its value changes.
                </p>

                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Majors</h3>
                <h5 class="mb-3 text-white" data-aos="fade-up" data-aos-duration="850">
                    EURUSD, GBPUSD, USDJPY, AUDUSD, USDCHF
                </h5>

                <h3 class="fw-bold mt-3" data-aos="fade-up" data-aos-duration="850">Minors</h3>
                <h5 class="mb-3 text-white" data-aos="fade-up" data-aos-duration="850">
                    EURGBP, GBPJPY, AUDNZD, CADJPY
                </h5>

                <h3 class="fw-bold mt-3" data-aos="fade-up" data-aos-duration="850">Exotics</h3>
                <h5 class="mb-3 text-white" data-aos="fade-up" data-aos-duration="850">
                    USDTRY, USDSGD, USDZAR, EURMXN
                </h5>

                <p class="mt-5">
                    From the most popular pairs to region specific currencies, Zed Capital International Ltd connects you to new opportunities around the globe.
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/Currency-Pairs-at-Your-Fingertips.webp" class="w-100" alt="Currency Pairs at Your Fingertips">
            </div>
        </div>
    </div>
</section>

<style>

    .opportunities-for-investors{
        /* background-color: var(--zed-backgound-color); */
        padding: 50px 0;
    }

    .risks-considerations{
        padding: 50px 0;
    }
    .tech-feature {
        padding: 40px 50px;
        border: 1px solid var(--zed-border-color) !important;
        border-radius: 25px;
        background-color: #fff !important;
        margin: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .tech-feature:hover {
        border: 1px solid var(--zed-secondary) !important;
    }
    .icon-circle img{
        width: 40px;
    }
    
</style>

<section class="opportunities-for-investors">

    <div class="container py-5">

        <h2 class="h4 mb-3">Key Benefits</h2>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/Diversified-Access.svg" alt="Diversified Access">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Diversified Access</h5>
                            <p class="mb-0 small-muted">
                                Expand your portfolio by adding Forex to stocks, commodities and indices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/Advaced-Tools.svg" alt="Advanced Tools">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Advanced Tools</h5>
                            <p class="mb-0 small-muted">
                                Access professional features including technical analysis, indicators and automated systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/Efficiency.svg" alt="Efficiency">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Efficiency</h5>
                            <p class="mb-0 small-muted">
                                Trade continuously five days a week without delays or additional settlement costs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/reliability.svg" alt="Reliable Execution">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Reliable Execution</h5>
                            <p class="mb-0 small-muted">
                                Depend on fast and secure trade processing execution designed to meet institutional standards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Professional Trading Solutions for Global Currencies";

$featureIconArr = [
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Liquidity.png',
        'title' => 'High liquidity'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Low-entry-capital.png',
        'title' => 'Low entry capital'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Profit-both-ways.png',
        'title' => 'Profit both ways'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Currency-Volatility.png',
        'title' => 'Wide currency pairs'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Tight-spreads.png',
        'title' => 'Tight spreads'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Hedging-options.png',
        'title' => 'Hedging options'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Flexible-lot-sizes.png',
        'title' => 'Flexible lot sizes'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Mobile-algo-trading.png',
        'title' => 'Mobile & algo trading'
    ],
];

include_once ('elements/feature-trading-icons.php');
?>

<style>
    .custom-card {
        border: 1.5px solid #efefef;
        border-radius: 1rem;
        background: #fff;
        padding: 2.4rem 2rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    }
    .highlight-banner {
        background: #ea4335;
        border-radius: 0.8rem;
        padding: 1.2rem 1.8rem;
        color: #fff;
        font-weight: 700;
        font-size: 1.45rem;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
    }
    .highlight-banner .sub-text {
        font-size: 1rem;
        font-weight: 400;
        margin-left: 1.5rem;
        margin-top: 0.20rem;
    }
    .card-section-title {
        font-weight: 700;
        font-size: 1.07rem;
        color: #222;
    }
    .divider-col {
        border-left: 1px solid #dedede;
    }
    @media (max-width: 991px) {
        .custom-card { padding: 1.5rem 0.7rem; }
        .highlight-banner { flex-direction: column; font-size: 1.15rem; }
        .highlight-banner .sub-text { margin: 0.6rem 0 0 0;}
        .divider-col { border-left: none; border-top: 1px solid #dedede; margin-top: 1rem; }
    }
</style>

<section style="background-color: var(--zed-backgound-color);" class="p-2 p-md-5">
    <div class="container my-0 my-md-5">
        <div class="row custom-card mx-auto">
            <div class="highlight-banner" data-aos="fade-up" data-aos-duration="800" >
                <p data-aos="fade-up" data-aos-duration="800">
                    Forex—Trusted, Transparent, Professional 
                </p>
                <span class="fs-6" data-aos="fade-up" data-aos-duration="800">
                    <b>Forex</b> is the cornerstone of modern financial markets, offering liquidity, flexibility and continuous opportunities. With Zed Capital International Ltd, you can trade the world’s largest financial market backed by professional tools, transparent conditions and a trusted partner.
                </span>
            </div>
            <div class="row g-4" data-aos="fade-up" data-aos-duration="800" >
                <div class="col-12" data-aos="fade-up" data-aos-duration="800" >
                    <div class="card-section-title mx-3">Risks to Consider</div>
                    <div class="mt-2 mx-3" style="color:#6c757d;">
                        <p data-aos="fade-up" data-aos-duration="800">
                            Forex trading involves exposure to market volatility. Currency prices are influenced by central bank actions, interest rate changes, economic data and geopolitical events. Leverage enhances potential returns but also magnifies risks.
                        </p>

                        <p data-aos="fade-up" data-aos-duration="800">
                            To help manage exposure effectively, Zed Capital International Ltd offers stop loss, take profit and margin management tools within our trading platform.
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 divider-col" data-aos="fade-up" data-aos-duration="800" >
                    <div class="card-section-title">&nbsp;</div>
                    <div class="mt-2 px-2" style="color:#6c757d;">
                        To help manage exposure effectively, Zed Capital International Ltd offers stop loss, take profit and margin management tools within our trading platform.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$paramArr = [
    'name' => "Forex"
];

$videoArr = [
    [
        'id' => "XZihxVxHGro",
        "title" => "What is Forex?",
        "description" => "Trades always occur in currency pairs, meaning when you purchase one currency, you're simultaneously selling another.",
    ],
    [
        'id' => "vjfEnAkpLe0",
        "title" => "Register on Zed Capital in Minutes | Step-by-Step Guide",
        "description" => "Ready to start your trading journey?",
    ],
	[
        'id' => "Xpscp62IAgE",
        "title" => "Zed Capital: Global Capital Market Solutions",
        "description" => "Experience the power of intelligent investing with Zed Capital, a licensed and regulated forex trading platform designed for global traders.",
    ],
];

include_once ('elements/explore-more-about.php');
?>

<?php
// include_once ('elements/faq-questions');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 130px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>