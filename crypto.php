<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .crypto-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-crypto-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 130px;
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
                <h2 class="fw-bold h2 mb-5">
                    What is Crypto trading and how does it work?
                </h2>
                <div class="p-1 crypto-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray" data-aos="fade-up" data-aos-delay="800">
                    Cypto, or foreign exchange, refers to the market where currencies are traded against each other. It's the largest financial market globally, with trillions of dollars worth of transactions happening daily
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
                Stocks, also known as equities or shares, represent ownership in a company. When you own stock in a company,
                you own a portion of that company’s assets and earnings proportional to the number of shares you hold.
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
                <img src="assets/images/crypto-benefit.png" class="w-100 ps-5" alt="Regulatory Assurance">
            </div>
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section">
                <h4 class="fw-bold mb-4" data-aos="fade-up" data-aos-duration="800" >With Zed Capital, you benefit from:</h4>
                
                <h5># Asset Class</h5>
                <p>A category of financial instruments with similar characteristics, such as stocks, bonds, or commodities, governed by the same regulatory framework.</p>

                <h5># Aussie (Ozzie)</h5>
                <p>A commonly used term for the AUD/USD currency pair, known for its liquidity and connection to commodity markets.</p>

                <h5># Acquisition</h5>
                <p>The process where one company takes control of another, often as part of a growth or expansion strategy.</p>

                <a href="#" class="show-all-btn w-100">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="position-relative set-diamond-image">
        <img src="assets/images/diamonds/red-black-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
    </div>

</div>

