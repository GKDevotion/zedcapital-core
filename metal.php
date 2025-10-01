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
                <h2 class="fw-bold h2 mb-5">Trade Precious and Industrial Metals</h2>
                <div class="p-1 metal-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Metals combine investment value with industrial demand. At Zed Capital International Ltd, trade gold, silver, and key metals with advanced technology, transparent conditions, and the support of a trusted global partner
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
                    <img src="assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute bottom-0 start-0 float-y" style="width: 100px; height: 60px; margin: -60px -15px;">
                </div>
            </div>
            <div class="col-md-8">
                <p class="mb-0 small">
                    Our platform allows you to trade metals with competitive pricing, deep liquidity, and professional tools designed for precision and speed.
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
            <img src="assets/images/metal-benefit.png" class="w-100" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="800" >
            <div class="info-section">
                <h3 class="fw-bold mb-4">Why Trade Metals with us</h3>
                
                <h5>Diverse Opportunities</h5>
                <p class="text-gray">
                    Access both precious metals such as gold, silver and platinum, and industrial metals such as copper and aluminum.
                </p>

                <h5>Safe Haven Advantage</h5>
                <p class="text-gray">
                    Gold and silver remain key assets during times of economic uncertainty, offering stability and value protection.
                </p>

                <h5>Global Demand</h5>
                <p class="text-gray">
                    Industrial metals reflect growth in construction, technology and manufacturing sectors.
                </p>

                <h5>Professional Platform</h5>
                <p class="text-gray">
                    Use MT5 for advanced charting, technical analysis and automated trading strategies.
                </p>

                <h5>Transparent Pricing</h5>
                <p class="text-gray">
                    Trade with competitive spreads, fast execution and institutional grade infrastructure.
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
        border-radius: 25px;
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
                <img src="assets/images/metal-gold.png" alt="Corner Image" class="position-absolute" style="width: 90%; margin: -85px 15px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card">

                <div class="">
                    <div class="metal-title">Gold</div>

                    <div class="market-title">XAUUSD</div>
                    
                    <div class="d-flex justify-content-between px-5 mt-2">
                        <div>
                            <p class="mb-0 fs-6">Bid</p>
                            <div class="text-success fw-bold XAUUSD-bid">0.00</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-danger fw-bold XAUUSD-ask">0.00</div>
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
                    <div class="d-flex justify-content-around px-3 mb-3">
                        <button class="btn btn-buy">Buy</button>
                        <button class="btn btn-sell">Sell</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col-md-4 px-5 mt-5" data-aos="fade-up" data-aos-duration="400" >
            <div class="position-relative">
                <img src="assets/images/metal-silver.png" alt="Corner Image" class="position-absolute" style="width: 90%; margin: -85px 15px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card">

                <div class="">
                    <div class="metal-title">Silver</div>

                    <div class="market-title">XAGUSD</div>
                    
                    <div class="d-flex justify-content-between px-5 mt-2">
                        <div>
                            <p class="mb-0 fs-6">Bid</p>
                            <div class="text-danger fw-bold XAGUSD-bid">0.00</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-danger fw-bold XAGUSD-ask">0.00</div>
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
                    <div class="d-flex justify-content-around px-3 mb-3">
                        <button class="btn btn-buy">Buy</button>
                        <button class="btn btn-sell">Sell</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-md-4 px-5 mt-5" data-aos="fade-up" data-aos-duration="400" >
            <div class="position-relative">
                <img src="assets/images/metal-platinum.png" alt="Corner Image" class="position-absolute" style="width: 90%; margin: -85px 15px;" data-aos="fade-up" data-aos-duration="1000" >
            </div>

            <div class="stock-card" >

                <div class="">
                    <div class="metal-title">Copper</div>

                    <div class="market-title ">COPPER</div>
                    
                    <div class="d-flex justify-content-between px-5 mt-2">
                        <div>
                            <p class="mb-0 fs-6">Bid</p>
                            <div class="text-danger fw-bold COPPER-bid">0.00</div>
                        </div>
                        <div>
                            <p class="mb-0 fs-5">Ask</p>
                            <div class="text-success fw-bold COPPER-ask">0.00</div>
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
                    <div class="d-flex justify-content-around px-3 mb-3">
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

