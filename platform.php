<?php
include_once('elements/header.php');
?>

<style>
    .platform-header {
        padding: 80px 0;
        /* Adjust padding as needed */
        background-image: url('assets/images/background/stock-chart-showing-upward-trend-growth.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 65vh;
        /* color: white; */
        margin-top: 120px;
    }

    .red-bar {
        background-color: var(--zed-primary);
        color: white;
        padding: 50px 0;
    }

    .platform-icon-bg {
        background-color: #ffffffa6;
        padding: 20px 30px;
        opacity: 0.9;
        display: flex;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
    }

    .meta-trader-logo-container {
        /* Adjust spacing and alignment for the logo and text */
        margin-top: 20px;
    }

    .set-logo-icon {
        margin-top: -175px;
    }

    .arrow {
        margin-top: -1.2rem;
    }

    .why-social-media {
        border: 1px solid var(--zed-border-color);
        border-radius: 15px;
    }

    .gray-border {
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .feature-access {
        padding: 100px 0;
    }

    .access-column,
    .mobile-column {
        padding: 3rem 0 3rem 3rem;
        font-size: 0.9rem;
    }

    .divider {
        width: 3px;
        background-color: #000;
        margin: 0 18px;
    }

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

    .icon-section {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 15px;
    }

    @media (max-width: 576px) {
        .icon-section {
            justify-content: center;
            flex-wrap: wrap;
        }
    }

    .feature-list {
        font-size: 0.9rem;
    }

    .feature-list-extra {
        font-weight: 500;
        color: #000 !important;
        margin-bottom: 0;
        padding-right: 3rem;
    }

    ul.dash-list {
        list-style: none;
        /* Remove default bullets */
        padding-left: 0;
        /* Remove default left padding */
        margin: 0;
        /* Optional: reset margin */
    }

    ul.dash-list li::before {
        content: "-";
        /* Add dash */
        margin-right: 5px;
        /* Space between dash and text */
    }

    .start-box p {
        font-size: 0.9rem;
    }

    .desktop-view {
        display: contents;
    }

    .mobile-view {
        display: none;
    }

    .why-trade-mt5 {
        margin-top: -100px;
        z-index: 1;
    }

    .download-any-trade{
        margin-top: -25px;
        z-index: 1;
        font-size: 1rem;
    }
    .why-trade-mt5-bottom {
        z-index: 1;
    }

    .how-to-start-mt5-head {
        width: 75%;
    }

    .start-box p {
        width: 50%;
    }

    .android-icon {
        margin: 150px 80px 0 0;
        width: 75px;
    }

    .apple-icon {
        margin: 250px 200px 0 0;
        width: 75px;
    }

    @media (max-width: 767.9px) {

        .set-diamond-image{
            display: none !important;
        }

        .platform-header {
            padding: 60px 0;
            min-height: 60vh;
        }

        .desktop-view {
            display: none;
        }

        .mobile-view {
            display: block;
        }

        .platform-icon-bg {
            padding: 23px 20px !important;
            max-height: 75px !important;
            display: inline-block !important;
        }

        .why-trade-mt5 {
            margin-top: -250px !important;
        }

        .access-column,
        .mobile-column {
            padding: 2rem 0 2rem 2rem;
        }

        .start-box {
            padding: 20px;
        }

        .how-to-start-mt5-head {
            width: 100%;
            text-align: center;
        }

        .start-box use-mt5-mq {
            text-align: center;
        }

        .start-box p {
            width: 100%;
        }

        .android-icon {
            margin: -250px -82px 0 0;
            width: 75px;
        }

        .apple-icon {
            margin: 330px 0 0 0;
            width: 75px;
        }

        .download-any-trade p{
            margin-top: -100px;
            text-align: center;
        }
    }

</style>

<section class="platform-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 text-md-start text-center mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="800">
                <h1 class="display-6 fw-bold mb-3">Top Broker Platforms for Meta Trader 5</h1>
                <p class="text-gray mb-4">
                    Trade with precision. Operate with confidence.
                </p>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start meta-trader-logo-container">
                    <img src="assets/images/meta-trader-5-logo.png" alt="Meta Trader 5 Logo" class="img-fluid me-2" style="width: 300px;" data-aos="fade-up" data-aos-duration="800">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/meta-trader-laptop-background.png" alt="Meta Trader 5 Platform Mockup" class="img-fluid d-none d-lg-block">

                <div class="position-relative set-diamond-image">
                    <img src="assets/images/diamonds/platform-2-diamonds.png" alt="Corner Image" class="position-absolute end-0 bottom-0 float-y" style="width: 120px; height: 70px; margin: -85px -50px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="red-bar">
    <div class="container">
        <div class="row d-none">
            <div class="why-trade-mt5">
                <p class="text-black fw-bold">Why Trade on the MT5?</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 d-flex gap-3 mb-3 mb-md-0 set-logo-icon">

                <div class="desktop-view">
                    <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="300">
                        <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Window Terminal">
                            <img src="assets/images/win-logo-black.png" alt="Windows" style="width: 40px;">
                        </a>
                    </div>
                    <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="500">
                        <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Android App">
                            <img src="assets/images/android-logo-black.png" alt="Android" style="width: 40px;">
                        </a>
                    </div>
                    <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="700">
                        <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Apple App">
                            <img src="assets/images/apple-logo-black.png" alt="Apple" style="width: 40px;">
                        </a>
                    </div>
                    <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="900">
                        <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Web Trader">
                            <img src="assets/images/desktop-logo-black.png" alt="Desktop" style="width: 40px;">
                        </a>
                    </div>
                </div>

                <div class="mobile-view">
                    <div class="row">
                        <div class="col-3">
                            <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="300">
                                <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Window Terminal">
                                    <img src="assets/images/win-logo-black.png" alt="Windows" style="width: 40px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="500">
                                <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Android App">
                                    <img src="assets/images/android-logo-black.png" alt="Android" style="width: 40px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="700">
                                <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Apple App">
                                    <img src="assets/images/apple-logo-black.png" alt="Apple" style="width: 40px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="platform-icon-bg why-social-media" data-aos="fade-right" data-aos-duration="900">
                                <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Web Trader">
                                    <img src="assets/images/desktop-logo-black.png" alt="Desktop" style="width: 40px;">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <span class="d-none me-2 arrow">&#9658;</span>
                <p class="mb-0 text-white small">
                    Zed Capital International Ltd (licensed and supervised by the FSC, Mauritius) provides a unified, multi-device trading environment engineered for stability, speed, and security. Execute, analyse, and manage risk seamlessly across desktop, web, and mobile.
                </p>

                <div class="position-relative set-diamond-image">
                    <img src="assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute start-0 bottom-0 float-y" style="width: 80px; height: 50px; margin: -140px -50px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="download-any-trade wave-container">
                <p class="text-white fw-bold mb-0">
                    Download Any Trading Platform 
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .highlight-line {
        width: 60px;
        height: 8px;
        background-color: red;
        margin: 2.2rem 0;
    }

    .section-title {
        font-weight: 700;
    }

    .section-subtitle {
        font-size: 1rem;
        color: #777;
    }

    .section-note {
        font-style: italic;
        margin-top: 2rem;
    }

    .mt5-image {
        max-width: 100%;
        height: auto;
    }
</style>

<div class="container py-5">
    <div class="row align-items-center">
        <!-- Left Text Content -->
        <div class="col-lg-5 mb-4" data-aos="fade-up" data-aos-duration="100">
            <h2 class="h2" data-aos="fade-up" data-aos-duration="250">
                What sets our platform suite apart
            </h2>
            <div class="highlight-line" data-aos="fade-up" data-aos-duration="400"></div>
            <p class="" data-aos="fade-up" data-aos-duration="650">
                <b>Institutional-grade connectivity:</b> Low-latency routing and resilient uptime for consistent execution.
            </p>
            <p class="" data-aos="fade-up" data-aos-duration="800">
                <b>Security by default:</b> Strong encryption, secure authentication, and session controls.
            </p>
            <p class="" data-aos="fade-up" data-aos-duration="800">
                <b>Professional toolset:</b> Advanced order types, Depth of Market, and one-click trading.
            </p>
            <p class="" data-aos="fade-up" data-aos-duration="800">
                <b>Analytical depth:</b> multi-timeframe charting, rich indicators, and custom templates.
            </p>
            <p class="" data-aos="fade-up" data-aos-duration="800">
                <b>True mobility:</b> Synchronized watchlists and preferences across Windows/Mac, Web Trader, and iOS/Android.
            </p>

            <p data-aos="fade-up" data-aos-duration="800">
                Product availability, leverage, and margin profiles depend on your region and account classification.
            </p>
        </div>

        <!-- Right Image -->
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/images/experience-the-power.png" alt="MetaTrader 5 Interface" class="mt5-image">
        </div>
    </div>
</div>

<?php
$featureIconTitle = "Why trade on MetaTrader 5 with Zed Capital?";

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
    ]
];