<style>
    .stock-card {
        border-radius: 15px;
        box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
        padding: 20px;
        text-align: center;
        background-color: aliceblue;
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
</style>

<section class="bg-white">
    <div class="container py-5">
        <!-- Title -->
        <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="800" >
            <h2 class="fw-bold">
                Why Trade CFDs on Crypto?
            </h2>
            <div class="divider" data-aos="fade-up" data-aos-duration="800" ></div>
            <p class="text-muted w-75 p-2 m-auto">
                One of the most significant advantages of trading CFDs on shares is that you can gain full exposure to
                stock price movements with a small initial deposit.
            </p>
        </div>

        <!-- Cards -->
        <div class="row g-4 justify-content-center mb-5" data-aos="fade-up" data-aos-duration="800" >
            <!-- Card -->
            <div class="col" data-aos="fade-up" data-aos-duration="800" >
                <div class="stock-card">
                    <h5 class="fw-bold mb-4">
                        <span class="text-shadow" data-aos="fade-up" data-aos-duration="800" >
                            EURUSD
                        </span>
                    </h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold">1.15959</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>

                    <div class="mb-3">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>

                    <div class="d-flex justify-content-around gap-2">
                        <button class="btn btn-buy px-4">Buy</button>
                        <button class="btn btn-sell px-4">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Repeat for other stocks -->
            <div class="col" data-aos="fade-up" data-aos-duration="800" >
                <div class="stock-card">
                    <h5 class="fw-bold mb-4">
                        <span class="text-shadow" data-aos="fade-up" data-aos-duration="800" >
                            USDJYP
                        </span>
                    </h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold">1.15959</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2">
                        <button class="btn btn-buy px-4">Buy</button>
                        <button class="btn btn-sell px-4">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="col" data-aos="fade-up" data-aos-duration="800" >
                <div class="stock-card">
                    <h5 class="fw-bold mb-4">
                        <span class="text-shadow" data-aos="fade-up" data-aos-duration="800" >
                            GBPUSD
                        </span>
                    </h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold">1.15959</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2">
                        <button class="btn btn-buy px-4">Buy</button>
                        <button class="btn btn-sell px-4">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Repeat for other stocks -->
            <div class="col" data-aos="fade-up" data-aos-duration="800" >
                <div class="stock-card">
                    <h5 class="fw-bold mb-4">
                        <span class="text-shadow" data-aos="fade-up" data-aos-duration="800" >
                            AUDUSD
                        </span>
                    </h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Bid</small>
                            <div class="text-success fw-bold">1.15959</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-success fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2">
                        <button class="btn btn-buy px-4">Buy</button>
                        <button class="btn btn-sell px-4">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="col" data-aos="fade-up" data-aos-duration="800" >
                <div class="stock-card">
                    <h5 class="fw-bold mb-4">
                        <span class="text-shadow" data-aos="fade-up" data-aos-duration="800" >
                            USDCAD
                        </span>
                    </h5>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>Bid</small>
                            <div class="text-danger fw-bold">1.15959</div>
                        </div>
                        <div>
                            <small>Ask</small>
                            <div class="text-danger fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <small>Leverage</small> 
                        <div class="fw-bold">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around gap-2">
                        <button class="btn btn-buy px-4">Buy</button>
                        <button class="btn btn-sell px-4">Sell</button>
                    </div>
                </div>
            </div>

            <!-- Add META, AAPL, AMD similarly -->
        </div>

    </div>
</section>

<style>
    .crypto-currency {
        color: white;
        /* position: relative; */
        background-image: url('assets/images/background/crypto-currency-trading-background.png');
        background-size: contain;
        background-position: center;
        /* background-repeat: no-repeat; */
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
            <div class="col-lg-8 col-md-12 my-4" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mt-5" data-aos="fade-up" data-aos-duration="800" >How Cryptocurrency Trading Works with Zed Capital</h2>
                <div class="my-5" style="width: 40px; height: 8px; background: white;"></div>
                <p class="fw-bold">
                    Cryptocurrency trading involves speculating on price movements of digital currencies like Bitcoin and Ethereum without owning the assets. Zed Capital allows you to trade on margin, providing greater flexibility and accessibility for all traders.
                </p>
                <p class="">
                    One key advantage of crypto trading is the opportunity to profit from volatility, with rapid price movements offering significant profit potential. Zed Capital powerful MetaTrader 4 (MT4) and MetaTrader 5 (MT5) platforms allow you to automate strategies, analyze markets, and trade faster and more efficiently.
                </p>
                <p class="">
                    At Zed Capital, you can trade with the protection of ASIC and VFSC regulations, ensuring a secure trading environment. While the fast-paced nature of crypto markets presents opportunities, it also carries risks, so managing your trades responsibly is essential.
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-4 col-md-12 icons">
                
            </div>
        </div>
    </div>
</section>

<?php
$featureIconArr = [
    [
        'icon' => 'assets/images/education-daily-analysis.png',
        'title' => 'Access to a wideRange of Instruments'
    ],
    [
        'icon' => 'assets/images/news-live-market.png',
        'title' => 'Advance Charting and Analytical Tools'
    ],
    [
        'icon' => 'assets/images/account-setup.png',
        'title' => 'Fast Execution with Low Latency'
    ],
    [
        'icon' => 'assets/images/instant-deposite.png',
        'title' => 'Improved Market Depth'
    ],
    [
        'icon' => 'assets/images/withdrawals.png',
        'title' => 'Supports Both Hedging and Netting'
    ],
    [
        'icon' => 'assets/images/competitive-commission.png',
        'title' => 'Built-in Trading Calendar'
    ],
];
$class = 'col-md-4 col-lg-4';
include_once ('elements/feature-trading-icons.php');
?>

<style>
    body {
        background: #fafafa;
    }
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

<div class="container py-5">
    <div class="row custom-card mx-auto" data-aos="fade-up" data-aos-duration="800" >
        <div class="highlight-banner">
            Transparent Spreads
            <span class="sub-text" data-aos="fade-up" data-aos-duration="800" >
                <strong>Trade with Confidence</strong><br>
                At Zed Capital, we pride ourselves on offering tight and transparent spreads, helping you trade major currency pairs at the most competitive rate.
            </span>
        </div>
        <div class="row g-4" data-aos="fade-up" data-aos-duration="800" >
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-duration="800" >
                <div class="card-section-title">Major Currency Pairs</div>
                <div class="mt-2" style="color:#6c757d;">
                    The most actively traded currency pairs are known as major pairs and include EUR/USD, USD/JPY, GBP/USD, and USD/CHF. These pairs typically have the highest liquidity and lowest spreads (the difference between buying and selling prices).
                </div>
            </div>
            <div class="col-12 col-md-4 divider-col" data-aos="fade-up" data-aos-duration="800" >
                <div class="card-section-title">Cross Currency Pairs</div>
                <div class="mt-2" style="color:#6c757d;">
                    These pairs do not involve the US Dollar (USD) and include currencies such as EUR/GBP, AUD/JPY, and GBP/JPY.
                </div>
            </div>
            <div class="col-12 col-md-4 divider-col" data-aos="fade-up" data-aos-duration="800" >
                <div class="card-section-title">Currency Symbols</div>
                <div class="mt-2" style="color:#6c757d;">
                    Each currency is represented by a three-letter code. For instance, USD for US Dollar, EUR for Euro, GBP for British Pound, JPY for Japanese Yen, and so on.
                </div>
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
        'id' => "pBPSt_u2pmQ",
        "title" => "9/20 Stock Burner's Crypto Trading Strategy Exposed",
        "description" => "He is a Guinness World Record Holder for the Largest Financial Investment Lesson and largest Social Media Marketing Lesson.",
    ],
    [
        'id' => "Z1pC89aMCHI",
        "title" => "How to Start Trading Crypto the Right Way",
        "description" => "it's now losing dominance day by day, signalling the early stages of altcoin season.",
    ],
	[
        'id' => "mOSuaJONpXI",
        "title" => "Fibonacci Trading Strategy Explained | How to Use Fibonacci Retracement",
        "description" => "if you want to learn about how to use fibonacci retracement than this Video is for you.",
    ],
];
include_once ('elements/explore-more-about.php');
?>

<?php
include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>