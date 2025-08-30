<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .commodities-header{
        padding: 20px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-commodities-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* position: relative; */
        min-height: 65vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 110px;
    }

    .divider {
        width: 75px;
        background-color: var(--zed-primary);
    }

    .commodities-header h2{
        width: 75%;
    }

    .commodities-header p{
        width: 75%;
    }
    
    h5.stock-indices{
        width: 75%;
    }

    @media (max-width: 767.98px) {

        .commodities-header{
            background-size: contain;
            background-position: center;
            position: relative;
            min-height: 60vh;
            margin-top: 100px;
        }

        .set-diamond-image{
            display: none;
        }

        .commodities-header h2{
            width: 100%;
        }

        .commodities-header p{
            width: 100%;
        }

        .angled-left{
            clip-path: none !important;
        }

        h5.stock-indices{
            width: 100%;
            text-align: center;
        }
    }
</style>

<section class="commodities-header">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-6 text-black" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="fw-bold h2 mb-5">What is Stock trading and how does it work?</h2>
                <div class="p-1 divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray" data-aos="fade-up" data-aos-delay="800">
                    Forex, or foreign exchange, refers to the market where currencies are traded against each other.
                </p>
            </div>

            <!-- Image Column -->
            <div class="col-md-6 text-black p-0" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/product-commodities.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<style>
    .angled-left {
        background: #1a1a1a url('assets/images/dotted-bg.png') repeat; /* Optional dotted bg */
        color: white;
        clip-path: polygon(0 0, 85% 0, 75% 100%, 0% 100%);
        padding: 40px 30px;
        height: 100%;
    }
    .angled-left-backgroung{
        background-color: #f8f9fa8a;
    }
</style>

<div class="container-fluid px-0" style="margin-top: -45px;">
    <div class="row g-0 align-items-center angled-left-backgroung">
        
        <!-- Left angled title -->
        <div class="col-md-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="angled-left d-flex align-items-center justify-content-center text-center">
                <div>
                    <h4 class="fw-bold mb-0">Basics of<br>Commodities</h4>
                </div>
            </div>

            <div class="position-relative set-diamond-image">
                <img src="assets/images/silver-diamond.png" alt="Corner Image" class="position-absolute start-0 bottom-0 float-y" style="width: 80px; height: 50px; margin: -30px 50px;">
            </div>
        </div>

        <!-- Right description -->
        <div class="col-md-7" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/best-commodity-red-black-diamonds.png" alt="Corner Image" class="position-absolute start-0 bottom-0" style="width: 80px; height: 120px; margin: -50px -70px;">
            </div>
            <p class="mb-0 text-muted" data-aos="fade-up" data-aos-duration="800" >
                Stocks, also known as equities or shares, represent ownership in a company.
                When you own stock in a company, you own a portion of that company’s assets and earnings
                proportional to the number of shares you hold.
            </p>
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
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="800" >
            <div class="network-container">
                <img src="assets/images/commodities-benefit.png" class="w-100 ps-5" alt="Commodities Benefit">
            </div>
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section" data-aos="fade-up" data-aos-duration="800" >
                <h4 class="fw-bold mb-4">With Zed Capital, you benefit from:</h4>
                
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
        <img src="assets/images/red-black-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
    </div>
</div>

