<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .stock-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-stock-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 69vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 110px;
    }

    .stock-header h2{
        width: 75%;
    }

    .stock-header .divider {
        width: 75px !important;
        background-color: var(--zed-primary) !important;
        margin: 0;
    }

    .our-commitment-bg{
        background-image: url('assets/images/dotted-bg.png');
        background-size: contain;
        background-position: center;
        position: relative;
        text-align: center;
        background-color: var(--zed-backgound-color)
    }

    .our-commitment-text-bg{
        background-color: #f92828; 
        clip-path: polygon(50px 0%, 100% 0%, 100% 100%, 0% 100%);
        text-align: start;
        font-size: 12px;
    }

    .our-commitment-text-bg ul{
        width: 85%;
    }

    .our-commitment-text-bg li{
        font-size: 1rem;
    }

    @media (max-width: 767.98px) {
        .set-diamond-image{
            display: none;
        }

        .our-commitment-text-bg ul{
            width: 100%;
        }

        .our-commitment-text-bg{
            clip-path: none;
        }

        .stock-header h2{
            width: 100%;
            margin-top: -100px;
        }
        
    }
</style>

<section class="py-5 stock-header">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-5 text-black" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="fw-bold h2 mb-5">What is Stock trading and how does it work?</h2>
                <div class="p-1 divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Forex, or foreign exchange, refers to the market where currencies are traded against each other.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="position-relative p-0" style="margin-top: -30px; background-color: #fdfdfd7d;">
    <div class="container-fluid px-0">
        <div class="row gx-0 align-items-center our-commitment-bg" data-aos="fade-up" data-aos-duration="850">

            <!-- Left Column -->
            <div class="col-lg-5 py-3" data-aos="fade-up" data-aos-duration="850">
                <div class="position-relative set-diamond-image">
                    <img src="assets/images/diamonds/stock-2-diamonds.png" alt="Corner Image" class="position-absolute top-0 end-0 float-y" style="width: 80px;height: 65px;margin: -65px 30px;">
                </div>
                <div class="container">
                    <div class="row px-5">
                        <h3 class="px-5 mx-2 fw-bold mb-0 text-start" >Basics of <br>Stocks</h3>
                    </div>
                </div>
            </div>

            <!-- Right Column with Red Background & Angled Shape -->
            <div class="col-lg-7 position-relative text-white px-4 py-4 our-commitment-text-bg" data-aos="fade-up" data-aos-duration="850">
                <ul class="mb-0 ps-5 mx-5 w-75">
                    <li class="">
                        Stocks, also known as equities or shares, represent ownership in a company. When you own stock in a company, you own a portion of that company's assets and earnings proportional to the number of shares you hold. 
                    </li>
                </ul>
            </div>

            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
                <img src="assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 100px; height: 60px;margin: -35px 45px;">
            </div>
        </div>
    </div>

</section>

<style> 
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
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="850">
            <img src="assets/images/stock-benefit.png" class="w-100 ps-5" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="850">
            <div class="info-section">
                <h3 class="fw-bold mb-4">With Zed Capital, you benefit from:</h3>
                
                <h5># Asset Class</h5>
                <p class="text-gray">A category of financial instruments with similar characteristics, such as stocks, bonds, or commodities, governed by the same regulatory framework.</p>

                <h5># Aussie (Ozzie)</h5>
                <p class="text-gray">A commonly used term for the AUD/USD currency pair, known for its liquidity and connection to commodity markets.</p>

                <h5># Acquisition</h5>
                <p class="text-gray">The process where one company takes control of another, often as part of a growth or expansion strategy.</p>

                <a href="#" class="show-all-btn w-100">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
        <img src="assets/images/diamonds/forex-red-black-diamond.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px;height: 100px;margin: -85px 80px;">
    </div>
</div>

<style>
    .stock-card {
        border-radius: 15px;
        box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
        padding: 20px;
        text-align: center;
        background-color: aliceblue;
        margin: 0 10px;
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
        margin: 15px auto;
    }

    .btn-danger{
        background-color: var(--zed-primary);
    }

    .text-shadow{
        text-shadow: 0 2px 2px #999999;
    }
</style>

<div class="container py-5 mb-5">
    <!-- Title -->
    <div class="text-center mb-4" >
        <h2 class="h2" data-aos="fade-up" data-aos-duration="850">
            Why Trade CFDs on Stock?
        </h2>
        <div class="divider" data-aos="fade-up" data-aos-duration="850"></div>
        <p class="text-muted w-75 p-2 m-auto" data-aos="fade-up" data-aos-duration="850">
            One of the most significant advantages of trading CFDs on shares is that you can gain full exposure to
            stock price movements with a small initial deposit.
        </p>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center mt-5">
        <!-- Card -->
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        NVDA
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        TSLA
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        META
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        AAPL
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        AMD
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

    <!-- Button -->
    <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="850">
        <a href="#" class="btn btn-danger px-4 py-2 mt-4 rounded-pill">
        Click here to view the Stock' Dividends
        </a>
    </div>
</div>

