<?php
include_once ('elements/header.php');
// include_once ('elements/product-child-menu');
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
                <h2 class="fw-bold h2 mb-5">Trade Global Equities</h2>
                <div class="p-1 divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Access leading U.S., European, Asian, and Middle Eastern stocks with competitive pricing and deep liquidity. Benefit from transparent costs, robust risk controls, and fast, reliable execution.
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
                <ul class="mb-0 ps-5 mx-5 w-75" style="list-style-type: none;">
                    <li class="">
                        <b>Zed Capital International Ltd</b>, investors gain access to a broad spectrum of equities that represent innovation, resilience, and global economic growth. 
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
                <h3 class="fw-bold mb-4">Why Choose Stock CFDs with Zed Capital?</h3>
                
                <h5>Global Market Coverage</h5>
                <p class="text-gray">
                    Access equities listed on major exchanges, including the NYSE, NASDAQ, LSE, DAX, CAC 40, and more
                </p>

                <h5>Two-Way Opportunities</h5>
                <p class="text-gray">
                    Capture potential gains in both rising and falling markets.
                </p>

                <h5>Asia Pacific</h5>
                <p class="text-gray">
                    Samsung, Toyota, Alibaba, Reliance Industries, Tata Group
                </p>

                <h5>Leverage Advantage</h5>
                <p class="text-gray">
                    Increase market exposure with margin trading, while applying disciplined risk management.
                </p>

                <h5>Integrated Platform</h5>
                <p class="text-gray">
                    Trade stocks alongside forex, commodities, and indices on our advanced <b>MT5 platform</b>.
                </p>

                <h5>Transparent Pricing & Execution</h5>
                <p class="text-gray">
                    Competitive spreads, deep liquidity, and institutional-grade execution.
                </p>

                <a href="#" class="show-all-btn w-100 d-none">
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
        <div class="col-12 col-sm-3 col-xxl">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        NVDA
                    </span>
                </h5>
                <div class="d-flex justify-content-between px-2 mt-3">
                    <div>
                        <small>Bid</small>
                        <div class="text-danger fw-bold NVIDIA-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-danger fw-bold NVIDIA-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="my-5">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-4">
                    <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                    <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col-12 col-sm-3 col-xxl">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        TSLA
                    </span>
                </h5>
                <div class="d-flex justify-content-between px-2 mt-3">
                    <div>
                        <small>Bid</small>
                        <div class="text-success fw-bold Tesla-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-success fw-bold Tesla-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="my-5">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-4">
                    <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                    <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-12 col-sm-3 col-xxl">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        META
                    </span>
                </h5>
                <div class="d-flex justify-content-between px-2 mt-3">
                    <div>
                        <small>Bid</small>
                        <div class="text-danger fw-bold Facebook-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-danger fw-bold Facebook-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="my-5">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-4">
                    <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                    <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                </div>
            </div>
        </div>

        <!-- Repeat for other stocks -->
        <div class="col-12 col-sm-3 col-xxl">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        AAPL
                    </span>
                </h5>
                <div class="d-flex justify-content-between px-2 mt-3">
                    <div>
                        <small>Bid</small>
                        <div class="text-success fw-bold Apple-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-success fw-bold Apple-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="my-5">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-4">
                    <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                    <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="col-12 col-sm-3 col-xxl">
            <div class="stock-card" data-aos="fade-up" data-aos-duration="850">
                <h5 class="fw-bold mb-4">
                    <span class="text-shadow">
                        VISA
                    </span>
                </h5>
                <div class="d-flex justify-content-between px-2 mt-3">
                    <div>
                        <small>Bid</small>
                        <div class="text-danger fw-bold Visa-bid">0.00</div>
                    </div>
                    <div>
                        <small>Ask</small>
                        <div class="text-danger fw-bold Visa-ask">0.00</div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="my-2 d-none">
                    <small>Spread</small> 
                    <div class="fw-bold">0</div>
                </div>
                <div class="my-5">
                    <small>Leverage</small> 
                    <div class="fw-bold">Up to 1:500</div>
                </div>
                <div class="d-flex justify-content-around gap-2 mt-4">
                    <button class="btn btn-buy px-4 openLiveAccount">Buy</button>
                    <button class="btn btn-sell px-4 openLiveAccount">Sell</button>
                </div>
            </div>
        </div>

        <!-- Add META, AAPL, AMD similarly -->
    </div>

    <!-- Button -->
    <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="850">
        <a href="#" class="btn btn-danger px-4 py-2 mt-4 rounded-pill">
            Click here to view the Stock
        </a>
    </div>
</div>

