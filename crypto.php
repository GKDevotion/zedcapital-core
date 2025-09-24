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
                    Trade the Future of Digital Assets with Zed Capital International Ltd
                </h2>
                <div class="p-1 crypto-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray" data-aos="fade-up" data-aos-delay="800">
                    Cryptocurrencies are transforming modern finance, reshaping money, investment, and technology. A fast-growing, innovative market, they offer traders worldwide new opportunities and access to one of the most exciting financial frontiers.
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
                Our platform allows you to trade leading digital assets with competitive pricing, advanced tools, and reliable execution, giving you the flexibility to capture opportunities in both rising and falling markets.
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

                <a href="#" class="show-all-btn w-100 d-none">
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
        position: relative;
        background-image: url('assets/images/background/crypto-currency-trading-background.png');
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
            <div class="col-lg-8 col-md-12 my-4" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mt-5" data-aos="fade-up" data-aos-duration="800" >Cryptocurrencies You Can Trade</h2>
                <div class="my-5" style="width: 40px; height: 8px; background: white;"></div>
                
                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Major Coins</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Bitcoin (BTC), Ethereum (ETH), Litecoin (LTC), Ripple (XRP)
                </h5>

                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Popular Altcoins</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Cardano (ADA), Polkadot (DOT), Solana (SOL), Dogecoin (DOGE)
                </h5>

                <p class="text-white mt-5" data-aos="fade-up" data-aos-duration="850">
                    With Zed Capital International Ltd, you gain exposure to digital assets that are driving the future of finance and innovation.
                </p>
                
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-4 col-md-12 icons">
                
            </div>
        </div>
    </div>
</section>

<style>
    
    .highlight {
        font-weight: bold;
    }
    
    .custom-section {
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
        background-color: aliceblue;
        border-radius: 15px;
        border: 0;
        padding: 3rem 2.5rem;
        margin-bottom: 2rem;
    }

</style>

<div class="container py-5 my-5">

    <!-- Title -->
    <h2 class="h2 mb-5" data-aos="fade-up" data-aos-duration="850">Benefits of Crypto Trading</h2>
    
    <!-- Responsive Card Layout -->
    <div class="row g-4 align-items-stretch" data-aos="fade-up" data-aos-duration="850">
      <!-- Profit Calculation -->
      <div class="col-12 col-md-6 ">
            <div class="custom-section right-left-height">
                <h4 class="text-start fw-bold">Diversification</h4>
                <p class="mb-4">
                    Add digital assets to your portfolio alongside traditional markets like stocks, forex and commodities.
                </p>
                <hr>
                <h4 class="mt-4 text-start fw-bold">Around the Clock Access</h4>
                <p>
                    Cryptocurrencies trade twenty-four hours a day, seven days a week.
                </p>
            </div>
      </div>
      <!-- Opening Position -->
        <div class="col-12 col-md-6">
            <div class="custom-section right-left-height">
                <h4 class="text-start fw-bold">Innovation and Growth</h4>
                <p class="mb-4">
                    Participate in a market that reflects global adoption of blockchain technology.
                </p>
                <hr>
                <h4 class="mt-4 text-start fw-bold">Advanced Tools</h4>
                <p>
                    Analyze, automate and execute with precision using professional trading features.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Closing Position (Full width) -->
    <div class="row mt-4 d-none" data-aos="fade-up" data-aos-duration="850">
        <div class="col-12">
            <div class="custom-section text-center">
                <h4 class="mb-2 fw-bold">Closing the Position</h4>
                <p class="mb-0">
                    Two weeks later, the price of Meta shares rose to <span class="highlight">$220</span>. You close your position at this higher price, securing a gross profit of <span class="highlight">$1,000</span> from the price movement.
                </p>
            </div>
        </div>
    </div>
</div>

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
            Risks to Consider
            <span class="sub-text" data-aos="fade-up" data-aos-duration="800" >
                Cryptocurrency trading carries higher volatility than most traditional markets. Prices are influenced by global adoption, regulation, technological changes and investor sentiment. Leverage can magnify potential returns but also increases risk.
            </span>
        </div>
        <div class="row g-4" data-aos="fade-up" data-aos-duration="800" >
            <div class="col-12" data-aos="fade-up" data-aos-duration="800" >
                To help clients trade responsibly, Zed Capital International Ltd provides risk management features such as stop loss and take profit orders.
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