<script>
    // List of symbols to fetch
    const symbols = ["COPPER", "XAUUSD", "XAGUSD"];

    function fetchMarketData() {
        $.ajax({
            url: 'https://93.190.139.146:5000/data',
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
                <h2 class="h2 mt-5">Metals You Can Trade</h2>

                <div class="my-5" style="width: 60px; height: 8px; background: white;"></div>
                
                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Precious Metals</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Gold, Silver, Palladium
                </h5>

                <h3 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Industrial Metals</h3>
                <h5 class="mb-2 text-white" data-aos="fade-up" data-aos-duration="850">
                    Copper, Aluminum, Zinc
                </h5>

                <p class="text-white mt-5" data-aos="fade-up" data-aos-duration="850">
                    Trading metals at Zed Capital International Ltd gives you the flexibility to participate in markets that combine investment value with global industrial demand.
                </p>

            </div>

            <!-- Floating Icons -->
            <div class="col-lg-6 col-md-12 icons">
               
            </div>
        </div>
    </div>
</section>

<style>

    .opportunities-for-investors{
        background-color: var(--zed-backgound-color);
        padding: 50px 0;
    }

    .risks-considerations{
        padding: 50px 0;
    }
    .tech-feature {
        padding: 40px 50px;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        background-color: #fff;
        margin: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .tech-feature:hover {
        border: 1px solid var(--zed-secondary);
    }
    .icon-circle img{
        width: 40px;
    }
    
</style>

<section class="opportunities-for-investors">
    <div class="container py-5">
        <h2 class="h4 mb-3">Benefits of Metals Trading</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="assets/images/svg/Diversified-Access.svg">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Diversified Access</h5>
                        <p class="mb-0 small-muted">
                            Balance your portfolio with assets that move differently from stocks or currencies.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="assets/images/svg/liquidity.svg">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Liquidity and Speed</h5>
                        <p class="mb-0 small-muted">
                            Trade metals with confidence, supported by strong market liquidity and secure infrastructure.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="assets/images/svg/inflation.svg">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Inflation Hedge</h5>
                        <p class="mb-0 small-muted">
                            Precious metals such as gold often preserve value during inflationary periods.
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="assets/images/svg/Advaced-Tools.svg">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Advanced Tools</h5>
                        <p class="mb-0 small-muted">
                            Use indicators, analysis features and automated systems to manage trades effectively.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Why trade on MetaTrader 5 with Zed Capital?";

$featureIconArr = [
    [
        'icon' => 'assets/images/flat-icon/Safe-haven-assets.png',
        'title' => 'Safe-haven assets'
    ],
    [
        'icon' => 'assets/images/flat-icon/Hedge-against-inflation.png',
        'title' => 'Hedge against inflation'
    ],
    [
        'icon' => 'assets/images/flat-icon/High-global-demand.png',
        'title' => 'High global demand'
    ],
    [
        'icon' => 'assets/images/flat-icon/High-liquidity.png',
        'title' => 'High liquidity in gold & silver'
    ],
    [
        'icon' => 'assets/images/flat-icon/Store-of-long-term-value.png',
        'title' => 'Store of long-term value'
    ],
    [
        'icon' => 'assets/images/flat-icon/Leverage-opportunities.png',
        'title' => 'Leverage opportunities'
    ],
    [
        'icon' => 'assets/images/flat-icon/Crisis-and-recession-protection.png',
        'title' => 'Crisis and recession protection'
    ],
    [
        'icon' => 'assets/images/flat-icon/Benchmark-commodities.png',
        'title' => 'Benchmark commodities'
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
                    <p class="">
                        Zed Capital International Ltd offers risk management tools including stop loss and take profit orders, allowing clients to manage exposure responsibly.
                    </p>
                </div>

                <b class="mt-2 mx-3">Risks to Consider</b>
                <p class="mt-2 mx-3" data-aos="fade-up" data-aos-duration="800">
                    Metals trading involves exposure to price volatility driven by global supply and demand, geopolitical events, and shifts in investor sentiment. While leverage can enhance profit potential, it also increases risk
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>


<?php
include_once ('elements/footer.php');
?>