include_once ('elements/feature-trading-icons.php');
?>

<style>
    .platform-feature-box {
        background-color: var(--zed-backgound-color);
        /* red background */
        /* color: black; */
        border-radius: 20px;
        padding: 30px;
        text-align: left;
    }

    /* .platform-feature-box ul {
        padding-left: 1.2rem;
    } */

    .platform-icons img {
        height: 120px;
    }

    .platform-android-icon {
        margin-top: -50px;
        margin-left: 50px;
    }

    .platform-apple-icon {
        margin-left: 100px;
    }

    .arrow-list {
        list-style: none; /* Remove default bullets */
        padding-left: 0;  /* Remove extra padding */
    }

    .arrow-list li {
        position: relative;
        padding: 10px 0 0 20px; /* Space for the arrow */
    }

    .arrow-list li::before {
        content: ">"; /* The arrow symbol */
        position: absolute;
        left: 0;
        color: var(--zed-primary);
    }

    @media (max-width: 767.98px) {

        .platform-icons {
            justify-content: center !important;
            margin-top: 20px;
        }

        .mt5-padding{
            padding: 0 !important;
        }

        .mt5-right-padding{
            padding: 3rem 0 !important;
        }
    }
</style>

<div class="container d-none">
    <div class="row py-5 pb-0 align-items-start">
        <!-- Left Box -->
        <div class="col-md-6 px-5 mt5-padding">
            <div class="platform-feature-box">
                <div class="">
                    <h5 class="fw-bold text-black mb-3">MT5 platform features:</h5>
                    <ul class="mb-0 text-gray arrow-list">
                        <li>Depth, of market display</li>
                        <li>Six pending stop order types</li>
                        <li>Improved strategy tester for algorithmic trading and expert advisors (EAs)</li>
                        <li>In-built market of trading systems and apps</li>
                        <li>Trading alerts on mobile devices</li>
                        <li>Improved precision through trading robots for scalpers</li>
                        <li>Forex Signals and Copy Trading</li>
                        <li>21 time frames and eight order types</li>
                    </ul>
                </div>

                <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="400">
                    <img src="assets/images/anroid-3x.png" alt="Corner Image" class="position-absolute end-0 bottom-0" style="margin: -125px 20px">
                </div>
            </div>

            <!-- Platform Icons -->
            <div class="d-flex platform-icons mt-4 set-diamond-image" data-aos="fade-up" data-aos-duration="900">
                <img src="assets/images/apple-3x.png" class="platform-apple-icon" alt="Apple">
            </div>
        </div>

        <!-- Right Text -->
        <div class="col-md-6 px-5 mt5-right-padding">
            <div class="px-2">
                <p class="text-gray">
                    MetaTrader 5 (MT5) is an advanced multi-asset platform specifically designed for Forex and CFD trading.
                    Following the success of MetaTrader 4 (MT4), MetaQuotes created MetaTrader 5 to cater for a more enhanced
                    trading experience. The platform provides a wider range of market analysis tools and offers access to
                    additional exchange markets.
                </p>
                <p class="text-gray">
                    MT5 includes the necessary tools required to conduct fundamental and technical analysis, along with the
                    option of developing custom indicators. The platform is fully equipped for algorithmic trading and copy
                    trading, making it suitable for traders using Expert Advisors (EAs).
                </p>
                <p class="text-gray">
                    In addition to its functionality, MT5 provides a high level of flexibility. Zed Capital offers versions
                    for alternate operating systems including Mac OS and Web trader, which is a web platform that is accessible
                    through all popular internet browsers. You can also access your trading account via portable devices using
                    FP Markets mobile versions for IOS (iPhone and iPad) and Android.
                </p>

            </div>
        </div>
    </div>
