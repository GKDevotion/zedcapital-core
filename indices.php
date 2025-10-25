<?php
$seoArr = [
    "title" => "Trade Indices | Stock Market Index Trading Guide - Zed Academy",
    "description" => "Learn how to trade indices with Zed Academy. Explore global stock market indices, strategies and tips to maximize your trading opportunities confidently.",
    "keyword" => "indices trading, stock market indices, trade global indices, index trading strategies, Zed Academy indices, how to trade stock market indices online, best strategies for indices trading, Zed Academy guide to global indices, learn indices trading for beginners, trade S&P 500, Dow Jones, NASDAQ, FTSE, stock indices trading tips and analysis, invest in global stock market indices"
];
include_once ('elements/header.php');
// include_once ('elements/product-child-menu');
?>

<style>
    .indices-header{
        padding: 100px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/product-indices-background.webp');
        background-size: cover;
        background-position: unset;
        background-repeat: no-repeat;
        position: relative;
        min-height: 80vh;
        /* display: flex; */
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 120px;
    }

    .indices-header-divider {
        width: 75px;
        background-color: var(--zed-primary);
    }

    .basic-of-indices{
        background-color: #ffffff59;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
    }

    .indices-header h2{
        width: 75%;
    }

    h5.stock-indices{
        width: 25%;
    }

    /* .indices-header p{
        width: 75%;
    } */

    @media (max-width: 767.98px) {
        .indices-header{
            margin-top: 100px;
            min-height: 70vh;
        }

        .set-diamond-image{
            display: none;
        }

        .indices-header h2{
            width: 100%;
        }

        .indices-header p{
            width: 100%;
        }

        h5.stock-indices{
            width: 100%;
            text-align: center;
        }

        .container{
            padding: 1.5rem;
        }
    }
</style>

<section class="py-5 indices-header pe-0">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-5 text-black py-5 px-3 px-md-0" data-aos="fade-up" data-aos-duration="800" >
                <h1 class="h2 mb-5">Trade Global Indices</h1>
                <div class="p-1 indices-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-100" data-aos="fade-up" data-aos-delay="800">
                    Access leading global indices with Zed Capital International Ltd. Trade broad market performance in a single instrument and capture trends, diversify efficiently and express macro views without stock selection with transparent execution.
                </p>
            </div>

            <!-- Image Column -->
            <div class="col-md-7 text-black d-none d-lg-block" data-aos="fade-up" data-aos-duration="800" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/product-indices.webp" class="img-fluid" alt="Product Indices">
            </div>

        </div>
        
        <div class="row mt-5">
            <div class="bottom-0 ">
                <div class="position-relative set-diamond-image" >
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/best-of-indicies-diamonds.png" alt="Best of Indicies Diamonds" class="position-absolute start-0 bottom-0" style="width: 80px; height: 100px;margin: -35px 100px;">
                </div>
                <div class="basic-of-indices col-md-12 text-center p-4" data-aos="fade-up" data-aos-duration="800" >
                    <h3 class="fw-bold">Basics of Indices</h3>
                    <p class="mb-0 small">
                        With our advanced platform, you can trade leading global indices such as the S&P 500, NASDAQ 100, DAX 40, FTSE 100 and Nikkei 225 with competitive pricing and professional tools.
                    </p>
                </div>
            </div>    

            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/silver-diamond.png" alt="Silver Diamond" class="position-absolute end-0 bottom-0 float-y" style="width: 88px; height: 60px; margin: -20px -35px;">
            </div>
        </div>
    </div>
</section>

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
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0 text-center" data-aos="fade-up" data-aos-duration="800" >
            <img src="<?php echo getBaseUrl(); ?>/assets/images/indicies-benefit.webp" class="w-100" alt="indices Benefit">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-0 px-md-5 pe-0 pe-md-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section">
                <h3 class="fw-bold mb-4">Why Trade Indices with us</h3>
                
                <h5>Global Market Access</h5>
                <p>
                    Trade the most popular indices from the United States, Europe, Asia and the Middle East.
                </p>

                <h5>Broad Exposure</h5>
                <p>
                    One position gives you access to the performance of an entire market or sector.
                </p>

                <h5>Two Way Opportunities</h5>
                <p>
                    Capture potential gains in both rising and falling markets.
                </p>

                <h5>Transparent Pricing</h5>
                <p>
                    Enjoy competitive spreads, strong liquidity and reliable execution at every step.
                </p>

                <a href="#" class="show-all-btn w-100 d-none" title="Read More">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
            <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/red-black-diamonds.png" alt="Red Black Diamonds" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
        </div>
    </div>
</div>

