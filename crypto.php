<?php
$seoArr = [
    "title" => "Trade the Future of Digital Assets | Crypto & Blockchain Trading - Zed Academy",
    "description" => "Trade the future of digital assets with Zed Academy. Access crypto CFDs, blockchain assets and real-time market insights to invest and trade confidently.",
    "keyword" => "digital assets trading, crypto trading, blockchain assets, crypto CFDs, Zed Academy digital assets, how to trade the future of digital assets, invest in cryptocurrency and blockchain assets, Zed Academy guide to digital asset trading, trade bitcoin, ethereum and other crypto CFDs, strategies for trading digital assets confidently, future of crypto and blockchain investment, online platform for trading digital assets and cryptocurrencies"
];
include_once ('elements/header.php');
// include_once ('elements/product-child-menu');
?>

<style>
    .crypto-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/product-crypto-background.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 110px;
    }

    .crypto-divider {
        height: 10px;
        width: 60px;
        background-color: var(--zed-primary);
    }

    .crypto-section {
        background-color: var(--zed-backgound-color);
        position: relative;
        overflow: hidden;
    }

    .crypto-slant-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 20px;
        background: linear-gradient(to right, #f44336, #f44336);
        transform: skewY(-2deg);
        transform-origin: top left;
        z-index: 1;
    }

    .crypto-slant-bottom {
        position: absolute;
        border: 0;
        right: 0;
        width: 40%;
        height: 25px;
        background: linear-gradient(to right, #f44336, #f44336);
        transform: skewY(-2deg);
        transform-origin: top left;
        z-index: 1;
    }

    .crypto-label {
        background-color: #fff;
        border-radius: 10px;
        padding: 10px 25px;
        font-weight: 700;
        display: inline-block;
        z-index: 2;
        position: relative;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .crypto-content {
        z-index: 2;
        position: relative;
        padding: 50px 15px;
    }

    h5.stock-indices{
        width: 25%;
    }
    @media (max-width: 767.98px) {

        .crypto-header{
            background-size: contain;
            background-position: center;
            position: relative;
            min-height: 60vh;
            margin-top: 100px;
        }

        .set-diamond-image{
            display: none;
        }

        .crypto-header h2{
            width: 100%;
        }

        .crypto-header p{
            width: 100%;
        }

        .angled-left{
            clip-path: none !important;
        }

        .crypto-slant-top{
            height: 14px;
        }

        .crypto-slant-bottom{
            width: 100%;
        }

        h5.stock-indices{
            width: 100%;
            text-align: center;
        }
    }
</style>

<section class="py-5 crypto-header">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-6 text-black" data-aos="fade-up" data-aos-duration="800" >
                <h1 class="fw-bold h2 mb-5">
                    Trade the Future of <br>Digital Assets
                </h1>
                <div class="p-1 crypto-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray" data-aos="fade-up" data-aos-delay="800">
                    Cryptocurrencies are transforming modern finance, reshaping money, investment and technology. A fast growing, innovative market, they offer traders worldwide new opportunities and access to one of the most exciting financial frontiers.
                </p>
            </div>

        </div>
        
    </div>
    
</section>

<div class="container-fluid crypto-section">
    <div class="crypto-slant-top"></div>

    <div class="container crypto-content">
        <div class="row align-items-center">
            <!-- Left Pill Label -->
            <div class="col-md-3 mb-3 mb-md-0 text-md-start text-center">
                <div class="crypto-label">Basics of Crypto</div>
            </div>

            <!-- Right Text -->
            <div class="col-md-9 text-muted">
                Our platform allows you to trade leading digital assets with competitive pricing, advanced tools and reliable execution, giving you the flexibility to capture opportunities in both rising and falling markets.
            </div>
        </div>
    </div>

    <div class="crypto-slant-bottom"></div>
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

<div class="container-fluid py-5 bg-white">
    <div class="row align-items-center">
        
        <!-- Left Side Icons -->
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="800" >
            <div class="network-container">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/crypto-benefit.webp" class="w-100 ps-0 ps-md-0" alt="Regulatory Assurance">
            </div>
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-0 ps-md-5 pe-0 pe-md-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section">
                <h3 class="fw-bold mb-4" data-aos="fade-up" data-aos-duration="800" >Why Trade Crypto with us</h3>
                
                <h5>Wide Market Access</h5>
                <p>
                    Trade major digital currencies including Bitcoin, Ethereum, Litecoin and Ripple.
                </p>

                <h5>High Volatility, High Potential</h5>
                <p>
                    Cryptocurrencies are known for sharp movements, creating trading opportunities across all timeframes.
                </p>

                <h5>Two Way Flexibility</h5>
                <p>
                    Go long or short to take advantage of market direction.
                </p>

                <h5>Professional Technology</h5>
                <p>
                    Use our MT5 platform for advanced charting, technical indicators and automated strategies.
                </p>

                <h5>Transparent Trading</h5>
                <p>
                    Enjoy fair pricing, competitive spreads and secure infrastructure.
                </p>

                <a href="#" class="show-all-btn w-100 d-none" title="Read More">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="position-relative set-diamond-image">
        <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/red-black-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
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

    .stock-card img{
        width: 50px !important;
        height: 50px;
        margin: -45px 0px;
        border-radius: 50px;
    }

    .stock-card h5{
        text-align: end;
    }

    .owl-nav, .owl-dots{
        display: none;
    }
</style>

<section class="bg-white">
    <div class="container py-5">
        <!-- Title -->
        <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="800" >
            <h2 class="fw-bold">
                <!-- Institutional Market Feed - Crypto CFDs -->
                Why Trade Crypto?
            </h2>
            <div class="divider" data-aos="fade-up" data-aos-duration="800" ></div>
            <p class="text-muted w-75 p-2 m-auto">
                One of the most significant advantages of trading crypto is that you can gain full exposure to price movements with a small initial deposit.
            </p>
        </div>

        <div id="productTradeSlider" class="row g-4 justify-content-center">
            <div class="owl-carousel">
                <!-- Bitcoin -->
                <div class="item mt-4">
                    <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="https://s3-symbol-logo.tradingview.com/crypto/XTVCBTC--big.svg" class="" alt="Bitcoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <p class="text-shadow mb-2">
                                    Bitcoin 
                                </p>
                            </h5>
                        </div>

                        <div class="d-flex justify-content-between px-2 mt-3">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold BTCUSD-Bitcoin---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold BTCUSD-Bitcoin---ask">0.00</div>
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

                <!-- Ethereum -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="https://cdn-icons-png.flaticon.com/512/10464/10464500.png" class="" alt="Ethereum">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Ethereum
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-success fw-bold ETHUSD-Ethereum---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-success fw-bold ETHUSD-Ethereum---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                 </div>

                 <!-- XRP(Ripple) -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="https://s3-symbol-logo.tradingview.com/crypto/XTVCXRP--big.svg" class="" alt="XRP">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Ripple
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold XRPUSD-Ripple---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold XRPUSD-Ripple---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- Dogecoin -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="<?php echo getBaseUrl(); ?>/assets/images/products/dogecoin-doge-logo.png" class="" alt="DOG">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Dogecoin
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-success fw-bold DOGUSD-Dogecoin---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-success fw-bold DOGUSD-Dogecoin---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- Litecoin -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="https://s3-symbol-logo.tradingview.com/crypto/XTVCLTC--big.svg" class="" alt="Litecoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Litecoin
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold LTCUSD-LiteCoin---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold LTCUSD-LiteCoin---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- TRXUSD(Tron) -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="<?php echo getBaseUrl(); ?>/assets/images/products/tron-trx-logo.png" class="" alt="Litecoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Tron
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold TRXUSD-Tron---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold TRXUSD-Tron---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- DOTUSD(Polkadot) -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="<?php echo getBaseUrl(); ?>/assets/images/products/polkadot-new-dot-logo.png" class="" alt="Litecoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Polkadot
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold DOTUSD-Polkadot---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold DOTUSD-Polkadot---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- ADAUSD(Cardano) -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="<?php echo getBaseUrl(); ?>/assets/images/products/cardano-ada-logo.png" class="" alt="Litecoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Cardano
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold ADAUSD-Cardano---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold ADAUSD-Cardano---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
                            <small>Leverage</small> 
                            <div class="fw-bold">Up to 1:500</div>
                        </div>
                        <div class="d-flex justify-content-around gap-2 mt-4">
                            <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                            <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                        </div>
                    </div>
                </div>

                <!-- SOLUSD(Solana) -->
                <div class="item mt-4" data-aos="fade-up" data-aos-duration="800" >
                    <div class="stock-card">
                        <div class="row">
                            <div class="position-relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <img src="<?php echo getBaseUrl(); ?>/assets/images/products/solana-sol-logo.png" class="" alt="Litecoin">
                            </div>
                            <h5 class="fw-bold mb-4">
                                <span class="text-shadow">
                                    Solana
                                </span>
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between px-2 mt-4">
                            <div>
                                <small>Bid</small>
                                <div class="text-danger fw-bold SOLUSD-Solana---bid">0.00</div>
                            </div>
                            <div>
                                <small>Ask</small>
                                <div class="text-danger fw-bold SOLUSD-Solana---ask">0.00</div>
                            </div>
                        </div>

                        <div class="sl-divider"></div>

                        <div class="my-2 d-none">
                            <small>Spread</small> 
                            <div class="fw-bold">0</div>
                        </div>
                        <div class="my-4">
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

    </div>
</section>

<script>
    // List of symbols to fetch
    const symbols = ["BTCUSD(Bitcoin)", "ETHUSD(Ethereum)", "XRPUSD(Ripple)", "DOGUSD(Dogecoin)", "LTCUSD(LiteCoin)", "TRXUSD(Tron)", "DOTUSD(Polkadot)", "ADAUSD(Cardano)", "SOLUSD(Solana)"];

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

                    // console.log( filteredData );
                    // Loop through filteredData with $.each
                    $.each(filteredData, function(index, company) {

                        // Remove trailing dots (.) from Symbol
                        const cleanedSymbol = company.Symbol.replace(/[\-\(\)\.]/g, '-');
                        console.log(cleanedSymbol);
                        // Append each company's data to the div
                        $("."+cleanedSymbol+"bid").text( company.Bid );
                        $("."+cleanedSymbol+"ask").text( company.Ask );
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
    .crypto-currency {
        color: white;
        position: relative;
        /* background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/crypto-currency-trading-background.webp'); */
        background-color: var(--zed-primary);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    
    .crypto-currency .icons img {
        width: 70px;
        height: 70px;
        object-fit: contain;
        background: white;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        transition: transform 0.4s ease;
    }
    .crypto-currency .icons img:hover {
        transform: translateY(-10px);
    }
    .icons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }

    .crypto-currency p{
        width: 85%;
    }
    .crypto-currency h2{
        width: 90%;
    }
</style>

<section class="crypto-currency">
    <div class="container py-3">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="800" >
            <!-- Text Content -->
            <div class="col-lg-7 col-md-12 my-4" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mt-5" data-aos="fade-up" data-aos-duration="800" >Cryptocurrencies You Can Trade</h2>
                <div class="my-5" style="width: 40px; height: 8px; background: white;"></div>
                
                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Major Coins</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Bitcoin (BTC), Ethereum (ETH), Litecoin (LTC), Ripple (XRP)
                </h5>

                <h3 class="fw-bold mt-3" data-aos="fade-up" data-aos-duration="850">Popular Altcoins</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Cardano (ADA), Polkadot (DOT), Solana (SOL), Dogecoin (DOGE)
                </h5>

                <p class="text-white mt-5" data-aos="fade-up" data-aos-duration="850">
                    With Zed Capital International Ltd, you gain exposure to digital assets that are driving the future of finance and innovation.
                </p>
                
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-5 col-md-12">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/Cryptocurrencies-You-Can-Trade.webp" alt="Cryptocurrencies You Can Trade" class="w-100">
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
        <h2 class="h4 mb-3">Benefits of Crypto Trading</h2>
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
                            Add digital assets to your portfolio alongside traditional markets like stocks, forex and commodities.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/growth.svg" alt="Innovation and Growth">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Innovation and Growth</h5>
                        <p class="mb-0 small-muted">
                            Participate in a market that reflects global adoption of blockchain technology.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/clock.svg" alt="Around the Clock Access">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Around the Clock Access</h5>
                        <p class="mb-0 small-muted">
                            Cryptocurrencies trade twenty-four hours a day, seven days a week.
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
                            Analyze, automate and execute with precision using professional trading features.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Global Crypto Markets: Key Advantages";

$featureIconArr = [
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Trade-24-7without-market-closures.png',
        'title' => 'Trade 24/7 without market closures'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Volatile-active-markets.png',
        'title' => 'High volatility for profit potential'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Low-entry-cost-for-all-traders.png',
        'title' => 'Low entry cost for all traders'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Built-in-diversification.png',
        'title' => 'Diversify beyond traditional assets'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Wide-global-choices.png',
        'title' => 'Wide range of coins and tokens'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Fast-blockchain-settlements.png',
        'title' => 'Fast blockchain settlements'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Transparent-pricing.png',
        'title' => 'Transparent and decentralized markets'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Growing-global-adoption-and-demand.png',
        'title' => 'Growing global adoption and demand'
    ],
];
$class = 'col-md-4 col-lg-3';
include_once ('elements/feature-trading-icons.php');
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="800" >
                    <p class="" data-aos="fade-up" data-aos-duration="800" >
                        To help clients trade responsibly, Zed Capital International Ltd provides risk management features such as stop loss and take profit orders.
                    </p>
                </div>
                <b class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                    Risks to Consider
                </b>
                <p class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                    Cryptocurrency trading carries higher volatility than most traditional markets. Prices are influenced by global adoption, regulation, technological changes and investor sentiment. Leverage can magnify potential returns but also increases risk.
                </p>
            </div>
        </div>
    </div>
</div>


<?php
$paramArr = [
    'name' => "Crypto"
];

$videoArr = [
    [
        'id' => "YdDFphGIa1M",
        "title" => "What is Crypto?",
        "description" => "Crypto power the world — from the oil in your car to the gold in your jewelry and the coffee in your cup.",
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
    ]
];
include_once ('elements/explore-more-about.php');
?>

<?php
// include_once ('elements/faq-questions');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/product-footer-diamonds.png" alt="Product Diamonds" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>