<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu.php');
?>

<style>
    .indices-header{
        padding: 100px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-indices-background.png');
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
            <div class="col-md-5 text-black py-5 px-0" data-aos="fade-up" data-aos-duration="800" >
                <h2 class="h2 mb-5">Trade Global Indices</h2>
                <div class="p-1 indices-header-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-100" data-aos="fade-up" data-aos-delay="800">
                    Access leading global indices with Zed Capital International Ltd. Trade broad market performance in a single instrument—capture trends, diversify efficiently, and express macro views without stock selection, with transparent execution.
                </p>
            </div>

            <!-- Image Column -->
            <div class="col-md-7 text-black d-none d-lg-block" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/product-indices.png" class="img-fluid">
            </div>

        </div>
        
        <div class="row mt-5">
            <div class="bottom-0 ">
                <div class="position-relative set-diamond-image" >
                    <img src="assets/images/diamonds/best-of-indicies-diamonds.png" alt="Corner Image" class="position-absolute start-0 bottom-0" style="width: 80px; height: 100px;margin: -35px 100px;">
                </div>
                <div class="basic-of-indices col-md-12 text-center p-4" data-aos="fade-up" data-aos-duration="800" >
                    <h3 class="fw-bold">Basics of Indices</h3>
                    <p class="mb-0 small">
                        With our advanced platform, you can trade leading global indices such as the S&P 500, NASDAQ 100, DAX 40, FTSE 100 and Nikkei 225 with competitive pricing and professional tools.
                    </p>
                </div>
            </div>    

            <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute end-0 bottom-0 float-y" style="width: 88px; height: 60px; margin: -20px -35px;">
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
            <img src="assets/images/indicies-benefit.png" class="w-75" alt="Indicies Benefit">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-6 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="800" >
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

                <a href="#" class="show-all-btn w-100 d-none">
                    Read More
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
            <img src="assets/images/diamonds/red-black-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px; height: 100px; margin: -55px 125px;">
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
</style>

<div class="container py-5">
    <!-- Title -->
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="800" >
        <h2 class="h2">
            Why Trade CFDs on Indicies?
        </h2>
        <div class="cfd-indicies-divider" data-aos="fade-up" data-aos-duration="800" ></div>
        <p class="text-muted w-75 p-2 m-auto" data-aos="fade-up" data-aos-duration="800" >
            One of the most significant advantages of trading CFDs on shares is that you can gain full exposure to
            stock price movements with a small initial deposit.
        </p>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center mt-5">
        <!-- Card -->
        <div class="col" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative" style="width: 170px; margin: -45px 30px;" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/flag/us-round-flag.png" class="w-50">
            </div>
            <div class="stock-card" >
                <h5 class="fw-bold mb-4 text-end">
                    <p class="text-green mb-2">
                        US500
                    </p>
                    <p class="">
                        S&P 500
                    </p>
                </h5>
                <div class="d-flex justify-content-between px-2">
                    <div>
                        <small>Bid</small>
                        <div class="text-danger fw-bold US500---bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-danger fw-bold US500---ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="mt-4">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-5">
                    <button class="btn btn-buy px-4">Buy</button>
                    <button class="btn btn-sell px-4">Sell</button>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative" style="width: 170px; margin: -45px 30px;" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/flag/us-round-flag.png" class="w-50">
            </div>
            <div class="stock-card" >
                <h5 class="fw-bold mb-4 text-end">
                    <p class="text-red mb-2">
                        US30
                    </p>
                    <p class="">
                        Dow Jones 30
                    </p>
                </h5>
                <div class="d-flex justify-content-between px-2">
                    <div>
                        <small>Bid</small>
                        <div class="text-success fw-bold US-Wall-Street-30-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-success fw-bold US-Wall-Street-30-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="mt-4">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-5">
                    <button class="btn btn-buy px-4">Buy</button>
                    <button class="btn btn-sell px-4">Sell</button>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative" style="width: 170px; margin: -45px 30px;" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/flag/ge-round-flag.png" class="w-50">
            </div>
            <div class="stock-card" >
                <h5 class="fw-bold mb-4 text-end">
                    <p class="text-green mb-2">
                        GER40
                    </p>
                    <p class="">
                        DAX
                    </p>
                </h5>
                <div class="d-flex justify-content-between px-2">
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
                <div class="mt-4">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-5">
                    <button class="btn btn-buy px-4">Buy</button>
                    <button class="btn btn-sell px-4">Sell</button>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative" style="width: 170px; margin: -45px 30px;" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/flag/uk-round-flag.png" class="w-50">
            </div>
            <div class="stock-card">
                <h5 class="fw-bold mb-4 text-end">
                    <p class="text-green mb-2">
                        UK100
                    </p>
                    <p class="">
                        FTSE 100
                    </p>
                </h5>
                <div class="d-flex justify-content-between px-2">
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
                <div class="mt-4">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-5">
                    <button class="btn btn-buy px-4">Buy</button>
                    <button class="btn btn-sell px-4">Sell</button>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col" data-aos="fade-up" data-aos-duration="800" >
            <div class="position-relative" style="width: 170px; margin: -45px 30px;" data-aos="fade-up" data-aos-duration="800" >
                <img src="assets/images/flag/jp-round-flag.png" class="w-50">
            </div>
            <div class="stock-card" >
                <h5 class="fw-bold mb-4 text-end">
                    <p class="text-green mb-2">
                        JPN225
                    </p>
                    <p class="">
                        Nikkei
                    </p>
                </h5>
                <div class="d-flex justify-content-between px-2">
                    <div>
                        <small>Bid</small>
                        <div class="text-danger fw-bold JAPAN-225---bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-danger fw-bold JAPAN-225---ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="mt-4">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-5">
                    <button class="btn btn-buy px-4">Buy</button>
                    <button class="btn btn-sell px-4">Sell</button>
                </div>
            </div>
        </div>

        <!-- Add META, AAPL, AMD similarly -->
    </div>

    <!-- Button -->
    <div class="text-center mt-4 mb-5" data-aos="fade-up" data-aos-duration="800" >
        <a href="#" class="btn btn-danger px-4 py-2 mt-4 rounded-pill">
        Click here to view the Indicies
        </a>
    </div>
</div>

<script>
    // List of symbols to fetch
    const symbols = ["US500", "Germany 40", "UK100", "JAPAN 225", "US Wall Street 30"];

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
        background-image: url('assets/images/background/indicies-trading-background.png');
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
                    Nikkei 225, Hang Seng, ASX 200, Nifty 50
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
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        background-color: #fff !important;
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
        <h2 class="h4 mb-3">Benefits of Trading Stocks</h2>
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
                            <img src="assets/images/svg/professional-tools.svg">
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
                            <img src="assets/images/svg/Efficiency.svg">
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
                            <img src="assets/images/svg/liquidity.svg">
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
        'icon' => 'assets/images/flat-icon/Built-in-diversification.png',
        'title' => 'Built-in diversification'
    ],
    [
        'icon' => 'assets/images/flat-icon/Lower-single-stock-risk.png',
        'title' => 'Lower single-stock risk'
    ],
    [
        'icon' => 'assets/images/flat-icon/Cost-efficient.png',
        'title' => 'Cost-efficient'
    ],
    [
        'icon' => 'assets/images/flat-icon/Leverage-available.png',
        'title' => 'Leverage available'
    ],
    [
        'icon' => 'assets/images/flat-icon/Transparent-pricing.png',
        'title' => 'Transparent pricing'
    ],
    [
        'icon' => 'assets/images/flat-icon/Volatile-active-markets.png',
        'title' => 'Volatile & active markets'
    ],
    [
        'icon' => 'assets/images/flat-icon/Hedging-options.png',
        'title' => 'Portfolio hedging'
    ],
    [
        'icon' => 'assets/images/flat-icon/Wide-global-choices.png',
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
        'id' => "sisyFUo_8Ag",
        "title" => "DXY Index Explained: How It Moves Forex & Gold | Dollar Index Full Guide",
        "description" => "we’ll dive deep into the DXY Index (US Dollar Index) and how it impacts major forex pairs like EUR/USD, GBP/USD, USD/JPY, and commodities like gold (XAU/USD). ",
    ],
    [
        'id' => "Q2PsoZLRp2I",
        "title" => "What is Dollar Index DXY || Relation with NIFTY & FOREX ?",
        "description" => "As per the FEMA Act, it is illegal to trade pairs without INR Currency & do business with brokers not registered in India. ",
    ],
	[
        'id' => "gfGMtIoPJyY",
        "title" => "How to Read Trading Charts Like a Pro ",
        "description" => "Beginner to Profitable: Full Trading Roadmap (Step-by-Step Guide) ",
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
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="info-card">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="800" >
                    <p class="fw-bold">Index Trading, Simplified</p>
                    <p class="" data-aos="fade-up" data-aos-duration="800" >
                        Tap into global market performance with Zed Capital International Ltd. Trade major benchmarks in a single, efficient instrument—diversify instantly, capture trends with speed and clarity, and operate under transparent, professional conditions.
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
// include_once ('elements/faq-questions.php');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>