<style>
    .section-title {
        font-weight: 700;
        font-size: 2.4rem;
        margin-bottom: 2.2rem;
        text-align: center;
    }

    .underline {
        height: 10px;
        width: 60px;
        background-color: var(--zed-primary);
        margin: 20px auto;
    }

    .card-group-row {
        margin-top: 2.5rem;
        margin-bottom: 1.5rem;
    }

    .commodoties-card {
        border-radius: 5rem 5rem 1rem 1rem;
        box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
        background: #f8fbff;
        padding: 1.2rem;
        text-align: center;
        margin: 1.5rem;
    }

    .metal-title {
        font-weight: 700;
        font-size: 1.3rem;
        color: #d2232a;
    }

    .metal-title.silver { color: #727272; }
    .metal-title.platinum { color: #b31db3; }
    .market-title {
        font-weight: 600;
        font-size: 1.05rem;
        color: var(--zed-dark-text);
        margin-bottom: 1.1rem;
    }

    .metal-stats {
        font-weight: 600;
        font-size: 1.08rem;
        color: #16b262;
    }

    .metal-stats-bid {
        display: inline-block;
        /* margin-right: 2.4rem; */
        color: #16b262;
    }

    .metal-stats-ask {
        display: inline-block;
        color: #16b262;
    }

    .metal-label {
        font-size: 0.97rem;
        color: #757575;
        margin: 0 0.5rem;
    }

    .metal-spread, .metal-leverage {
        font-size: 0.98rem;
        color: #d2232a;
        font-weight: 600;
        margin: 0.2rem 0 1.1rem 0;
    }

    .btn-buy, .btn-sell {
        font-weight: 600;
        font-size: 1.07rem;
        border-radius: 2rem;
        padding: 0.5rem 2.3rem;
        margin: 0 0.5rem;
    }

    .btn-buy {
        background: #16b262;
        color: #fff;
        border: none;
    }

    .btn-sell {
        background: #ea4335;
        color: #fff;
        border: none;
    }

    .metal-footnote {
        color: #757575;
        font-size: 0.97rem;
        text-align: center;
        margin-top: 2.5rem;
        margin-bottom: 2rem;
    }

    @media (max-width: 767px) {
        .commodoties-card {
            min-height: 370px;
            padding-top: 1.3rem;
            padding-bottom: 1.3rem;
        }
    }
</style>

<div class="container py-4">
    <!-- Section Heading -->
    <div class="section-title" data-aos="fade-up" data-aos-duration="800" >Why Trade CFDs on Energies such as Oil?</div>
    <div class="underline" data-aos="fade-up" data-aos-duration="800" ></div>
    <p class="text-center mb-2" data-aos="fade-up" data-aos-duration="800" >
        Trading CFDs on energies like oil is an excellent way to diversify your portfolio. With Zed Capital, you can access global energy markets without purchasing the product outright.
    </p>
    
    <!-- Card group row -->
    <div class="row justify-content-center card-group-row">
        <!-- GOLD CARD -->
        <div class="col-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="assets/images/brent-oil.png" class="w-75" alt="Brent Oil" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title text-green">Brent Crude Oil</div>
                <div class="market-title fw-bold">XBRUSD</div>
                <div>
                    <span class="metal-label">Bid</span>
                    <span class="metal-stats metal-stats-bid">1.15959</span>
                    <span class="metal-label">Ask</span>
                    <span class="metal-stats metal-stats-ask">1.15963</span>
                </div>
                <div class="metal-spread">Spread <span>0</span></div>
                <div class="metal-leverage">Leverage <span>Up to 1:1000</span></div>
                <div class="mt-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>

        <!-- SILVER CARD -->
        <div class="col-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="assets/images/wti-oil.png" class="w-75" alt="WTI Oil" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title  text-green">WTI Crude Oil</div>
                <div class="market-title fw-bold">XTIUSD</div>
                <div>
                    <span class="metal-label">Bid</span>
                    <span class="metal-stats metal-stats-bid">1.15959</span>
                    <span class="metal-label">Ask</span>
                    <span class="metal-stats metal-stats-ask">1.15963</span>
                </div>
                <div class="metal-spread">Spread <span>0</span></div>
                <div class="metal-leverage">Leverage <span>Up to 1:1000</span></div>
                <div class="mt-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>

        <!-- PLATINUM CARD -->
        <div class="col-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="assets/images/natural-gas.png" class="w-75" alt="natural Gas" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title  text-green">Natural Gas</div>
                <div class="market-title fw-bold">XYIUSD</div>
                <div>
                    <span class="metal-label">Bid</span>
                    <span class="metal-stats metal-stats-bid">1.15959</span>
                    <span class="metal-label">Ask</span>
                    <span class="metal-stats metal-stats-ask">1.15963</span>
                </div>
                <div class="metal-spread">Spread <span>0</span></div>
                <div class="metal-leverage">Leverage <span>Up to 1:1000</span></div>
                <div class="mt-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .commodities-section {
        color: white;
        position: relative;
        overflow: hidden;
        background-image: url('assets/images/background/energy-trading-commodity-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 100px 0;
    }
    .commodities-section h2 {
        font-weight: bold;
    }
    .commodities-section .icons img {
        width: 70px;
        height: 70px;
        object-fit: contain;
        background: white;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        transition: transform 0.4s ease;
    }
    .commodities-section .icons img:hover {
        transform: translateY(-10px);
    }
    .icons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }
    .etw-divider {
        height: 8px;
        width: 60px;
        background-color: var(--zed-light-bg);
    }
</style>

<section class="commodities-section">
    <div class="container my-3">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-7 col-md-12" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mt-3" data-aos="fade-up" data-aos-duration="800" >How Energies Trading Works with Zed Capital</h2>
                <div class="my-5 etw-divider"></div>
                <p class="fw-bold mt-4">
                    Without owning the physical product, energy trading lets you speculate on price movements in major energy markets, such as crude oil. These markets are crucial for global economies, offering traders opportunities to profit from supply and demand dynamics.
                </p>
                <p class="">
                    One key advantage of trading energies with Zed Capital is the flexibility to trade CFDs, enabling you to benefit from rising and falling markets. With leverage up to 1:200, you can control larger positions with a smaller initial deposit.
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-5 col-md-12 icons">
                
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
    [
        'icon' => 'assets/images/top-tier-liquidity.png',
        'title' => 'Available Across Multiple Devices'
    ],
    [
        'icon' => 'assets/images/user-friendly.png',
        'title' => 'Effective Hedging Ability'
    ],
];

include_once ('elements/feature-trading-icons.php');
?>

<?php
$paramArr = [
    'name' => "Commodities"
];

$videoArr = [
    [
        'id' => "LajPMx7oaRM",
        "title" => "Commodity Trading for Beginners in Hindi | Share Market",
        "description" => "In this video you will learn about #CommodityTrading Basics for Beginners into #ShareMarket #Trading.
",
    ],
    [
        'id' => "DEuMBINx1TU",
        "title" => "Learn MCX Trading for Crude Oil, Gold, Silver, Natural Gas Basics",
        "description" => "You can trade from charts, get the most popular technical indicators, drawing tools, multiple charts, and many other functions.",
    ],
	[
        'id' => "L4hiRKtWOe0",
        "title" => "Commodity Trading For Beginners | Options Commodity Trading in Hindi",
        "description" => "In this video, we provide valuable insights and tips for beginners who are interested in Commodity Trading.",
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
        background: #000;
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
        <div class="col-12" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="800" >
                    How do Dividends work? If you hold an open position from the day before the ex-dividend date, then you will receive the dividend payment on a buy position and be charged on a sell position.
                </div>
                <p class="info-note" data-aos="fade-up" data-aos-duration="800" >
                    Please note that these are indicative rates only and are subject to change pending the final executed rate at midnight MT4 Server time. Dividends will be settled in your account balance and you will see the corresponding comment 'CFD Dividend'. We always recommend before trading such assets, that you monitor for any updates relevant to your trades.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="assets/images/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>