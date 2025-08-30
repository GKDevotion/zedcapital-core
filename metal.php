<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .metal-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-metal-background.png');
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

    .metal-header-divider {
        width: 75px;
        background-color: var(--zed-primary);
    }

    .btn-outline-danger{
        background-color: var(--zed-primary);
        border-color: var(--zed-primary);
        color: var(--zed-light-bg);
    }

    h5.stock-indices{
        width: 25%;
    }

    .metal-header h2{
        width: 75%;
    }

    @media (max-width: 767.98px) {
        .set-diamond-image{
            display: none;
        }

        .rounded-pill{
            margin-bottom: 1rem;
        }

        h5.stock-indices{
            width: 100%;
            text-align: center;
        }

        .metal-header{
            background-position: inherit !important;
        }

        .metal-header h2{
            width: 100%;
            margin-top: -100px;
        }
    }
</style>

<section class="py-5 metal-header">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-6 text-black" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="fw-bold h2 mb-5">What is Metal trading and how does it work?</h2>
                <div class="p-1 metal-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Metal, or foreign exchange, refers to the market where currencies are traded against each other.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="position-relative p-0" style="margin-top: -30px; background-color: #fdfdfd7d;">
    <div class="bg-dark text-white py-4 px-5 d-flex align-items-center" style="background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('your-metal-bg.jpg'); background-size: cover;">
        <div class="row" >
            <div class="col-md-4 text-center" >
                <a href="#" class="btn btn-outline-danger fw-bold rounded-pill px-5">
                    Basics of Metal
                </a>

                <div class="position-relative set-diamond-image" >
                    <img src="assets/images/silver-diamond.png" alt="Corner Image" class="position-absolute bottom-0 start-0 float-y" style="width: 100px; height: 60px; margin: -60px -15px;">
                </div>
            </div>
            <div class="col-md-8">
                <p class="mb-0 small">
                    Stocks, also known as equities or shares, represent ownership in a company. When you own stock in a company, you own a portion of that company’s assets and earnings proportional to the number of shares you hold.
                </p>
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

<div class="container-fluid py-4">
    <div class="row align-items-center">
        
        <!-- Left Side Icons -->
        <div class="col-lg-5 col-sm-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="800" >
            <img src="assets/images/metal-benefit.png" class="w-100 ps-5" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section">
                <h4 class="fw-bold mb-4">With Zed Capital, you benefit from:</h4>
                
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
    <div class="position-relative set-diamond-image">
        <img src="assets/images/red-black-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
    </div>
</div>

<style>
    .stock-card {
        border-radius: 25px;
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
        padding: 5px 40px;
        font-size: 1.2rem;
        font-weight: 600;
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
        padding: 5px 40px;
        font-size: 1.2rem;
        font-weight: 600;
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
        height: 1px;
        width: 80px;
        background-color: var(--zed-dark-text);
        margin: 25px auto;
    }

    .btn-danger{
        background-color: var(--zed-primary);
    }

    .text-shadow{
        text-shadow: 0 2px 2px #999999;
    }

    .metal-title {
        font-weight: 700;
        font-size: 1.5rem;
        color: var(--zed-primary);
        margin: 5rem 0 0.5rem;
    }

    .market-title {
        font-weight: 700;
        font-size: 1.5rem;
        color: var(--zed-dark-text);
        margin-bottom: 1.1rem;
    }
</style>