<script>
    // List of symbols to fetch
    const symbols = ["NVIDIA", "Tesla", "Facebook", "Apple", "Visa"];

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
    .stock-section {
        padding: 80px 0;
        background-color: var(--zed-primary);
        /* background-image: url('assets/images/background/stock-trading-background.png'); */

        color: white;
        background-size: contain;
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
        width: 180px; 
        height: 180px; 
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
                <h2 class="h2">Global Equities at Your Fingertips</h2>
                <div class="my-5 stock-divider"></div>
                <p class="fw-bold d-none" data-aos="fade-up" data-aos-duration="850">
                    Stock trading allows you to buy and sell company stocks, enabling you to profit from 
                    changes in their market value. Unlike traditional investing, CFDs on shares let you trade 
                    without owning the underlying asset, offering greater flexibility and potential.
                </p>
                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">United States</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    Apple, Microsoft, Tesla, Amazon, Meta and more.
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Europe</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    Volkswagen, LVMH, Siemens, Barclays and other blue-chip leaders.
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Asia-Pacific</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    HSBC, Toyota, Samsung, Alibaba, Xiaomi, Lenovo.
                </p>

                <h5 class="fw-bold" data-aos="fade-up" data-aos-duration="850">Middle East</h5>
                <p class="text-white" data-aos="fade-up" data-aos-duration="850">
                    Saudi Aramco, Emirates NBD, Emaar Properties, ADNOC.
                </p>

            </div>

            <!-- Floating Icons -->
             <div class="col-lg-6 col-md-12 p-0 px-2">
                <img src="assets/images/Global-Equities-at-Your-Fingertips.png" alt="" class="w-100">
            </div>
            <div class="col-lg-5 col-md-12 p-0 d-none">
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
        <h2 class="h4 mb-3">Benefits of Trading Stocks</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2">
                            <img src="assets/images/svg/Diversification.svg">
                        </div>
                        <div>
                        <h5 class="fw-bold mb-1">Diversified Access</h5>
                        <p class="mb-0 small-muted">
                            Build a portfolio across sectors including technology, energy, finance, healthcare, and consumer goods.
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
                            Trade without custody fees, settlement delays, or ownership complexities.
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
                            Advanced charting, technical analysis, and automated trading strategies.
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
                            Reliable trade execution backed by institutional-grade infrastructure.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featureIconTitle = "Advanced Market Access to Global Equities";

$featureIconArr = [
    [
        'icon' => 'assets/images/flat-icon/Access-global-stocks.png',
        'title' => 'Access global stocks'
    ],
    [
        'icon' => 'assets/images/flat-icon/No-ownership-required.png',
        'title' => 'No ownership required'
    ],
    [
        'icon' => 'assets/images/flat-icon/Trade-both-directions.png',
        'title' => 'Trade both directions'
    ],
    [
        'icon' => 'assets/images/flat-icon/Low-capital-entry.png',
        'title' => 'Low capital entry'
    ],
    [
        'icon' => 'assets/images/flat-icon/Quick-execution.png',
        'title' => 'Quick execution'
    ],
    [
        'icon' => 'assets/images/flat-icon/Hedge-portfolios.png',
        'title' => 'Hedge portfolios'
    ],
    [
        'icon' => 'assets/images/flat-icon/No-custody-fees.png',
        'title' => 'No custody fees'
    ],
    [
        'icon' => 'assets/images/flat-icon/Flexible-lot-sizes.png',
        'title' => 'Flexible lot sizes'
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
        'id' => "-JK3aDXo3LA",
        "title" => "What is Stock?",
        "description" => "The smartest investors don’t limit themselves — they go global.",
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
            <div class="info-card mb-5">
                <div class="alert-custom" data-aos="fade-up" data-aos-duration="850">
                    At <b>Zed Capital International Ltd</b>, we provide risk management tools including stop-loss and take-profit orders, ensuring that clients can trade safely and with confidence.
                </div>
                <p class="info-note" data-aos="fade-up" data-aos-duration="850">
                    <ul class="arrow-list mb-0 ps-5">
                        <li class="mb-1 px-4" data-aos="fade-up" data-aos-duration="800">
                            <b>Leverage Amplifies Risk:</b> While leverage enhances exposure, it also increases potential losses.
                        </li>
                        <li class="mb-1 px-4" data-aos="fade-up" data-aos-duration="800">
                            <b>Volatility:</b> Equities are sensitive to earnings announcements, interest rates, and macroeconomic shifts.
                        </li>
                        <li class="mb-1 px-4" data-aos="fade-up" data-aos-duration="800">
                            <b>No Ownership Rights:</b> As CFDs, stock trades do not include shareholder benefits such as dividends or voting rights.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
// include_once ('elements/faq-questions');
?>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
    <img src="assets/images/diamonds/product-footer-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 150px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>