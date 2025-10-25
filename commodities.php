<?php
$seoArr = [
    "title" => "Trade Global Commodities | Gold, Oil and More - Zed Academy",
    "description" => "Trade global commodities with Zed Academy. Access gold, silver, oil and other markets, with expert insights, strategies and real-time pricing.",
    "keyword" => "global commodities trading, trade gold and oil, commodity market, Zed Academy trading, precious and industrial metals, how to trade global commodities online, trade gold, silver, oil and other commodities, Zed Academy guide to commodities trading, commodities trading strategies for beginners and pros, live commodity prices and trading insights, global commodities market investment tips, online platform for trading precious and industrial commodities"
];
include_once ('elements/header.php');
// include_once ('elements/product-child-menu');
?>

<style>
    .commodities-header{
        padding: 20px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/product-commodities-background.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* position: relative; */
        min-height: 65vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 120px;
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
            min-height: 65vh;
            margin-top: 160px;
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
                <h1 class="fw-bold h2 mb-5">Trade Global Commodities</h1>
                <div class="p-1 divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray" data-aos="fade-up" data-aos-delay="800">
                    The global commodities market is among the most vital and actively traded sectors, spanning energy that powers industries to  agricultural products sustaining daily life, reflecting the true backbone of the world economy.
                </p>
            </div>

            <!-- Image Column -->
            <div class="col-md-6 text-black p-0" data-aos="fade-up" data-aos-duration="800" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/product-commodities.webp" class="img-fluid" alt="Product Commodities">
            </div>
        </div>
    </div>
</section>

<style>
    .angled-left {
        background: #1a1a1a url('assets/images/dotted-bg.webp') repeat; /* Optional dotted bg */
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
            <div class="angled-left d-flex align-items-center justify-content-center">
                <div>
                    <h4 class="fw-bold mb-0">Basics of<br>Commodities</h4>
                </div>
            </div>

            <div class="position-relative set-diamond-image">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/silver-diamond.png" alt="Silver Diamond" class="position-absolute start-0 bottom-0 float-y" style="width: 80px; height: 50px; margin: -30px 50px;">
            </div>
        </div>

        <!-- Right description -->
        <div class="col-md-7" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/best-commodity-red-black-diamonds.png" alt="Best Commodities" class="position-absolute start-0 bottom-0" style="width: 80px; height: 120px; margin: -50px -70px;">
            </div>
            <p class="mb-0 p-4 p-md-0 text-muted" data-aos="fade-up" data-aos-duration="800" >
                With our advanced trading platform, competitive conditions and institutional grade infrastructure, you can trade commodities across multiple sectors with precision and transparency.
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
                <img src="<?php echo getBaseUrl(); ?>/assets/images/commodities-benefit.webp" class="w-100 ps-0 ps-md-5" alt="Commodities Benefit">
            </div>
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-2 px-md-5 pe-1 pe-md-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section" data-aos="fade-up" data-aos-duration="800" >
                <h3 class="fw-bold mb-4">Why Trade Commodities with us</h3>
                
                <h5>Diverse Market Access</h5>
                <p>
                    Trade energies and agricultural products from a single platform.
                </p>

                <h5>Global Demand</h5>
                <p>
                    Commodities are essential to economies and households around the world.
                </p>

                <h5>Two Way Opportunities</h5>
                <p>
                    Benefit from trading both rising and falling prices across global markets.
                </p>

                <h5>Professional Platform</h5>
                <p>
                    Use MT5 for seamless execution, advanced charting and automated strategies.
                </p>

                <h5>Transparent Conditions</h5>
                <p>
                    Experience competitive spreads, deep liquidity and reliable pricing.
                </p>

                <a href="#" class="show-all-btn w-100 d-none" title="Read More">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </div>
    <div class="position-relative set-diamond-image">
        <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/red-black-diamonds.png" alt="Red Black diamond" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
    </div>
</div>

<style>
    .section-title {
        font-weight: 700;
        font-size: 2rem;
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
        margin: 1.5rem 0;
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

    .metal-spread d-none, .metal-leverage {
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

    .sl-divider {
        height: 1px;
        width: 80px;
        background-color: var(--zed-dark-text);
        margin: 25px auto;
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
    <div class="section-title" data-aos="fade-up" data-aos-duration="800" >
        Institutional Market Feed - Commodity CFDs
        <!-- Why Trade CFDs on Energies such as Oil? -->
    </div>
    <div class="underline" data-aos="fade-up" data-aos-duration="800" ></div>
    <p class="text-center mb-2 w-75 m-auto" data-aos="fade-up" data-aos-duration="800" >
        Trading CFDs on energies like oil is an excellent way to diversify your portfolio. With Zed Capital, you can access global energy markets without purchasing the product outright.
    </p>
    
    <!-- Card group row -->
    <div class="row justify-content-center card-group-row">
        <!-- Brent -->
        <div class="col-12 col-sm-4 col-xxl px-3" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/brent-oil.webp" class="w-75" alt="Brent Oil" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title text-green">Brent</div>
                <div class="market-title fw-bold d-none">XBRUSD</div>
                <div class="d-flex justify-content-between px-5 mt-4">
                    <div>
                        <p class="mb-0 fs-6">Bid</p>
                        <div class="text-success fw-bold BRENT-bid">0.00</div>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Ask</p>
                        <div class="text-danger fw-bold BRENT-ask">0.00</div>
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
                <div class="mt-3 mb-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>

        <!-- NGAS -->
        <div class="col-12 col-sm-4 col-xxl px-3" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/natural-gas.webp" class="w-75" alt="natural Gas" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title  text-green">NGAS</div>
                <div class="market-title fw-bold d-none">XYIUSD</div>
                <div class="d-flex justify-content-between px-5 mt-4">
                    <div>
                        <p class="mb-0 fs-6">Bid</p>
                        <div class="text-success fw-bold NGAS-bid">0.00</div>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Ask</p>
                        <div class="text-danger fw-bold NGAS-ask">0.00</div>
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
                <div class="mt-3 mb-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>

        <!-- WTI -->
        <div class="col-12 col-sm-4 col-xxl px-3" data-aos="fade-up" data-aos-duration="800" >
            <div class="commodoties-card w-100" data-aos="fade-up" data-aos-duration="400" >
                <img src="<?php echo getBaseUrl(); ?>/assets/images/wti-oil.webp" class="w-75" alt="WTI Oil" data-aos="fade-up" data-aos-duration="1000" >
                <div class="metal-title  text-green">WTI</div>
                <div class="market-title fw-bold d-none">XTIUSD</div>
                <div class="d-flex justify-content-between px-5 mt-4">
                    <div>
                        <p class="mb-0 fs-6">Bid</p>
                        <div class="text-success fw-bold WTI-bid">0.00</div>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Ask</p>
                        <div class="text-danger fw-bold WTI-ask">0.00</div>
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
                <div class="mt-3 mb-3">
                    <button class="btn btn-buy">Buy</button>
                    <button class="btn btn-sell">Sell</button>
                </div>
            </div>
        </div>
        
    </div>

</div>

<script>
    // List of symbols to fetch
    const symbols = ["NGAS", "WTI", "BRENT"];

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
                        const cleanedSymbol = company.Symbol.replace(/\.+$/, '');
                        
                        // Append each company's data to the div
                        $("."+cleanedSymbol+"-bid").text( company.Bid );
                        $("."+cleanedSymbol+"-ask").text( company.Ask );
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
    .commodities-section {
        color: white;
        position: relative;
        overflow: hidden;
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/energy-trading-commodity-background.webp');
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
                <h2 class="h2 mt-3" data-aos="fade-up" data-aos-duration="800" >Commodities You Can Trade</h2>
                <div class="my-5 etw-divider"></div>
                
                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Energies</h3>
                <h5 class="mb-3 text-white" data-aos="fade-up" data-aos-duration="850">
                    Crude Oil, Brent Oil, Natural Gas
                </h5>

                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Agricultural Products</h3>
                <h5 class="mb-3 text-white" data-aos="fade-up" data-aos-duration="850">
                    Coffee, Cocoa, Wheat, Corn, Soybeans, cotton, Sugar, Wheat
                </h5>

                <p class="mt-5">
                    Trading commodities with Zed Capital International Ltd gives you access to markets that directly reflect global growth, demand and supply shifts.
                </p>
            </div>

            <!-- Floating Icons -->
            <div class="col-lg-5 col-md-12 icons">
                
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
        <h2 class="h4 mb-3">Benefits of Commodities Trading</h2>
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
                            Commodities often move independently of stocks and currencies, reducing portfolio risk.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/liquidity.svg" alt="Liquidity and Speed">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Liquidity and Speed</h5>
                        <p class="mb-0 small-muted">
                            Trade with confidence because to lightning-fast execution and dependable infrastructure.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/inflation.svg" alt="Hedge Against Inflation">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Hedge Against Inflation</h5>
                        <p class="mb-0 small-muted">
                            Assets like oil and agricultural goods can help preserve value during economic shifts.  
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
                            Access professional indicators, market analysis and automated trading features.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Real Assets, Real Opportunities";
$featureIconArr = [
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Exposure-to-real-assets.png',
        'title' => 'Exposure to real assets'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Safe-haven-during-uncertainty.png',
        'title' => 'Safe-haven during uncertainty'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Global-supply-demand-drive.png',
        'title' => 'Global supply & demand driven'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Built-in-diversification.png',
        'title' => 'Portfolio diversification'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Liquidity.png',
        'title' => 'High liquidity in key contracts'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Transparent-pricing.png',
        'title' => 'Transparent international pricing'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Profit-both-long-short.png',
        'title' => 'Profit both long & short'
    ],
    [
        'icon' => getBaseUrl().'/assets/images/flat-icon/Volatile-active-markets.png',
        'title' => 'Active & volatile markets'
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
        'id' => "TJoHjnSh8SI",
        "title" => "What is Commodity?",
        "description" => "Commodities power the world — from the oil in your car to the gold in your jewelry and the coffee in your cup.",
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
        background: var(--zed-primary);
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
        <div class="col-12" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="800" >
                    <p class="">
                        To support clients, Zed Capital International Ltd provides risk management features such as stop loss and take profit orders, helping you trade responsibly.
                    </p>
                </div>
                <b class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">Risks to Consider</b>
                <p class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                    Commodities are influenced by global supply and demand, geopolitical events, weather conditions and economic developments. Price swings can be sharp and unpredictable. Leverage increases market exposure but also magnifies potential losses.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
// include_once ('elements/faq-questions');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/product-footer-diamonds.png" alt="Product Diamond" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>