<style>
    .stock-card {
        border-radius: 15px;
        box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
        padding: 20px;
        text-align: center;
        background-color: aliceblue;
        margin: 20px;
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

    .cfd-indicies-divider {
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

    .owl-nav, .owl-dots{
        display: none;
    }

    .stock-card img{
        width: 50px !important;
        height: 50px;
        margin: -45px 0px;
        border-radius: 50px;
    }

    .stock-card h5{
        text-align: end;
    }
</style>

<div class="container py-5">
    <!-- Title -->
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="800" >
        <h2 class="h2">
            Institutional Market Feed - Indices CFDs
        </h2>
        <div class="cfd-indicies-divider" data-aos="fade-up" data-aos-duration="800" ></div>
        <p class="text-muted w-75 p-0 p-md-2 m-auto" data-aos="fade-up" data-aos-duration="800" >
            One of the most significant advantages of trading CFDs on indices is that you can gain full exposure to price movements with a small initial deposit.
        </p>
    </div>

    <div id="productTradeSlider" class="row g-4 justify-content-center">
        <div class="owl-carousel">
            <!-- Australia 200 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/w580/au.webp" class="" alt="Australia 200">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <p class="text-shadow mb-2">
                                Australia 
                            </p>
                            <p>
                                200
                            </p>
                        </h5>
                    </div>

                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold Australia-200---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold Australia-200---ask">0.00</div>
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

            <!-- US TECH 100-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/us.webp" class="" alt="US TECH 100">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <p class="text-shadow mb-2">
                                US TECH
                            </p>
                            <p>
                                100
                            </p>

                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold US-TECH-100---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold US-TECH-100---ask">0.00</div>
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

            <!-- US Wall Street 30-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/us.webp" class="" alt="US Wall Street 30">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <p class="text-shadow mb-2">
                                US Wall Street
                            </p>
                            <p>
                                30
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold US-Wall-Street-30-bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold US-Wall-Street-30-ask">0.00</div>
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

            <!-- GERMANY 40-->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/de.webp" class="" alt="GERMANY 40">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                GERMANY
                            </span>
                            <p>
                                40
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold Germany-40---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold Germany-40---ask">0.00</div>
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

            <!-- Hong Kong 50 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/hk.webp" class="" alt="Hong Kong 50">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                Hong Kong
                            </span>
                            <p>
                                50
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold Hong-Kong-50---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold Hong-Kong-50---ask">0.00</div>
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
            
            <!-- China A50 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/cn.webp" class="" alt="China A50">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                China
                            </span>
                            <p>
                                A50
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold China-A50---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold China-A50---ask">0.00</div>
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
            
            <!-- Switzerland 20 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/ch.webp" class="" alt="Switzerland 20">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                Switzerland
                            </span>
                            <p>
                                20
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold Switzerland-20---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold Switzerland-20---ask">0.00</div>
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
            
            <!-- France 40 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/fr.webp" class="" alt="France 40">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                France
                            </span>
                            <p>
                                40
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold France-40---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold France-40---ask">0.00</div>
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
            
            <!-- Euro Stoxx 50 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://s3-symbol-logo.tradingview.com/country/EU.svg" class="" alt="Euro Stoxx 50">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                Euro Stoxx
                            </span>
                            <p>
                                50
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold Euro-Stoxx-50---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold Euro-Stoxx-50---ask">0.00</div>
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

            <!-- US Russell 2000 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/us.webp" class="" alt="US Russell 2000">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                US Russell
                            </span>
                            <p>
                                2000
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold US-Russell-2000---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold US-Russell-2000---ask">0.00</div>
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

            <!-- UK100 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/gb.webp" class="" alt="UK100">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow mb-2">
                                UK
                            </span>
                            <p>
                                100
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold UK100---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold UK100---ask">0.00</div>
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

            <!-- US500 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/h80/us.webp" class="" alt="US500">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                US
                            </span>
                            <p>
                                500
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold US500---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold US500---ask">0.00</div>
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

            <!-- JAPAN 225 -->
            <div class="item mt-4">
                <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="row">
                        <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <img src="https://flagpedia.net/data/flags/w580/jp.webp" class="" alt="JAPAN 225">
                        </div>
                        <h5 class="fw-bold mb-4">
                            <span class="text-shadow">
                                JAPAN
                            </span>
                            <p>
                                225
                            </p>
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-3">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold JAPAN-225---bid">0.00</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold JAPAN-225---ask">0.00</div>
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

    <!-- Button -->
    <div class="text-center mt-4 mb-5" data-aos="fade-up" data-aos-duration="800" >
        <a href="#" class="btn btn-danger px-4 py-2 mt-4 rounded-pill" title="Read More">
        Click here to view the indices
        </a>
    </div>
</div>

<script>
    // List of symbols to fetch
    // const symbols = ["US500", "Germany 40", "UK100", "JAPAN 225", "US Wall Street 30"];
    const symbols = ["Australia 200", "US TECH 100", "US Wall Street 30", "Germany 40", "Hong Kong 50", "China A50", "Switzerland 20", "France 40", "Euro Stoxx 50", "US Russell 2000", "UK100", "US500", "JAPAN 225"];

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
                    // $('#companyData').text( JSON.stringify( filteredData, null, 2 ) );

                    // Loop through filteredData with $.each
                    $.each(filteredData, function(index, company) {

                        // Remove trailing dots (.) from Symbol
                        const cleanedSymbol = company.Symbol.replace(/[.\s]/g, '-');
                        console.log(cleanedSymbol);

                        // Append each company's data to the div
                        $("."+cleanedSymbol+"-bid").text( company.Bid );
                        $("."+cleanedSymbol+"-ask").text( company.Ask );

                        const bidElem = document.querySelector(`.${cleanedSymbol}-bid`);
                        const askElem = document.querySelector(`.${cleanedSymbol}-ask`);

                        if (bidElem && askElem) {
                            const bid = $("."+cleanedSymbol+"-bid").text();
                            const ask = $("."+cleanedSymbol+"-ask").text();

                            bidElem.textContent = bid;
                            askElem.textContent = ask;

                            // Add green/red animation or color update based on change
                            bidElem.classList.toggle("text-success", bid > ask);
                            bidElem.classList.toggle("text-danger", bid < ask);
                            askElem.classList.toggle("text-success", ask > bid);
                            askElem.classList.toggle("text-danger", ask < bid);
                        }
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
        color: white;
        padding: 80px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/indicies-trading-background.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
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
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 w-75">Popular Indices You Can Trade</h2>
                <div class="" style="width: 60px; height: 6px; background: white; margin: 50px 0;"></div>

                <p class="fw-bold d-none" data-aos="fade-up" data-aos-duration="850">
                    Stock trading allows you to buy and sell company stocks, enabling you to profit from 
                    changes in their market value. Unlike traditional investing, CFDs on shares let you trade 
                    without owning the underlying asset, offering greater flexibility and potential.
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">United States</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    S&P 500, NASDAQ 100, Dow Jones Industrial Average
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Europe</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    DAX 40, FTSE 100, CAC 40, Euro Stoxx 50
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Asia-Pacific</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    Nikkei 225, Hang Seng, ASX 200
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Middle East</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    Tadawul, DFM Index, ADX General
                </p>

                <!-- Floating Icons -->
                <div class="col-lg-4 col-md-12 icons">
                    
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
        <h2 class="h4 mb-3">Benefits of Trading Stocks in indices?</h2>
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
                                Reduce risk by trading an entire basket of companies instead of individual stocks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/professional-tools.svg" alt="Professional Tools">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Professional Tools</h5>
                            <p class="mb-0 small-muted">
                                Trade with confidence backed by strong market liquidity and lightning-fast execution
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
                                React quickly to market news, sector performance and economic announcements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/liquidity.svg" alt="Liquidity & Speed">
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Liquidity & Speed</h5>
                            <p class="mb-0 small-muted">
                                Use advanced features such as technical analysis, risk controls and automated trading systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Why Indices Matter for Traders";

$featureIconArr = [
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Built-in-diversification.png',
        'title' => 'Built-in diversification'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Lower-single-stock-risk.png',
        'title' => 'Lower single-stock risk'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Cost-efficient.png',
        'title' => 'Cost-efficient'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Leverage-available.png',
        'title' => 'Leverage available'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Transparent-pricing.png',
        'title' => 'Transparent pricing'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Volatile-active-markets.png',
        'title' => 'Volatile & active markets'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Hedging-options.png',
        'title' => 'Portfolio hedging'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Wide-global-choices.png',
        'title' => 'Wide global choices'
    ],
];

include_once ('elements/feature-trading-icons.php');
?>

<?php
$paramArr = [
    'name' => "Stock"
];

$videoArr = [
    [
        'id' => "GtmgMcaV6vQ",
        "title" => "What is an Indices?",
        "description" => "An index is more than just a number — it's a snapshot of market performance.",
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

<style>
    .info-card {
        border: 1.5px solid #e5e5e5;
        border-radius: 1rem;
        background: #fff;
        padding: 2rem 1.5rem;
        margin-top: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .alert-custom {
        background: #ea4335;
        color: #fff;
        font-weight: 600;
        font-size: 1.05rem;
        line-height: 1.5;
        border-radius: 0.75rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.8rem;
    }
    .info-note {
        color: #757575;
        font-size: 1.01rem;
        line-height: 1.7;
        margin: 0;
    }
</style>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="800" >
                    <p class="fw-bold" style="font-size: 1.45rem;">Index Trading, Simplified</p>
                    <p class="" data-aos="fade-up" data-aos-duration="800" >
                        Tap into global market performance with Zed Capital International Ltd. Trade major benchmarks in a single, efficient instrument and diversify instantly, capture trends with speed and clarity and operate under transparent, professional conditions.
                    </p>
                </div>
                <p class="fw-bold mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">Risks to Consider</p>
                    <p class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                        Index trading involves exposure to broad market volatility. Global events, economic data, central bank decisions and investor sentiment can all impact index prices. Leverage can increase profit potential but also magnifies losses.
                    </p>
                    <p class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                        At <b>Zed Capital International Ltd</b>, we provide protective tools including stop loss and take profit orders to help clients manage positions with discipline and confidence.
                    </p>
                </div>
        </div>
    </div>
</div>

<?php
// include_once ('elements/faq-questions');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/product-footer-diamonds.png" alt="Triangle Diamond Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>