</div>

<style>
    .mt-5-trading-background {
        background-image: url('assets/images/background/mt-5-trading-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 100px 0;
        color: #fff;
    }

    .feature-heading {
        font-size: 2rem;
        font-weight: 700;
    }

    .mt-5-trading-feature-box {
        margin-bottom: 30px;
    }

    .tablet-img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767.98px) {
        .tablet-col {
            text-align: center;
            margin-top: 40px;
        }

        .mt-5-trading-background{
            padding: 0 !important;
            background-color: #ed3b2a;
            background-size: auto !important;
        }

        .mt-5-trading-background .heading{
            padding: 3rem 0 0 0!important;
        }
    }
</style>

<section class="mt-5-trading-background">
    <div class="container">
        <div class="row align-items-center heading p-5 pb-0">
            <!-- Text Column -->
            <div class="col-lg-7">
                <h2 class="feature-heading mb-5">MetaTrader 5 trading with Zed Capital</h2>
                <div class="row">
                    <div class="col-md-6 mt-5-trading-feature-box mb-5 ">
                        <h5 class="fw-bold">Ultra low spreads</h5>
                        <p class="mb-0">Zed Capital consistently offers some of the tightest spreads in the industry. Trade from 0.0 pips on major currency pairs.</p>
                    </div>
                    <div class="col-md-6 mt-5-trading-feature-box mb-5">
                        <h5 class="fw-bold">Fast execution</h5>
                        <p class="mb-0">Award-winning low latency trade execution delivered from our Equinix NY4 facility server cluster.</p>
                    </div>
                    <div class="col-md-6 mt-5-trading-feature-box">
                        <h5 class="fw-bold">Raw pricing</h5>
                        <p class="mb-0">Access institutional-grade liquidity with no price manipulation.</p>
                    </div>
                    <div class="col-md-6 mt-5-trading-feature-box">
                        <h5 class="fw-bold">Zero restrictions</h5>
                        <p class="mb-0">Trade with conditions optimised for scalping and Expert Advisors (EAs) — no minimum distance between orders and the current price.</p>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="col-lg-5 tablet-col">
                
            </div>
        </div>
    </div>