<div class="container py-5">
    <!-- Title -->
    <div class="text-center mb-4">
        <h2 class="h2" data-aos="fade-up" data-aos-duration="800" >
            Why Trade CFDs on Stock?
        </h2>
        <div class="divider" data-aos="fade-up" data-aos-duration="800" ></div>
        <p class="text-muted w-75 p-2 m-auto" data-aos="fade-up" data-aos-duration="800" >
            One of the most significant advantages of trading CFDs on shares is that you can gain full exposure to
            stock price movements with a small initial deposit.
        </p>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center mt-5">
        <!-- Card -->
        <div class="col-md-4 px-5 mt-5" data-aos="fade-up" data-aos-duration="400" >
            <div class="position-relative">
                <img src="assets/images/metal-gold.png" alt="Corner Image" class="position-absolute" style="width: 100%; margin: -80px 0px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card">

                <div class="">
                    <div class="metal-title">Gold</div>

                    <div class="market-title">S&amp;P 500</div>
                    
                    <div class="d-flex justify-content-between px-5">
                        <div>
                            <p class="mb-0 fs-5">Bid</p>
                            <div class="text-success fw-bold">1.15959</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-danger fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0 fs-5">Leverage</p> 
                        <div class="fw-bold mt-2 fs-5">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around px-3">
                        <button class="btn btn-buy">Buy</button>
                        <button class="btn btn-sell">Sell</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col-md-4 px-5 mt-5" data-aos="fade-up" data-aos-duration="400" >
            <div class="position-relative">
                <img src="assets/images/metal-silver.png" alt="Corner Image" class="position-absolute" style="width: 100%; margin: -80px 0px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card">

                <div class="">
                    <div class="metal-title">Silver</div>

                    <div class="market-title">S&amp;P 500</div>
                    
                    <div class="d-flex justify-content-between px-5">
                        <div>
                            <p class="mb-0 fs-5">Bid</p>
                            <div class="text-danger fw-bold">1.15959</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-danger fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0 fs-5">Leverage</p> 
                        <div class="fw-bold mt-2 fs-5">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around px-3">
                        <button class="btn btn-buy">Buy</button>
                        <button class="btn btn-sell">Sell</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-md-4 px-5 mt-5" data-aos="fade-up" data-aos-duration="400" >
            <div class="position-relative">
                <img src="assets/images/metal-platinum.png" alt="Corner Image" class="position-absolute" style="width: 100%; margin: -80px 0px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card" >

                <div class="">
                    <div class="metal-title">Platinum</div>

                    <div class="market-title">S&amp;P 500</div>
                    
                    <div class="d-flex justify-content-between px-5">
                        <div>
                            <p class="mb-0 fs-5">Bid</p>
                            <div class="text-danger fw-bold">1.15959</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-success fw-bold">1.15963</div>
                        </div>
                    </div>

                    <div class="sl-divider"></div>

                    <div class="my-2 d-none">
                        <small>Spread</small> 
                        <div class="fw-bold">0</div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0 fs-5">Leverage</p> 
                        <div class="fw-bold mt-2 fs-5">Up to 1:500</div>
                    </div>
                    <div class="d-flex justify-content-around px-3">
                        <button class="btn btn-buy">Buy</button>
                        <button class="btn btn-sell">Sell</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add META, AAPL, AMD similarly -->
    </div>

    <!-- Button -->
    <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="800" >
        <a href="#" class="btn btn-danger px-4 py-2 mt-4 rounded-pill">
            Click here to view the Stock' Dividends
        </a>
    </div>
</div>

<style>
    .stock-section {
        color: white;
        padding: 60px 0;
        overflow: hidden;
        background-image: url('assets/images/background/metal-trading-background.png');
        background-size: cover;
        background-position: inherit;
        min-height: 70vh;

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

<section class="stock-section" data-aos="fade-up" data-aos-duration="800" >
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12 mt-5" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mt-5">How Metal Trading Works with Zed Capital</h2>

                <div class="my-4" style="width: 60px; height: 8px; background: white;"></div>
                
                <p class="mb-5">
                    Precious metals trading involves speculating on the price movements of gold, silver, and platinum without physically owning them. These assets are highly regarded as 'safe-haven' investments, offering stability and diversification during market uncertainty.
                </p>
                <p class="mb-4">
                    <b>Gold (XAUUSD):</b> Trade with leverage of up to 1:1000, aligned with your account's leverage settings.
                </p>
                <p class="mb-4">
                    <b>Silver (XAGUSD) and Platinum (XPTUSD):</b> Trade with leverage up to 1:200 (1/5 of your account's leverage).
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-6 col-md-12 icons">
               
            </div>
        </div>
    </div>
</section>

<?php
$featureIconArr = [
    [
        'icon' => 'assets/images/gold-silver-platinum.png',
        'title' => 'Gold, Silver, Platinum'
    ],
    [
        'icon' => 'assets/images/leverage.png',
        'title' => 'Up to 1:500 Leverage'
    ],
    [
        'icon' => 'assets/images/0-commission.png',
        'title' => '0 Commission'
    ],
    [
        'icon' => 'assets/images/spread-pips.png',
        'title' => 'Spread from 0.1 Pips'
    ],
    [
        'icon' => 'assets/images/10-tier-provider.png',
        'title' => '10+ Tier 1 Liquidity provider'
    ],
    [
        'icon' => 'assets/images/all-stratagies.png',
        'title' => 'All Stratagies Allowed'
    ],
    [
        'icon' => 'assets/images/ny4-server.png',
        'title' => 'NY4 Servers'
    ],
    [
        'icon' => 'assets/images/trusted-ragulated.png',
        'title' => 'Trusted & Regulated'
    ],
];

include_once ('elements/feature-trading-icons.php');
?>

<?php
$paramArr = [
    'name' => "Metal"
];

$videoArr = [
    [
        'id' => "AY7fWmE1CBk",
        "title" => "This GOLD Trading Strategy makes me $1000 a day",
        "description" => "I show you the EXACT strategy I use to make $1000 daily trading gold or xauusd.",
    ],
    [
        'id' => "oc2zqnvsqi0",
        "title" => "3 Key Tips for Trading Gold!",
        "description" => "This video expresses our personal opinions only, and is NOT in any way financial advice. ",
    ],
	[
        'id' => "SGSKYQzXdUM",
        "title" => "Forex Trading For Beginners (FREE FULL COURSE)",
        "description" => "In this video we show you everything you need to know about trading forex as a beginner, fast.",
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

<div class="container">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" >
        <div class="col-12">
            <div class="info-card" data-aos="fade-up" data-aos-duration="800" >
                <div class="alert-custom">
                    How do Dividends work? If you hold an open position from the day before the ex-dividend date, then you will receive the dividend payment on a buy position and be charged on a sell position.
                </div>
                <p class="info-note">
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