<style>
    .stock-section {
        padding: 60px 0;
        background-image: url('assets/images/background/stock-trading-background.png');
        color: white;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
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

    .stock-section .stock-divider{
        width: 60px; 
        height: 8px; 
        background: white;
    }

    .stock-tesla-icon{
        width: 220px; 
        height: 220px; 
        margin: 70px 370px;
    }

    .stock-amazon-icon{
        width: 200px; 
        height: 200px; 
        margin: -250px 400px;
    }

    .stock-nikkie-icon{
        width: 200px; 
        height: 200px; 
        margin: 70px -50px;
    }

    .stock-apple-icon{
        width: 150px; 
        height: 150px; 
        margin: -200px -100px;
    }

</style>

<section class="stock-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12 pe-0" data-aos="fade-up" data-aos-duration="850">
                <h2 class="h2">How Stock Trading Works with Zed Capital</h2>
                <div class="my-5 stock-divider"></div>
                <p class="fw-bold" data-aos="fade-up" data-aos-duration="850">
                    Stock trading allows you to buy and sell company stocks, enabling you to profit from 
                    changes in their market value. Unlike traditional investing, CFDs on shares let you trade 
                    without owning the underlying asset, offering greater flexibility and potential.
                </p>
                <p>
                    One major advantage of share trading with Zed Capital is access to global markets. 
                    With a small initial deposit, you can trade the world's leading stocks, taking advantage 
                    of upward and downward price movements.
                </p>
                <p>
                    At Zed Capital, leverage of up to 1 allows you to amplify your exposure. 
                    For example, a $1,000 deposit can control up to $20,000 shares. While leverage can boost 
                    profit potential, it also increases risk, so trading responsibly is essential.
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-6 col-md-12 p-0">
                <div class="position-relative set-diamond-image">
                    <img src="assets/images/stock-tesla-icon.png" alt="stock tesla icon" class="position-absolute bottom-0 end-0 float-y stock-tesla-icon">
                    <img src="assets/images/stock-amazon-icon.png" alt="stock amazon icon" class="position-absolute bottom-0 end-0 float-y stock-amazon-icon">
                    <img src="assets/images/stock-nikkie-icon.png" alt="stock nikkie icon" class="position-absolute bottom-0 end-0 float-y stock-nikkie-icon">
                    <img src="assets/images/stock-apple-icon.png" alt="stock apple icon" class="position-absolute bottom-0 end-0 float-y stock-apple-icon">
                </div>
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
        padding: 3rem;
        margin-bottom: 2rem;
    }

    .right-left-height {
        min-height: 400px;
    }
</style>

<div class="container py-5 my-5">

    <!-- Title -->
    <h2 class="h2 mb-5" data-aos="fade-up" data-aos-duration="850">Stock Trading Example</h2>
    
    <!-- Responsive Card Layout -->
    <div class="row g-4 align-items-stretch" data-aos="fade-up" data-aos-duration="850">
      <!-- Profit Calculation -->
      <div class="col-12 col-md-6 ">
            <div class="custom-section right-left-height">
                <h4 class="mb-5 text-start text-gray fw-bold">How Profit is Calculated:</h4>
                <p><span class="highlight">Opening Price</span><br>50 Stock x $200 = $10,000</p>
                <hr>
                <p><span class="highlight">Closing Price</span><br>50 Stock x $220 = $11,000</p>
                <hr>
                <p><span class="highlight">Gross Profit on Trade</span><br>$1,000</p>
            </div>
      </div>
      <!-- Opening Position -->
        <div class="col-12 col-md-6">
            <div class="custom-section right-left-height">
                <h4 class="mb-5 text-start fw-bold">Opening the Position</h4>
                <p>
                    You decide to trade <span class="highlight">50 stock</span> of Meta at an opening price of <span class="highlight">$200</span> per share. With Zed Capital's <span class="highlight">10% margin</span>, your required capital is only <span class="highlight">$1,000</span>, allowing you to control a larger position with a smaller deposit. The total value of the position is <span class="highlight">$10,000</span>.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Closing Position (Full width) -->
    <div class="row mt-4" data-aos="fade-up" data-aos-duration="850">
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
        'icon' => 'assets/images/diverse-global-stocks.png',
        'title' => 'Diverse Global Stocks'
    ],
    [
        'icon' => 'assets/images/low-commission.png',
        'title' => 'Low Commission'
    ],
    [
        'icon' => 'assets/images/leverage.png',
        'title' => 'Laverage upto 1'
    ],
    [
        'icon' => 'assets/images/instant-execution.png',
        'title' => 'Instant Execution'
    ],
    [
        'icon' => 'assets/images/dividends-passes-on.png',
        'title' => 'Dividends Passes On'
    ],
    [
        'icon' => 'assets/images/mt5-platform.png',
        'title' => 'MT5 Platform'
    ],
    [
        'icon' => 'assets/images/competitive-pricing.png',
        'title' => 'Competitive Pricing'
    ],
    [
        'icon' => 'assets/images/trusted-ragulated.png',
        'title' => 'Trusted & Ragulated'
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
        'id' => "iBZcDvw8Fi8",
        "title" => "Forex Trading for Beginners (Full Course)",
        "description" => "Forex trading is a massively profitable skill that can bring you time, location & financial freedom when mastered.",
    ],
    [
        'id' => "9tCR16dsb6M",
        "title" => "Forex Course for Beginners 2025",
        "description" => "Beginner to Profitable: Full Trading Roadmap (Step-by-Step Guide).",
    ],
    [
        'id' => "eynxyoKgpng",
        "title" => "The Only Technical Analysis Video You Will Ever Need...",
        "description" => "Understanding how to implement technical analysis correctly in your trading is one of the most important things you need to create a profitable trading career. ",
    ]
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="850">
                    How do Dividends work? If you hold an open position from the day before the ex-dividend date, then you will receive the dividend payment on a buy position and be charged on a sell position.
                </div>
                <p class="info-note" data-aos="fade-up" data-aos-duration="850">
                    Please note that these are indicative rates only and are subject to change pending the final executed rate at midnight MT4 Server time. Dividends will be settled in your account balance and you will see the corresponding comment 'CFD Dividend'. We always recommend before trading such assets, that you monitor for any updates relevant to your trades.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
    <img src="assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>