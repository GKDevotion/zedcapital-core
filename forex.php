<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .forex-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-forex-background.png');
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
            min-height: 60vh;
            margin-top: 100px;
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
                <img src="assets/images/silver-diamond.png" alt="Corner Image" class="position-absolute start-50 top-0 float-y" style="width: 80px; height: 50px;margin: 0 -200px;">
            </div>

            <!-- Text Column -->
            <div class="col-md-6 text-black"  >
                <h2 class="fw-bold h2 mb-5 pe-5" data-aos="fade-up" data-aos-duration="800">
                    What is Forex trading and how does it work?
                </h2>
                <div class="p-1 forex-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Forex, or foreign exchange, refers to the market where currencies are traded against each other. It's the largest financial market globally, with trillions of dollars worth of transactions happening daily
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
            <ul class="mb-0" data-aos="fade-up" data-aos-duration="800">
                <li><strong>Currencies are always traded in pairs,</strong> like <strong>EUR/USD</strong> (Euro vs. US Dollar) or <strong>GBP/JPY</strong> (British Pound vs. Japanese Yen).</li>
                <li><strong>You buy one currency</strong> with the expectation that it will appreciate in value compared to the other currency in the pair.</li>
            </ul>
            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/forex-red-black-diamond.png" alt="Corner Image" class="position-absolute end-0 bottom-0 float-y" style="width: 100px; height: 80px;margin: 15px -100px">
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
            <img src="assets/images/forex-benefit.png" class="w-100 ps-5" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5">
            <div class="info-section" data-aos="fade-up" data-aos-duration="800">
                <h4 class="fw-bold mb-4">With Zed Capital, you benefit from:</h4>
                
                <h5># Asset Class</h5>
                <p>A category of financial instruments with similar characteristics, such as stocks, bonds, or commodities, governed by the same regulatory framework.</p>

                <h5># Aussie (Ozzie)</h5>
                <p>A commonly used term for the AUD/USD currency pair, known for its liquidity and connection to commodity markets.</p>

                <h5># Acquisition</h5>
                <p>The process where one company takes control of another, often as part of a growth or expansion strategy.</p>

                <a href="#" class="show-all-btn w-100" data-aos="fade-up" data-aos-duration="800">
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

<div class="container py-5 mb-5">
    <!-- Title -->
    <div class="text-center mb-4">
        <h2 class="h2" data-aos="fade-up" data-aos-duration="800">
            Why Trade CFDs on Stock?
        </h2>
        <div class="divider" data-aos="fade-up" data-aos-duration="800"></div>
        <p class="text-muted w-75 p-2 m-auto" data-aos="fade-up" data-aos-duration="800">
            One of the most significant advantages of trading CFDs on shares is that you can gain full exposure to
            stock price movements with a small initial deposit.
        </p>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center">
        <!-- Card -->
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
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
        <div class="col">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="800">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
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
    <div class="container py-3">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="h2">How Forex Trading Works with Zed Capital</h2>
                <div class="my-5" style="width: 60px; height: 8px; background: white;"></div>
                <p class="fw-bold ">
                    Forex trading involves exchanging one currency for another, allowing you to speculate on currency price movements. Unlike other financial instruments, you don't own the currency but profit from its value changes.
                </p>

                <p class="mt-5">
                    One key advantage of forex is the low entry point—you can trade micro-lots (1,000 units) and scale up as you grow. Forex trading also offers leverage, enabling you to control a larger position with a smaller deposit.
                </p>

                <p class="mt-1">
                    At Zed Capital, leverage can reach 1:1000, allowing a $1,000 deposit to control up to $1,000,000. While leverage increases profit potential, it also carries risk, so managing your trades responsibly is essential.
                </p>

            </div>

            <!-- Floating Icons -->
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/forex-trading.png" class="w-100" alt="Regulatory Assurance">
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
    <h2 class="h2 mb-5" data-aos="fade-up" data-aos-duration="850">Forex Trading Example</h2>
    
    <!-- Responsive Card Layout -->
    <div class="row g-4 align-items-stretch">
      <!-- Profit Calculation -->
      <div class="col-12 col-md-6 " data-aos="fade-up" data-aos-duration="800">
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
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="800">
            <div class="custom-section right-left-height">
                <h4 class="mb-5 text-start fw-bold">Opening the Position</h4>
                <p>
                    You decide to trade <span class="highlight">50 stock</span> of Meta at an opening price of <span class="highlight">$200</span> per share. With Zed Capital's <span class="highlight">10% margin</span>, your required capital is only <span class="highlight">$1,000</span>, allowing you to control a larger position with a smaller deposit. The total value of the position is <span class="highlight">$10,000</span>.
                </p>
            </div>
        </div>
    </div>
    
</div>

<?php
$featureIconArr = [
    [
        'icon' => 'assets/images/50+fx-pairs.png',
        'title' => '50+ FX Pairs at Your Fingertips'
    ],
    [
        'icon' => 'assets/images/unbeatable-spread.png',
        'title' => 'Unbeatable Spreads from 0.0 Pipes'
    ],
    [
        'icon' => 'assets/images/10-tier-provider.png',
        'title' => '10+ Tier Liquidity Provider'
    ],
    [
        'icon' => 'assets/images/ny4-server.png',
        'title' => 'Lighting-Fast NY4 Servers'
    ],
    [
        'icon' => 'assets/images/leverage.png',
        'title' => 'Upto 1:1000 Leverage'
    ],
    [
        'icon' => 'assets/images/all-stratagies.png',
        'title' => 'All Strategies Welcome'
    ],
    [
        'icon' => 'assets/images/no-requotes.png',
        'title' => 'No Requotes-Ever'
    ],
    [
        'icon' => 'assets/images/trusted-ragulated.png',
        'title' => 'Trusted & Regulated'
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

<section style="background-color: var(--zed-backgound-color);" class="p-5">
    <div class="container my-5">
        <div class="row custom-card mx-auto">
            <div class="highlight-banner" data-aos="fade-up" data-aos-duration="800" >
                Transparent Spreads
                <span class="sub-text">
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
</section>

<?php
$paramArr = [
    'name' => "Forex"
];

$videoArr = [
    [
        'id' => "vX0mVnOelHA",
        "title" => "What is Forex? Forex Trading for Beginners | How to Make Money?",
        "description" => "In this video, you will learn what is ForexTrading and how people make money by Trading in the Currency Market.",
    ],
    [
        'id' => "yY3ZG3fG6rc",
        "title" => "Forex Vs Stock Market | How to Make Money with Forex Trading?",
        "description" => "In this video you will learn how Forex Market is different from Stock Market & how people Make Money in Forex Trading?",
    ],
	[
        'id' => "R5lT1EirXEA",
        "title" => "INDIA में FOREX TRADING का 100% LEGAL METHOD",
        "description" => "The content provided in this crypto and forex trading course is for educational and informational purposes only. ",
    ],
];

include_once ('elements/explore-more-about.php');
?>

<?php
include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="assets/images/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>