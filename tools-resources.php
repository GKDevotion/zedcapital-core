<?php
include_once ('elements/header.php');
?>

<style>
    .section-forex {
        padding: 120px 0;
        position: relative;
        overflow: hidden;
        background-image: url('assets/images/background/tools-resources.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: 120px;
        height: 65vh;
    }

    .subheading {
        color: var(--zed-dark-text);
        font-weight: 400;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .highlight {
        color: var(--zed-primary);
        font-weight: 100;
    }

    .description {
        color: #666;
        max-width: 600px;
        font-size: 1rem;
        line-height: 1.7;
        margin-top: 20px;
    }
    .mt-50 {
        margin-top: -50px;
    }

    .mb100{
        margin-bottom: 100px;
    }

    .times-to-gear-up{
        margin-top: -50px;
        margin-left: 300px;
    }

    .tools-res-divider {
        height: 10px;
        width: 60px;
        background-color: var(--zed-primary);
        margin: 30px 0;
    }
    @media (max-width: 767.98px) {
        .forex-images {
            display: none !important;
        }
        
        .tools-resource-overview .border{
            padding: 2rem !important;
        }
    }
</style>

<section class="section-forex">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 text-center text-md-start mt-100" data-aos="fade-up" data-aos-delay="800">
                <div class="subheading" data-aos="fade-up" data-aos-delay="800">Tools Overview</div>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="800">
                    IT'S TIME TO<br>
                    GEAR UP
                </h2>

                <div class="tools-res-divider" data-aos="fade-up" data-aos-duration="850"></div>

                <p class="description w-75" data-aos="fade-up" data-aos-delay="800">
                    We match your ambition. Explore our suite of powerful, intuitive trading tools designed to unlock your fullest potential.
                </p>
            </div>

            <div class="col-md-6 d-flex justify-content-center forex-images flex-wrap gap-3">
                <img src="assets/images/times-to-gear-up.png" alt="Calendar Icon" class="w-75 times-to-gear-up" />

                <div class="row position-absolute">
                    <div class="col text-center" data-aos="fade-up" data-aos-duration="600">
                        <img src="assets/images/gear-up-stock-trading.png" alt="Calendar Icon" class="" style="margin: 28px 0 -150px -140px; width: 150px;" />
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="700">
                        <img src="assets/images/gear-up-candle.png" alt="Calendar Icon" style="margin: -220px 0 -150px 300px; width: 50px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row position-absolute">
            <div class="col text-center" data-aos="fade-up" data-aos-duration="700">
                <img src="assets/images/toosl-curve-line.png" alt="Calendar Icon" class="w-25" style="margin-top: -100px;" />
            </div>
        </div>
    </div>
</section>

<style>
    .tools-resource-belt{
        background-color: var(--zed-primary);
        color: var(--zed-);
    }
</style>

<section class="py-5 tools-resource-belt text-white">
    <div class="container">
        <div class="row position-absolute">
            <div class="col" data-aos="fade-up" data-aos-duration="600">
                <img src="assets/images/tools-bubble.png" alt="Calendar Icon" class="" style="margin: -207px 0 0 -100px; width: 200px;" />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 text-start">
                <p class="mb-0 fs-6">
                    Access detailed, real-time market intelligence for forex, indices, commodities, and more, 
                    execute trading signals directly from your client portal, and stay in the know with daily 
                    signals via email and Telegram.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Start One step ahead -->

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
        <div class="col-lg-6 col-sm-12 mb-4 mb-lg-0 text-center" data-aos="fade-up" data-aos-duration="850">
            <img src="assets/images/always-one-step-ahead.png" class="w-75 ps-5" alt="Regulatory Assurance">
        </div>
        
        <!-- Right Side Text -->
        <div class="col-lg-4 col-sm-12 px-5 pe-5" data-aos="fade-up" data-aos-duration="850">
            <div class="info-section">
                <h3 class="h2 mb-4">Always One<br>Step Ahead</h3>
                
                <div class="tools-res-divider" data-aos="fade-up" data-aos-duration="850"></div>

                <!-- Item 1 -->
                <div class="d-flex mb-4">
                    <div class="me-3" data-aos="fade-up" data-aos-delay="800">
                        <h3 class="fw-bold text-secondary mb-0">1</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <h6 class="fw-bold mb-1">Tools That Work for Everyone</h6>
                        <p class="mb-0 text-muted" data-aos="fade-up" data-aos-delay="800">
                        Designed to suit any trader—whether you're just starting or refining your strategy.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="d-flex mb-4">
                    <div class="me-3" data-aos="fade-up" data-aos-delay="800">
                        <h3 class="fw-bold text-secondary mb-0">2</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <h6 class="fw-bold mb-1">Actionable Insights</h6>
                        <p class="mb-0 text-muted" data-aos="fade-up" data-aos-delay="800">
                        Access real-time data and make smarter decisions with insights you can trust.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="d-flex">
                    <div class="me-3" data-aos="fade-up" data-aos-delay="800">
                        <h3 class="fw-bold text-secondary mb-0">3</h3>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <h6 class="fw-bold mb-1">Dedicated Support</h6>
                        <p class="mb-0 text-muted" data-aos="fade-up" data-aos-delay="800">
                        Not sure how to use Zed Capital's suite of trading tools? Our expert team is here to help, 24/5.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
        <img src="assets/images/diamonds/forex-red-black-diamond.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 120px;height: 100px;margin: -85px 80px;">
    </div>
</div>

<!-- End One step ahead -->

<!-- Start Tools of the Trade -->

<style>
    .gray-border {
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .demo-button {
        display: inline-flex;
        align-items: center;
        padding: 10px 16px;
        border: 1px solid var(--zed-border-color);
        border-radius: 12px;
        text-decoration: none;
        transition: box-shadow 0.2s ease;
        margin: 20px 0;
    }
    .demo-text {
        font-size: 18px;
        font-weight: 600;
        color: #000;
        padding: 0 20px;
    }
    
    .demo-icon {
        width: 28px;
        height: 28px;
        background-color: #f44336;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 14px;
        transition: background-color 0.2s ease;
    }

    .demo-button:hover {
        background-color: var(--zed-icon-color);
        border: 1px solid var(--zed-secondary);
    }

    .demo-button:hover .demo-icon {
        background-color: #d32f2f;
    }

    .tools-trade-icon{
        width: 10%;
    }
</style>

<section class="py-5">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="800">
            <h2 class="fw-bold">
                Tools for Trade of Essential Tools
            </h2>
            <div class="tools-res-divider" data-aos="fade-up" data-aos-duration="850" style="margin: 30px auto;"></div>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="gray-border p-4" data-aos="fade-up" data-aos-delay="800">
                    
                    <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up" data-aos-delay="800">
                        <h5 class="fw-bold mb-0" data-aos="fade-up" data-aos-delay="800">Economic Calendar</h5>
                        <img src="assets/images/tools-calander.png" class="tools-trade-icon" data-aos="fade-up" data-aos-delay="800">
                    </div>

                    <p class="fw-bold mb-1" data-aos="fade-up" data-aos-delay="800">Know first. Act fast.</p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="800">
                        Never miss an important economic event with up-to-date schedules and forecasts.
                    </p>

                    <a class="demo-button btn" data-aos="fade-up" data-aos-delay="800" href="economic-calender.php" title="Economic Calender">
                        <span class="demo-text">Get Started</span>
                        <span class="demo-icon">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="gray-border p-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up" data-aos-delay="800">
                        <h5 class="fw-bold mb-0" data-aos="fade-up" data-aos-delay="800">Pivot Points</h5>
                        <img src="assets/images/tools-valume.png" class="tools-trade-icon" data-aos="fade-up" data-aos-delay="800">
                    </div>

                    <p class="fw-bold mb-1" data-aos="fade-up" data-aos-delay="800">Cut through the noise</p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="800">
                        Use our accurate Pivot Points Calculator to help you find the next day pivot levels and the three main levels of support and resistance of any instrument.
                    </p>
                    
                    <a class="demo-button btn" data-aos="fade-up" data-aos-delay="800" href="pivot-point.php">
                        <span class="demo-text">Get Started</span>
                        <span class="demo-icon">→</span>
                    </a>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6">
                <div class="gray-border p-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up" data-aos-delay="800">
                        <h5 class="fw-bold mb-0" data-aos="fade-up" data-aos-delay="800">Currency Converter</h5>
                        <img src="assets/images/tools-desk-candle.png" class="tools-trade-icon" data-aos="fade-up" data-aos-delay="800">
                    </div>

                    <p class="fw-bold mb-1" data-aos="fade-up" data-aos-delay="800">Always world-class</p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="800">
                        For your business transaction, do you need to know the precise value of the Euro against the USD?
                    </p>

                    <a class="demo-button btn" data-aos="fade-up" data-aos-delay="800" href="currency-convertor.php" title="Currency Converter">
                        <span class="demo-text">Get Started</span>
                        <span class="demo-icon">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="gray-border p-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up" data-aos-delay="800">
                        <h5 class="fw-bold mb-0" data-aos="fade-up" data-aos-delay="800">Profit Calculation</h5>
                        <img src="assets/images/tools-message.png" class="tools-trade-icon" data-aos="fade-up" data-aos-delay="800">
                    </div>

                    <p class="fw-bold mb-1" data-aos="fade-up" data-aos-delay="800">Don't break a sweat</p>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="800">
                        Never take a trade until you've planned out every potential scenario. That's a golden rule for every professional investor.
                    </p>
                    
                    <a class="demo-button btn" data-aos="fade-up" data-aos-delay="800" href="profit-calculation.php">
                        <span class="demo-text">Get Started</span>
                        <span class="demo-icon">→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Tools of the Trade -->

<!-- Start Trading view Integration -->

<style>
    /* Styling for the red hero section */
    .hero-section {
        background-color: var(--zed-primary);
        border-radius: 0 50px 50px 0;
        width: 82%;
    }

    /* Styling for the white card inside the hero section */
    .trading-view-card {
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Styling for the gray traders gym section */
    .traders-gym-section {
        background-color: var(--zed-secondary);
        border-radius: 50px 0 0 50px;
        width: 82%;
        margin-left: 18%;
    }
    
    /* Styling for the custom connect button */
    .custom-button {
        background-color: var(--zed-primary);
        color: #fff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: #e60000;
        color: #fff;
    }
</style>

<main class="container-fluid p-0 pb-3 d-none">
    <!-- Trading View Integration Section -->
    <section class="hero-section text-white mb-5" data-aos="fade-up" data-aos-delay="800">
        <div class="container py-5">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="800">
                <!-- Left-hand side content -->
                <div class="col-12 col-md-8 text-center text-md-start mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="800">
                    <h2 class="h2" data-aos="fade-up" data-aos-delay="800">Trading View Integration</h2>
                    <p class="mt-3" data-aos="fade-up" data-aos-delay="800">Connect Your Zed Capital Account to Trading View and Trade directly on one of the world's leading charting platforms.</p>
                    <button class="btn btn-light btn-lg fw-bold mt-3 rounded-pill">Trade Now</button>
                </div>
                <!-- Right-hand side card -->
                <div class="col-12 col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="800">
                    <div class="trading-view-card p-4 text-center w-100 mx-auto" style="max-width: 400px;">
                        <div class="row">
                            <div class="col-4" data-aos="fade-up" data-aos-delay="800">
                                <img src="assets/images/trading-integration-bulb.png" alt="Zed Capital Logo" class="w-100">
                            </div>
                            <div class="col-8">
                                <h5 class="fw-bold text-black" data-aos="fade-up" data-aos-delay="800">Zed Capital</h5>
                                <!-- Star rating -->
                                <div class="d-flex justify-content-center my-2" data-aos="fade-up" data-aos-delay="800">
                                    <span class="text-warning h5">★★★★★</span>
                                </div>
                                <button class="btn custom-button btn-lg w-100" data-aos="fade-up" data-aos-delay="800">Connect</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Traders' Gym Section -->
<main class="container-fluid p-0 pt-3 d-none">    
    <section class="traders-gym-section text-white" data-aos="fade-up" data-aos-delay="800">
        <div class="container py-5">
            <div class="row align-items-end" data-aos="fade-up" data-aos-delay="800">
                <!-- Left-hand side image content -->
                <div class="col-12 col-md-6 text-end text-md-start mb-4 mb-md-0">
                    <div class="position-absolute" data-aos="fade-up" data-aos-delay="800">
                        <img src="assets/images/trader-gym-candle.png" alt="Candlestick chart" class="" style="margin: -430px 0 -150px 0; width: 300px;">
                    </div>
                </div>
                <!-- Right-hand side text content -->
                <div class="col-12 col-md-6 text-end text-md-end" data-aos="fade-up" data-aos-delay="800">
                    <h2 class="h2" data-aos="fade-up" data-aos-delay="800">Traders' Gym</h2>
                    <p class=" mt-3" data-aos="fade-up" data-aos-delay="800">Develop, backtest and refine your strategies on real historical data in a risk-free environment.</p>
                    <button class="btn btn-light btn-lg fw-bold mt-3 rounded-pill" data-aos="fade-up" data-aos-delay="800">Explore More</button>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Trading view Integration -->

<!-- Start Trading platform table view -->

<style>
    .card {
        border: 1px solid var(--zed-border-color);
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .nav-tabs .nav-link.active {
        font-weight: 600;
        border-bottom: 2px solid #777;
        background-color: var(--zed-border-color);
        color: var(--zed-dark-text) !important;
    }

    .table td, .table th {
        vertical-align: middle;
    }

    .price-down { color: var(--zed-primary) !important; }
    .price-up { color: var(--zed-success) !important; }

    .trading-btn{
        border-radius: 25px;
        color: var(--zed-dark-text);
        background-color: var(--zed-banner-bg-end);
        border: 0 solid;
        padding: 5px 15px;
    }

    .trading-btn:hover{
        color: var(--zed-secondary);
    }
</style>

<div class="container py-4 mt-5">
    <div class="row g-4">
        <!-- Left Section -->
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="800">
            <div class="card shadow-sm p-3">
                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" id="marketTabs" role="tablist">
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button">Popular</button>
                    </li>
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray" id="commodities-tab" data-bs-toggle="tab" data-bs-target="#commodities" type="button">Commodities</button>
                    </li>
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button">Crypto</button>
                    </li>
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex" type="button">Forex</button>
                    </li>
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray" id="stocks-tab" data-bs-toggle="tab" data-bs-target="#stocks" type="button">Stocks</button>
                    </li>
                    <li class="nav-item py-3" role="presentation" data-aos="fade-up" data-aos-delay="800">
                        <button class="nav-link text-gray" id="indices-tab" data-bs-toggle="tab" data-bs-target="#indices" type="button">Indices</button>
                    </li>
                </ul>

                <!-- Table -->
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="800">
                    <table class="table align-middle">
                        <thead>
                            <tr data-aos="fade-up" data-aos-delay="800">
                                <td class="text-gray">Instrument</td>
                                <td class="text-gray">Buy</td>
                                <td class="text-gray">Spread</td>
                                <td class="text-gray">Daily Change</td>
                                <td class="text-gray"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-aos="fade-up" data-aos-delay="800">
                                <td class="py-4">
                                    <img src="assets/images/cryptologos/xrp.png?v=040" width="20" alt="XRPUSD"> XRPUSD
                                </td>
                                <td class="price-up">3.0578</td>
                                <td class="py-4">3.8</td>
                                <td class="price-down">-6.67%</td>
                                <td class="py-4"><button class="trading-btn">Trade</button></td>
                            </tr>
                            <tr data-aos="fade-up" data-aos-delay="800">
                                <td class="py-4">
                                    <img src="assets/images/cryptologos/bitcoin.png?v=040" width="20" alt="BTCUSD"> BTCUSD
                                </td>
                                <td class="price-down">118305.04</td>
                                <td class="py-4">15.0</td>
                                <td class="price-down">-4.11%</td>
                                <td class="py-4"><button class="trading-btn">Trade</button></td>
                            </tr>
                            <tr data-aos="fade-up" data-aos-delay="800">
                                <td class="py-4">
                                    <img src="assets/images/cryptologos/litecoin.png?v=040" width="20" alt="LTCUSD"> LTCUSD
                                </td>
                                <td class="price-up">121.28</td>
                                <td class="py-4">5.0</td>
                                <td class="price-down">-7.39%</td>
                                <td class="py-4"><button class="trading-btn">Trade</button></td>
                            </tr>
                            <tr class="d-none" data-aos="fade-up" data-aos-delay="800">
                                <td class="py-4">
                                    <img src="assets/images/cryptologos/ethereum.png?v=040" width="20" alt="ETHUSD"> ETHUSD
                                </td>
                                <td class="price-up">4493.3</td>
                                <td class="py-4">5.7</td>
                                <td class="price-down">-5.48%</td>
                                <td class="py-4"><button class="trading-btn">Trade</button></td>
                            </tr>
                            <tr class="d-none" data-aos="fade-up" data-aos-delay="800">
                                <td class="py-4">
                                    <img src="assets/images/cryptologos/bnb.png?v=040" width="20" alt="BNBUSD"> BNBUSD
                                </td>
                                <td class="price-up">824.57</td>
                                <td class="py-4">3.7</td>
                                <td class="price-down">-2.80%</td>
                                <td class="py-4">
                                    <button class="trading-btn">Trade</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="small text-muted mt-1" data-aos="fade-up" data-aos-delay="800">
                    Prices are indicative only. Live prices are only available for active traders. The instruments shown are for indication purposes only and are CFDs (contracts for difference) not physical instruments.
                </p>
            </div>
        </div>

        <!-- Right Section -->
        <div class="col-lg-5">
            <div class="card p-3 mb-4 p-5">
                <div class="mb-5">
                    <div class="position-absolute w-100 text-end" data-aos="fade-up" data-aos-delay="800">
                        <img src="assets/images/trading-platform.png" alt="Candlestick chart" class="" style="margin: 0 100px 0 0; width: 100px;">
                    </div>
                    <h3 class="fw-bold mb-4" data-aos="fade-up" data-aos-delay="800">Trading Platforms</h3>
                    <p class="mt-4 mb-0" data-aos="fade-up" data-aos-delay="800">
                        <strong>Meta Trader 4/5:</strong> 
                    </p>
                    <p data-aos="fade-up" data-aos-delay="800">
                        <span class="text-gray">Popular platforms <br>
                            offering comprehensive trading tools, <br>
                            indicators, and automated trading capabilities.
                        </span>
                    </p>
                    <p class="m-0" data-aos="fade-up" data-aos-delay="800">
                        <strong>cTrader:</strong> 
                    </p>
                    <p data-aos="fade-up" data-aos-delay="800">
                        <span class="text-gray">
                            Known for its intuitive interface and advanced charting tools.
                        </span>
                    </p>
                    <p class="m-0" data-aos="fade-up" data-aos-delay="800">
                        <strong>NinjaTrader:</strong> 
                    </p>
                    <p data-aos="fade-up" data-aos-delay="800">
                        <span class="text-gray">
                            Offers advanced charting, back testing, and trade simulation.
                        </span>
                    </p>
                </div>

                <div class="d-none">
                    <div class="position-absolute w-100 text-end" data-aos="fade-up" data-aos-delay="800">
                        <img src="assets/images/trading-economic-calander.png" alt="Candlestick chart" class="" style="margin: -87px 30px 0 0; width: 200px;">
                    </div>
                    <h3 class="fw-bold mb-4 w-75" data-aos="fade-up" data-aos-delay="800">News and Economic Calendars</h3>
                    <p class="m-0" data-aos="fade-up" data-aos-delay="800"><strong>Forex Factory:</strong> 
                        <span class="text-gray">
                            Offers an economic calendar, market news, and forums for trader discussions.
                        </span>
                    </p>
                    <p class="m-0" data-aos="fade-up" data-aos-delay="800"><strong>Investing.com:</strong> 
                        <span class="text-gray">
                            Provides real-time news, analysis, economic calendar, and customizable alerts.
                        </span>
                    </p>
                    <p class="m-0" data-aos="fade-up" data-aos-delay="800"><strong>Bloomberg:</strong> 
                        <span class="text-gray">
                            Comprehensive financial news and analysis platform.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Trading platform table view -->

<style>
    .tools-resource-overview img{
        width: 130px;
        height: auto;
    }

</style>

<section class="tools-resource-overview py-5">
    <div class="container">
        <div class="row g-4">
        
            <!-- Card 1 Trading Platforms -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Trading Platforms</h4>
                            <p class="m-0">
                                <strong>Meta Trader 4/5:</strong> 
                                <span class="text-gray">platforms offering comprehensive trading tools, indicators, and automated trading capabilities.</span>
                            </p>
                        </div>
                        <img src="assets/images/trading-platform.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>cTrader:</strong> 
                            <span class="text-gray">"Known for its intuitive interface and advanced charting tools.</span>
                        </p>
                        <p class="m-0">
                            <strong>NinjaTrader:</strong> 
                            <span class="text-gray">"Offers advanced charting, back testing, and trade simulation.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 Charting and Analysis Tools -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Charting and Analysis Tools</h4>
                            <p class="m-0">
                                <strong>TradingView:</strong> 
                                <span class="text-gray">"Web-based platform with powerful charting tools, social trading features, and a wide range of technical indicators. </span>
                            </p>
                        </div>
                        <img src="assets/images/charting-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>MetaTrader Charts:</strong> 
                            <span class="text-gray">"Integrated into MT4/MT5 platforms, providing customizable charting and technical analysis tools.</span>
                        </p>
                        <p class="m-0">
                            <strong>Thinkorswim:</strong> 
                            <span class="text-gray">"Provides advanced charting, technical analysis tools, and paper trading.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 News and Economic Calendars -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">News and Economic Calendars</h4>
                            <p class="m-0">
                                <strong>Forex Factory:</strong> 
                                <span class="text-gray">"Offers an economic calendar, market news, and forums for trader discussions.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/news-calender.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Investing.com:</strong> 
                            <span class="text-gray">"Provides real-time news, analysis, economic calendar, and customizable alerts.</span>
                        </p>
                        <p class="m-0">
                            <strong>Bloomberg:</strong> 
                            <span class="text-gray">"Comprehensive financial news and analysis platform.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 Educational Resources -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Educational Resources</h4>
                            <p class="m-0">
                                <strong>Babypips:</strong> 
                                <span class="text-gray">"Offers a comprehensive beginner's guide to forex trading, educational articles, and a community forum. </span>
                            </p>
                            
                        </div>
                        <img src="assets/images/education-resources.png" alt="Book Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Investopedia:</strong> 
                            <span class="text-gray">"Provides articles, tutorials, and a dictionary of financial terms relevant to forex trading.</span>
                        </p>
                        <p class="m-0">
                            <strong>Trading courses:</strong> 
                            <span class="text-gray">"Various online platforms offer courses on forex trading, technical analysis, and trading strategies. </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 5 Risk Management Tools -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Risk Management Tools</h4>
                            <p class="m-0">
                                <strong>Stop Loss/Take Profit Orders:</strong> 
                                <span class="text-gray">"Automated orders to limit losses and secure profits.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/risk-management.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Position Size Calculators:</strong> 
                            <span class="text-gray">"Tools to determine the appropriate position size based on risk tolerance and account size.</span>
                        </p>
                        <p class="m-0">
                            <strong>Volatility Indicators:</strong> 
                            <span class="text-gray">"Help gauge market volatility and adjust trading strategies accordingly.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 6 Algorithmic Trading Tools -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Algorithmic Trading Tools</h4>
                            <p class="m-0">
                                <strong>Expert Advisors (EAs):</strong> 
                                <span class="text-gray">"Automated trading systems developed within MT4/MT5 platforms.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/charting-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Algorithmic Trading Platforms:</strong> 
                            <span class="text-gray">"Tools like QuantConnect or AlgoTrader for developing and deploying custom trading algorithms.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 7 Technical Analysis Software -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Technical Analysis Software</h4>
                            <p class="m-0">
                                <strong>Autochartist:</strong> 
                                <span class="text-gray">"Provides automated technical analysis, pattern recognition, and trading signals.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/technocal-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Trading Central:</strong> 
                            <span class="text-gray">"Offers technical analysis and trading signals based on chart patterns and indicators.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 8 Community and Forums -->
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="border rounded-4 p-5">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-5">Community and Forums</h4>
                            <p class="m-0">
                                <strong>Expert Advisors (EAs):</strong> 
                                <span class="text-gray">"Automated trading systems developed within MT4/MT5 platforms.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/community-forum.png" alt="Book Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p class="m-0">
                            <strong>Algorithmic Trading Platforms:</strong> 
                            <span class="text-gray">"Tools like QuantConnect or AlgoTrader for developing and deploying custom trading algorithms.</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .start-box {
        border-radius: 12px;
        border: 1px solid #e5e5e5;
        padding: 30px;
        background-color: #fff;
    }

    .black-box {
        background-color: #000;
        color: #fff;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 20px;
    }

    .black-box h4 {
        font-weight: 700;
        margin-bottom: 0;
    }

    .black-box p {
        margin: 0;
        font-weight: 500;
    }
</style>

<section class="mb-5 py-2">
    <div class="container py-5">
        <div class="start-box" data-aos="fade-up" data-aos-duration="800">
            <div class="black-box d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="mb-3 mb-md-0 w-50">
                    <h4>Tools & <br>Resources</h4>
                </div>
                <div>
                    <p class="m-0">
                        When using these tools and resources, it's essential to conduct thorough research, understand the risks involved in forex trading, and develop a sound trading strategy tailored to your financial goals and risk tolerance.
                    </p>
                </div>
            </div>

            <div class="px-4" data-aos="fade-up" data-aos-delay="500">
                <p class="text-muted mb-0">
                    These tools and resources are essential for traders to develop their skills, make informed decisions, manage risks effectively, and navigate the dynamic Forex market. Depending on individual trading styles and preferences, traders may use a combination of these tools to enhance their trading performance and achieve their financial goals.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-delay="800">
    <img src="assets/images/diamonds/common-2-diamonds.png" alt="Corner Image" class="position-absolute bottom-30 end-0 float-y" style="width: 150px;height: 120px;margin: -80px 150px;">
</div>

<?php
include_once ('elements/footer.php');
?>