</section>

<style>
    @media (max-width: 767.98px) {
        .feature-access {
            padding: 50px 0 !important;
        }
    }
</style>

<section class="feature-access d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="800">
                <div class="row m-0 gray-border">
                    <div class="col access-column">
                        <div class="feature-box row ">
                            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="800">
                                <h3 class="fw-bold mb-0 text-start">MT5</h3>
                                <h3 class="fw-bold pb-4 text-start">Features</h3>
                                <ul class="feature-list dash-list list-unstyled m-0 text-gray">
                                    <li class="text-start">Ability to Trade via a Web Browser</li>
                                    <li class="text-start">One Click Trading</li>
                                    <li class="text-start">Supports All Types of Trading Orders</li>
                                    <li class="text-start">Editable Properties of Graphical Objects</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-end set-diamond-image" data-aos="fade-up" data-aos-duration="800">
                                <img src="assets\images\half-tab.png" alt="MT5 Screenshot" class="img-responsive w-100">
                            </div>
                            <div class="col-sm-12 col-12 pt-4">
                                <ul class="feature-list dash-list feature-list-extra list-unstyled text-gray" data-aos="fade-up" data-aos-duration="800">
                                    <li class="text-start">Over 1000 Instruments, including Stock CFDs, Stock Indices CFDs, CFDs on Forex, CFDs on Precious Metals, and CFDs on Energies</li>
                                    <li class="text-start">Editable Properties of Graphical Objects</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="800">
                <div class="row m-0 gray-border">
                    <div class="col-12 p-0" data-aos="fade-up" data-aos-duration="800">

                        <div class="access-column d-flex flex-column flex-md-row align-items-start align-items-md-center">
                            <div class="mb-3 mb-md-0">
                                <h3 class="fw-bold mb-0">How to Access the MT5</h3>
                            </div>
                            <div class="divider d-none d-md-block" style="height: 70%;"></div>
                            <ul class="m-0 feature-list-extra">
                                <li>Access the terminal by clicking.</li>
                                <li>Enter your real or demo account login data.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-7 pb-3 px-0">
                        <p class="mobile-column text-gray pb-4 pt-0 m-0">
                            With no additional downloads required, you can use the full practicality of the MT5 for instant online trading on both demo and trading accounts. The complete trading functionality of the MT5 is based on its compatibility with MetaTrader 5. This allows one-click operations for opening and closing trades, setting stops and entry limits, placing direct orders,
                        </p>
                    </div>
                    <div class="col-sm-5 p-0 set-diamond-image" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/images/half-mobile.png" class="" style="height: 278px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .mt-5-features {
        padding: 10px 0;
        background-color: var(--zed-backgound-color);
    }

    .pricing-box a {
        color: var(--zed-primary);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        margin: 10px 0;
    }

    .pricing-box a i {
        margin-left: 6px;
        font-size: 1.5rem;
    }

    .pricing-section {
        padding: 60px 0;
    }

    .a-link-move-icon:hover i{
        transition: transform 0.2s ease;
        transform: translateX(10px);
    }

    @media (max-width: 767.98px) {
        .learning-img {
            width: 100% !important;
        }

        .learning-heading {
            font-size: 2rem;
        }

        .learning-text {
            width: 100% !important;
        }

        .zed-academy-header {
            padding: 30px 0 !important;
        }
    }
</style>

<section class="mt-5-features">
    <div class="container">
        <div class="pricing-section">
            <h2 class="h2 fw-bold mb-5">MetaTrader 5 Key Features</h2>
            <div class="highlight-line"></div>

            <div class="row">
                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-gray" style="width: 90%;">
                        Unlike MT4 which was specifically designed for Forex trading, MT5 is a multi-asset trading platform which allows users to trade a variety of asset classes including exchange instruments and futures.
                    </p>

                    <a href="#" class="a-link-move-icon">
                        Multi-asset Trading Platform
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>

                    <p class="mt-4 text-gray" style="width: 85%;">
                        MetaTrader 5 provides an extensive range of technical indicators and trading tools that can be used to conduct technical analysis. Access 80+ technical indicators and more than 40 analytical objects through a highly
                    </p>
                    <a href="#" class="a-link-move-icon">
                        Powerful Technical Analysis Tools 
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>

                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-gray" style="width: 90%;">
                        Staying up to date with the latest market news and relevant macroeconomic data releases is considered important to modern day traders.
                    </p>
                    <a href="#" class="a-link-move-icon">
                        Real-time Market News & Analysis 
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>

                    <p class="mt-4 text-gray" style="width: 85%;">
                        Risk management is an important concept regarding any financial transactions and an essential part of any trading plan. MetaTrader 5 offers an extensive range of risk management tools including six types of pending orders.
                    </p>

                    <a href="#" class="a-link-move-icon">
                        Risk Management 
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* .highlight-line {
        width: 50px;
        height: 8px;
        background-color: var(--zed-light-bg);
        margin: 2rem 0;
    } */

    .open-account-btn {
        padding: 15px 25px;
        color: var(--zed-dark-text);
        border-radius: 25px;
        font-size: 1.2rem;
        background-color: var(--zed-light-bg);
        text-decoration: none;
        font-weight: 600;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    }

    .how-can-start-zed{
        padding: 30px 0;
        background-color: var(--zed-primary);
    }

    .card-scene {
        opacity: 0; /* hidden initially */
        transform: translateY(50px); /* small offset so it's not visible */
        transition: opacity 0.3s ease-out, transform 0.3s ease-out;
    }

    .card-scene.animate {
        -webkit-animation: cardAppear 1.4s forwards;
        animation: cardAppear 1.4s forwards;
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes cardAppear {
        0% {
            transform: rotate3d(0, 0, 1, 15deg) translate3d(0, -100vh, 0);
        }
        30% {
            transform: rotate3d(0, 0, 0, 0deg) translate3d(0, 0, 0);
        }
        65% {
            transform: rotate3d(0, 0, 0, 0deg) translate3d(0, 0, 0) scale3d(1, 1, 1);
        }
        80% {
            transform: rotate3d(0, 0, 1, -5deg) scale3d(1.05, 1.05, 1);
        }
    }

    @-webkit-keyframes cardAppear {
        0% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg) translate3d(0, -100vh, 0);
        }
        30% {
            -webkit-transform: rotate3d(0, 0, 0, 0deg) translate3d(0, 0, 0);
        }
        65% {
            -webkit-transform: rotate3d(0, 0, 0, 0deg) translate3d(0, 0, 0) scale3d(1, 1, 1);
        }
        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg) scale3d(1.05, 1.05, 1);
        }
    }

</style>

<section class="how-can-start-zed">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Content -->
      <div class="col-lg-6 text-white">
        <h2 class="fw-bold">
          How can I start trading on MT5 <br> with Zed Capital?
        </h2>
        
        <div class="highlight-line mb-5"></div>

        <a href="#" class="open-account-btn my-5">
          Open account
        </a>

        <p class="mt-5 small">
          System Requirements: MT5 is available on Windows 7 or higher. 
          It is also supported on Mac OSX.
        </p>
      </div>
      
      <!-- Right Content -->
      <div class="col-lg-6 p-4">
        <div class="bg-white rounded-5 shadow-sm m-5 p-5 card-scene">
          <h5 class="fw-bold mb-3 mx-3">
            You can download and install MetaTrader 5 in a few simple steps
          </h5>
          <ul class="list-unstyled mb-0 text-gray mx-3">
            <li>✔ <span class="mx-2">Register and open a live trading account</span></li>
            <li>✔ <span class="mx-2">Receive login credentials via email</span></li>
            <li>✔ <span class="mx-2">Log in to client portal</span></li>
            <li>✔ <span class="mx-2">Select and download the appropriate MT5 version for your operating system</span></li>
            <li>✔ <span class="mx-2">Install MT5, log in, and start trading</span></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll(".card-scene");

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                    obs.unobserve(entry.target); // run once
                }
            });
        }, {
            threshold: 0.2 // trigger when 20% of card is visible
        });

        cards.forEach(card => observer.observe(card));
    });
</script>
<?php
include_once('elements/footer.php');
?>