<?php
include_once('elements/header.php');
?>
<style>
    @media (max-width: 767.9px) {
        .header-banner h1.fw-bold {
            font-size: 2rem;
        }

        .header-banner .translate-middle-x {
            width: 75%;
        }

        #support_benefit {
            padding: 40px 0 !important;
        }

        .set-diamond-image {
            display: none;
        }
    }
</style>

<!-- ✅ Start Header Banner with Text Overlay -->
<?php
if (false) {
?>
    <header class="header-banner d-flex justify-content-center align-items-center text-center">
        <!-- Text at Top -->
        <div class="position-absolute top-0 start-50 translate-middle-x" style="margin-top: 5%;">
            <h1 class="text-white text-center fw-bold">
                At <span style="color: red;">ZED CAPITAL</span>, client fund safety is our top priority
            </h1>
        </div>

        <!-- Button at Bottom -->
        <div class="position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 5%;">
            <button class="btn btn-danger px-4 py-2">Get Started</button>
        </div>
    </header>
<?php
} else if (true) {
?>
    <div id="indexCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="0" class="d-none"></button>
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="1" class="active"></button>
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item d-none">
                <img src="assets/images/slider/Zed-Capital-1.png" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item active">
                <img src="assets/images/slider/Zed-Capital-2.png" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/Zed-Capital-3.png" class="d-block w-100" alt="Slide 2">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#indexCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#indexCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
<?php
} else {
?>
    <header class="header-banner position-relative d-flex justify-content-center align-items-center text-center">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="position-absolute w-100 object-fit-cover">
            <source src="assets/video/home-banner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay (optional dark shade for readability) -->
        <div class="position-absolute top-0 start-0 w-100 bg-dark opacity-50"></div>

        <!-- Text at Top -->
        <div class="position-absolute top-0 start-50 translate-middle-x mt-5">
            <h1 class="text-white fw-bold">
                At <span style="color: red;">ZED CAPITAL</span>, client fund safety is our top priority
            </h1>
        </div>

        <!-- Button at Bottom -->
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
            <button class="btn btn-danger px-4 py-2">Get Started</button>
        </div>
    </header>
<?php
}
?>
<!-- ✅ End Header Banner -->

<!-- Start Support Benefit -->
<style>
    #support_benefit {
        padding: 80px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #support_benefit img {
        width: 100px;
        margin-left: -15px;
        padding-bottom: 15px;
    }

    #support_benefit .img-div {
        min-height: 115px;
    }

    #support_benefit p {
        padding-right: 5px;
    }

    @media (max-width: 767.9px) {
        #account_type {
            padding: 40px 0 !important;
        }

        #support_benefit p {
            padding-right: 0;
        }
    }
</style>

<div id="support_benefit">
    <div class="container px-4">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4" data-aos="fade-up" data-aos-duration="800">
                <div class="img-div">
                    <img src="assets/images/regulated-stp-broker.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Regulated</p>
                    <p class="mb-0 pb-2">STP Broker</p>
                </h5>
                <p class="mb-0 text-gray">
                    Trade with full confidence through our licensed STP brokerage — regulated, transparent, and committed to fair pricing and reliability.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4" data-aos="fade-up" data-aos-duration="800">
                <div class="img-div">
                    <img src="assets/images/nominee-fund-protection.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Nominee</p>
                    <p class="mb-0 pb-2">Fund Protection</p>
                </h5>
                <p class="mb-0 text-gray">
                    Your capital is safeguarded with strong nominee fund protection — so you can trade stress-free while we keep your investments secure.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4" data-aos="fade-up" data-aos-duration="800">
                <div class="img-div">
                    <img src="assets/images/top-tier-liquidity-provider.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Top Tier Liquidity</p>
                    <p class="mb-0 pb-2">Provider</p>
                </h5>
                <p class="mb-0 text-gray">
                    Access deep liquidity and tight spreads with top-tier global providers — ensuring fast execution and reliable market access.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4" data-aos="fade-up" data-aos-duration="800">
                <div class="img-div">
                    <img src="assets/images/24x7-support.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">24x7</p>
                    <p class="mb-0 pb-2">Support</p>
                </h5>
                <p class="mb-0 text-gray">
                    Your trusted trading partner, with dedicated experts available around the clock to assist and resolve.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Support Benefit -->

<!-- Account Type -->
<style>
    #account_type {
        padding: 80px 0;
        /* min-height: 100vh; */
        background-color: var(--zed-backgound-color);
        display: flex;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
    }

    #account_type table td {
        padding: 12px 0;
        border-bottom: 1px solid var(--zed-border-color);
        font-weight: 700;
        font-size: 0.9rem;
    }

    #account_type table td.left {
        font-weight: 700;
    }

    #account_type table td.right {
        font-weight: 500;
    }

    .account-type-table {
        padding: 20px;
        border: 1px solid var(--zed-border-color);
        margin: 10px;
        border-radius: 30px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .account-type-table:hover {
        border: 1px solid var(--zed-secondary);
    }

    #account_type table tr:last-of-type td {
        border-bottom: none;
    }

    .raw-spreed-account-text {
        font-size: 28px;
        color: var(--zed-dark-text);
    }

    .open-account-btn {
        position: absolute;
        bottom: 0px;
    }

    .create-account-btn button,
    .open-account-btn button {
        padding: 8px 15px;
        color: #fff;
        border-radius: 25px;
        margin: 5px 0;
        border: 0px;
        background-color: var(--zed-primary);
        width: 100%;
        font-size: 1rem;
    }

    .h-230px {
        min-height: 215px;
        padding-left: 30px;
    }

    .h-230px p {
        font-size: 0.9rem;
    }

    .account-type-detail {
        padding-right: 40px;
    }

    .fw-400 {
        font-weight: 400 !important;
    }

    .bottom-black-border {
        border-bottom: 1px solid var(--zed-border-color);
    }

    .text-hover-effect {
        display: inline-block;
        position: relative;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 15px
    }

    .text-hover-effect::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        height: 3px;
        background-color: var(--zed-primary);
        width: 0;
        transition: width 0.3s ease;
    }

    .card-position:hover .text-hover-effect::after {
        width: 80%;
    }

    .text-hover-effect::before {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        border-radius: 4px;
        background-color: var(--zed-primary-hover);
        bottom: -5px;
        left: 0;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .3s ease-in-out;
    }

    .account-type-table:hover .text-hover-effect::before {
        transform-origin: left;
        transform: scaleX(1);
    }

    .mobile-btn {
        display: none;
    }

    @media (max-width: 767.9px) {
        .account-type-detail {
            margin-top: 1rem;
        }

        #account_type table td {
            font-size: 0.8rem;
        }

        .account-type-detail {
            padding-right: calc(var(--bs-gutter-x) * .5);
        }

        .h-230px {
            min-height: 160px;
            padding-left: 0px;
        }
    }
</style>

<div id="account_type" class="text-center">
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12 section-title">
                <h2 class="h2">Account Type</h2>
            </div>
            <div class="col-12">
                <p class="f-20 text-gray">Zed Capital offers two account types designed to meet the needs of all traders</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-lg-6 col-sm-12 px-2 py-2">
                <div class="row account-type-table" style="padding-bottom: 40px;" data-aos="fade-up" data-aos-duration="800">
                    <div class="position-absolute w-100 text-end" data-aos="zoom-in" data-aos-delay="400">
                        <img src="assets/images/most-popular-belt.png" alt="Most Popular Belt" />
                    </div>
                    <div class="col-12" style="height: 50px;">

                    </div>
                    <div class="col-md-5 col-sm-12 col-12 h-230px text-start position-relative">
                        <strong class="raw-spreed-account-text mt-5">
                            Premium Elite
                        </strong>
                        <p class="text-gray fw-400 mt-3">
                            Currency, Metal, Energies, Indices, Crypto, US, EU, UK, HE and UAE Stocks
                        </p>
                        <div class="open-account-btn desktop-btn w-75">
                            <button>Open Account</button>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 account-type-detail" data-aos="fade-up" data-aos-duration="800">
                        <table class="w-100">
                            <tr>
                                <td class="text-start">Platform</td>
                                <td class="fw-400 theme-black-color text-end">MetaTraders 5</td>
                            </tr>
                            <tr>
                                <td class="text-start">Spreads</td>
                                <td class="fw-400 theme-black-color text-end">From 1.5 pips</td>
                            </tr>
                            <tr>
                                <td class="text-start">Leverage</td>
                                <td class="fw-400 theme-black-color text-end">Up to 1:500</td>
                            </tr>
                            <tr>
                                <td class="text-start">Commission</td>
                                <td class="fw-400 theme-black-color text-end">$0</td>
                            </tr>
                            <tr>
                                <td class="text-start">Minimum Deposit</td>
                                <td class="fw-400 theme-black-color text-end">$100</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <div class="open-account-btn mobile-btn"><button>Open Account</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 px-2 py-2">
                <div class="row account-type-table m-2" style="padding-bottom: 40px;" data-aos="fade-up" data-aos-duration="800">
                    <div class="col-12" style="height: 50px;">

                    </div>
                    <div class="col-md-5 col-sm-12 col-12 h-230px text-start position-relative" data-aos="fade-up" data-aos-duration="800">
                        <strong class="raw-spreed-account-text mt-5">Raw Spread</strong>
                        <p class="text-gray fw-400 mt-3">Forex, Metal, Energies</p>
                        <div class="open-account-btn desktop-btn w-75">
                            <button>Open Account</button>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 account-type-detail" data-aos="fade-up" data-aos-duration="800">
                        <table class="w-100" data-aos="fade-up" data-aos-duration="800">
                            <tr>
                                <td class="text-start">Platform</td>
                                <td class="fw-400 theme-black-color text-end">MetaTraders 5</td>
                            </tr>
                            <tr>
                                <td class="text-start">Spreads</td>
                                <td class="fw-400 theme-black-color text-end">From 0.2 pips</td>
                            </tr>
                            <tr>
                                <td class="text-start">Leverage</td>
                                <td class="fw-400 theme-black-color text-end">Up to 1:500</td>
                            </tr>
                            <tr>
                                <td class="text-start">Commission</td>
                                <td class="fw-400 theme-black-color text-end">$8</td>
                            </tr>
                            <tr>
                                <td class="text-start">Minimum Deposit</td>
                                <td class="fw-400 theme-black-color text-end">$100</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 text-center" data-aos="fade-up" data-aos-duration="800">
                        <div class="open-account-btn mobile-btn">
                            <button>
                                Open Account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End Account Type -->

<!-- Start Meta Trader 5 -->
<style>
    #meta_trader_5 {
        padding: 80px 0;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        background-image: url('assets/images/background/meta-trader-5-background.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .image-wrapper {
        position: relative;
        /* width: 100%;
            height: 100vh; */
        /* display: flex; */
        align-items: center;
        justify-content: center;
    }

    .main-image {
        margin-top: 60px;
        z-index: 1;
        width: 60%;
    }

    .meta-trader-logo {
        margin-top: 3rem !important;
        width: 25%;
    }

    .corner-image {
        position: absolute;
        display: flex;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
        padding: 20px 30px;
        border-radius: 15px;
        border: 1px solid var(--zed-border-color);
        background-color: #f7f7f7;
        opacity: 0.85;
    }

    .corner-image:hover {
        background-color: var(--zed-primary-hover);
        color: #f7f7f7;
    }

    .corner-image img {
        width: 30px;
    }

    .top-left {
        top: 115px;
        left: 50px;
        z-index: 1;
    }

    .top-right {
        top: 40px;
        right: 165px;
        z-index: 1;
    }

    .bottom-left {
        bottom: 100px;
        left: 280px;
        z-index: 1;
    }

    .bottom-right {
        bottom: 150px;
        right: -45px;
        z-index: 1;
    }

    .corner-image:hover img {
        filter: brightness(0) invert(1);
    }

    .section-title p {
        width: 75%;
    }

    .desktop-view {
        display: block;
    }

    .mobile-view {
        display: none;
    }

    @media (max-width: 767.9px) {
        .section-title p {
            width: 100%;
        }

        .meta-trader-logo {
            margin-top: 1rem !important;
            width: 100%;
        }

        .main-image {
            margin-top: 30px;
            z-index: 1;
            width: 100%;
        }

        .desktop-view {
            display: none;
        }

        .mobile-view {
            display: block;
        }

        .corner-image {
            position: unset;
            margin-bottom: 15px;
        }

        #meta_trader_5 {
            padding: 60px 0;
        }
    }
</style>

<div id="meta_trader_5" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title" data-aos="fade-up" data-aos-duration="800">
                <h2 class="h2">Institutional-Grade MT5, On Every Device</h2>
                <p class="f-20 text-gray m-0 mx-auto text-center mt-3">
                    Consistent pricing, advanced order types, and audit-ready security controls.
                </p>
                <p class="f-20 text-gray m-0 mx-auto text-center">
                    Access MT5 across Windows, macOS, iOS, and Android with unified login.
                </p>
                <img src="assets/images/meta-trader-5-logo.png" class="fluid-img meta-trader-logo mt-5">
            </div>
        </div>
        <div class="row" id="bg_meta_trader_5" data-aos="fade-up" data-aos-duration="800">
            <div class="col-md-12 image-wrapper">
                <img src="assets/images/meta-trader-laptop-background.png" class="main-image" data-aos="fade-up" data-aos-duration="800">

                <div class="desktop-view">
                    <!-- manage other Images -->
                    <div class="corner-image top-left">
                        <img src="assets/images/apple.svg" alt="Top Left">
                        <span class="mx-4">Apple - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>

                    <div class="corner-image top-right">
                        <img src="assets/images/windows.svg" alt="Top Left">
                        <span class="mx-4">Window - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>

                    <div class="corner-image bottom-left">
                        <img src="assets/images/android.svg" alt="Top Left">
                        <span class="mx-4">Android - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>

                    <div class="corner-image bottom-right">
                        <img src="assets/images/computer.svg" alt="Top Left">
                        <span class="mx-4">Desktop - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>
                </div>
            </div>


            <div class="mobile-view">
                <!-- manage other Images -->
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="corner-image">
                        <img src="assets/images/apple.svg" alt="Top Left">
                        <span class="mx-4">Apple - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="corner-image">
                        <img src="assets/images/windows.svg" alt="Top Left">
                        <span class="mx-4">Window - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="corner-image">
                        <img src="assets/images/android.svg" alt="Top Left">
                        <span class="mx-4">Android MT-5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="corner-image">
                        <img src="assets/images/computer.svg" alt="Top Left">
                        <span class="mx-4">Desktop - MT5</span>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Meta Trader 5 -->

<!-- Start Market access -->
<style>
    #market_access {
        padding: 80px 0;
        /* min-height: 100vh; */
        /* display: flex; */
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        /* background-color: var(--zed-backgound-color); */
    }

    .market-card {
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 40px 20px;
        position: relative;
        /* background-color: var(--zed-card-back); */
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        z-index: 1;
        transform: scale(1);
        /* default scale */
        background-color: rgba(255, 255, 255, 0.7);
        min-height: 225px;
    }


    .card-position:hover .market-card {
        border: 1px solid var(--zed-light-red-hover);
        transform: scale(1.05);
        /* zoom out on hover */
    }

    .icon {
        position: absolute;
        transition: all 0.3s ease;
    }

    .tesla {
        top: 25px;
        left: 50%;
        transform: translateX(-280%);
        width: 50px;
        z-index: 0;
    }

    .stock-card:hover .tesla {
        top: 1px;
        left: 50%;
        transform: translateX(-280%);
        /* width: 50px; */
    }

    .apple {
        bottom: 27px;
        left: 50%;
        transform: translateX(100%);
        width: 40px;
        z-index: 0;
    }

    .stock-card:hover .apple {
        bottom: 1px;
        left: 50%;
        transform: translateX(100%);
        /* width: 40px; */
    }

    .metal-wire {
        top: 10px;
        left: 50%;
        transform: translateX(15%);
        width: 130px;
    }

    .metal-card:hover .metal-wire {
        top: 30px;
        left: 55%;
        transform: translateY(-45%);
        /* width: 140px; */
    }

    .metal-brick {
        bottom: 10px;
        left: 50%;
        transform: translateX(-90%);
        width: 90px;
    }

    .metal-card:hover .metal-brick {
        bottom: -10px;
        left: 50%;
        transform: translateX(-90%);
        /* width: 90px; */
    }

    .nasdaq {
        top: 80px;
        left: 20px;
        width: 55px;
    }

    .indices-card:hover .nasdaq {
        transform: translateX(-10px);
        left: 11px;
        /* width: 60px; */
    }

    .sp500 {
        bottom: 80px;
        right: 8px;
        width: 80px;
    }

    .indices-card:hover .sp500 {
        transform: translateX(40px);
        /* width: 90px; */
        right: 16px;
    }

    .doller {
        top: 80px;
        left: 20px;
        width: 45px;
    }

    .forex-card:hover .doller {
        transform: translateX(-10px);
        left: 15px;
    }

    .euro {
        bottom: 80px;
        right: 25px;
        width: 50px;
    }

    .forex-card:hover .euro {
        transform: translateX(15px);
        right: 22px;
    }

    .oil {
        bottom: 10px;
        left: 50%;
        transform: translateX(-150%);
        width: 55px;
    }

    .commodities-card:hover .oil {
        transform: translateX(-150%);
        bottom: -15px;
        left: 50%;
    }

    .crypto-icon {
        top: 10px;
        left: 50%;
        transform: translateX(-250%);
        width: 50px;
    }

    .crypto-card:hover .crypto-icon {
        transform: translateX(-240%);
        top: -5px;
        left: 48%;
        /* width: 55px; */
    }

    .btc {
        bottom: 80px;
        right: 28px;
        width: 35px;
    }

    .crypto-card:hover .btc {
        transform: translateX(5px);
        right: 18px;
    }

    @media (max-width: 767.9px) {
        #market_access {
            padding: 60px 0;
        }

        .sp500 {
            right: 15px;
        }
    }
</style>

<div class="container" id="market_access">
    <h2 class="h2 text-center">Global Multi-Asset Access</h2>
    <p class="text-center mb-5 text-muted">
        One account. Stocks, metals, indices, FX, commodities, and crypto.
    </p>

    <div class="row g-4">

        <!-- Stock -->
        <div class="col-md-4 stock-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/tesla-logo.png" class="icon tesla" alt="Tesla">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Stock</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Invest in global leaders like Apple, Tesla, and Microsoft for long-term growth</p>
                </div>
            </div>
            <img src="assets/images/apple-logo.png" class="icon apple" alt="Apple">
        </div>

        <!-- Metal -->
        <div class="col-md-4 metal-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/metal-wire.png" class="icon metal-wire" alt="Gold">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Metal</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Protect your wealth with safe-haven assets such as gold and silver.</p>
                </div>
            </div>
            <img src="assets/images/metal-brick.png" class="icon metal-brick" alt="Silver">
        </div>

        <!-- Indices -->
        <div class="col-md-4 indices-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/naqsad-logo.png" class="icon nasdaq" alt="NASDAQ">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Indicies</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Diversify with top indices including the NASDAQ and S&P 500.</p>
                </div>
            </div>
            <img src="assets/images/s-p-500-logo.png" class="icon sp500" alt="NASDAQ">
        </div>

        <!-- Forex -->
        <div class="col-md-4 forex-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/doller-icon.png" class="icon doller" alt="USD Doller">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Global Currency</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Trade major currencies like the USD and Euro with high liquidity.</p>
                </div>
            </div>
            <img src="assets/images/euro-icon.png" class="icon euro" alt="Euro">
        </div>

        <!-- Commodities -->
        <div class="col-md-4 commodities-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Commodities</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Seize opportunities in essential resources like oil and more.</p>
                </div>
            </div>
            <img src="assets/images/oil-drum-icon.png" class="icon oil" alt="Oil">
        </div>

        <!-- Crypto -->
        <div class="col-md-4 crypto-card card-position position-relative p-5" data-aos="fade-up" data-aos-duration="800">
            <img src="assets/images/product-crypto-icon.png" class="icon crypto-icon" alt="Crypto Coin">
            <div class="market-card">
                <div class="px-5 text-start">
                    <h3 class="text-hover-effect">Crypto</h3>
                </div>
                <div class="px-5">
                    <p class="text-start text-gray">Explore the future of finance with leading crypto coins.</p>
                </div>
            </div>
            <img src="assets/images/product-bitcoin-logo.png" class="icon btc" alt="Bitcoin">
        </div>

    </div>
</div>
<!-- End market access -->

<!-- Start Pioneering technology feature-->
<style>
    #technology_feature {
        padding: 80px 0;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        background-color: var(--zed-card-back);
    }

    .tech-feature {
        padding: 40px 50px;
        border: 1px solid var(--zed-border-color);
        border-radius: 60px;
        background-color: #fff;
        margin: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .tech-feature:hover {
        border: 1px solid var(--zed-secondary);
    }

    .tech-feature .set-m-bottom {
        margin-bottom: 1rem !important;
    }
    .tech-feature.home-page{
        min-height: 600px;
    }
    @media (max-width: 767.9px) {
        #technology_feature {
            padding: 60px 0;
        }

        #technology_feature h2 {
            font-size: 1.6rem;
            margin-bottom: 20px;
        }

        .tech-feature {
            padding: 20px;
            border-radius: 30px;
        }

        .create-account-btn button,
        .open-account-btn button {
            font-size: 1rem;
        }

        .tech-feature .set-m-bottom {
            margin-bottom: 0.5rem !important;
        }
    }
</style>

<div class="position-absolute w-100 text-end set-diamond-image">
    <img src="assets/images/background/redgreen-trading-candles-white-studio.png" alt="Candle Studio" style="width: 25%; margin-top: -50px;" />
</div>

<div id="technology_feature" class="text-center">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-duration="400">
            <div class="col-md-12 section-title">
                <h2 class="h2">
                    Advanced Trading Technology
                </h2>
            </div>
            <div class="col-12">
                <p class="f-20 text-gray">Zed Capital offers two account types designed to meet the needs of all traders</p>
            </div>
        </div>

        <div class="row p-0 justify-content-center">
            <div class="col-md-4 p-0">
                <div class="row tech-feature home-page" data-aos="fade-up" data-aos-duration="500">
                    <div class="col-md-12 set-m-bottom">
                        <div class="row">
                            <div class="col-6" data-aos="fade-up" data-aos-duration="600">
                                <img src="assets/images/copy-trading.png" class="w-100">
                            </div>
                            <div class="col-6 verticle-center text-start" data-aos="fade-up" data-aos-duration="700">
                                <h3 class="fw-bold">Copy Trading</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 set-m-bottom">
                        <p class="text-gray text-start">
                            Safe MT5 copy-trading tools that consistently and quickly duplicate deals between accounts.  The master is chosen, risk is established (fixed lots or percentage equity), and you can halt or disengage at any time.  Tools only—we don't handle money or offer guidance.
                        </p>
                    </div>
                    <div class="col-md-12 create-account-btn mt-4 openLiveAccount">
                        <button>Create Account</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-0">
                <div class="row tech-feature home-page" data-aos="fade-up" data-aos-duration="800">
                    <div class="col-md-12 set-m-bottom">
                        <div class="row">
                            <div class="col-6" data-aos="fade-up" data-aos-duration="900">
                                <img src="assets/images/pamm-trade-icon.png" class="w-100">
                            </div>
                            <div class="col-6 verticle-center text-start" data-aos="fade-up" data-aos-duration="1000">
                                <h3 class="fw-bold">Advance CRM</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 set-m-bottom">
                        <p class="text-gray text-start">
                            Lead management, KYC/AML, MT5 account syncing, funding/withdrawals, support tickets, and IB/affiliate payouts are all centrally located in this safe, role-based CRM. It is driven by automation, audit trails, and real-time performance dashboards to improve onboarding and retention.
                        </p>
                    </div>
                    <div class="col-md-12 create-account-btn mt-4 openLiveAccount">
                        <button>Create Account</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-0">
                <div class="row tech-feature home-page" data-aos="fade-up" data-aos-duration="1100">
                    <div class="col-md-12 set-m-bottom">
                        <div class="row">
                            <div class="col-6" data-aos="fade-up" data-aos-duration="1200">
                                <img src="assets/images/web-trade-icon.png?v=0.01" class="w-100">
                            </div>
                            <div class="col-6 verticle-center text-start" data-aos="fade-up" data-aos-duration="1300">
                                <h3 class="fw-bold">Web Trading</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 set-m-bottom">
                        <p class="text-gray text-start">
                            MT5 Web Trading eliminates the need for downloads and installs by bringing the entire MT5 experience into your browser.  To access real-time pricing, one-click orders, sophisticated charting, market depth, and full order types that are synchronized across all of your devices, log in with your Zed Capital account.  Quick, safe, and available for trading anywhere.
                        </p>
                    </div>
                    <div class="col-md-12 create-account-btn mt-4 loginLiveAccount">
                        <button>Create Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pioneering technology feature-->

<!-- Start For Biginner Trader-->
<style>
    #biginner_trader {
        padding: 80px 0;
        /* min-height: 100vh; */
        /* display: flex; */
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        background-image: url('assets/images/background/biginners-trader-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
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

    .demo-button:hover {
        background-color: var(--zed-icon-color);
        border: 1px solid var(--zed-secondary);
    }

    .demo-text {
        font-size: 18px;
        font-weight: 600;
        color: #000;
        padding: 0 25px;
    }

    .demo-icon {
        width: 28px;
        height: 28px;
        background-color: #f44336;
        /* red */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 14px;
        transition: background-color 0.2s ease;
    }

    .demo-button:hover .demo-icon {
        background-color: #d32f2f;
    }

    .red-line {
        width: 60px;
        height: 8px;
        background-color: var(--zed-primary);
        /* Material red */
        margin: 40px 0;
        /* center horizontally */
        border-radius: 2px;
        /* optional for rounded edges */
    }

    .feature-box {
        position: relative;
        border-radius: 25px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 30px 30px;
        overflow: hidden;
        /* margin-bottom: 50px; */
    }

    .candle-img {
        position: absolute;
        top: -65px;
        right: 0px;
        width: 100px;
        height: auto;
        z-index: 10;
    }

    .feature-item {
        padding: 0 15px;
        text-align: left;
    }

    .feature-title {
        font-weight: 700;
        font-size: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #000;
        margin-left: -75px;
    }

    .feature-text {
        font-size: 0.95rem;
        color: #666;
        margin-top: 8px;
        margin-left: -75px;
    }

    .divider {
        width: 1px;
        background-color: #ddd;
        height: 100%;
    }

    .line-height {
        line-height: 2.5rem;
    }

    @media (max-width: 767.9px) {
        .divider {
            display: none;
        }

        .feature-item {
            margin-bottom: 20px;
        }

        #biginner_trader {
            padding: 60px 0;
        }

        .red-line {
            margin: 20px 0;
        }

        .demo-button {
            margin: 0;
        }

        .feature-box {
            display: none;
        }
    }
</style>

<div id="biginner_trader">
    <div class="container">
        <div class="row text-center" id="" data-aos="fade-up" data-aos-duration="800">

            <div class="col-md-12 section-title">
                <h2 class="h2">Professional Beginnings for New Traders</h2>
            </div>
            <div class="col-12">
                <p class="f-20 text-gray">Education, practice, and execution in one place.</b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/ipad-cross.png" class="w-100">
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6 mt-5" data-aos="fade-up" data-aos-duration="800">
                        <h3 class="fw-bold line-height">User <br> Friendly Demo</h3>

                        <div class="red-line"></div>

                        <p class="text-gray w-75">
                            Build your trading
                            experience with
                            ease, risk-free.
                        </p>

                        <div class="w-100">
                            <button class="demo-button btn openLiveAccount">
                                <span class="demo-text">Try Demo</span>
                                <span class="demo-icon">→</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5" data-aos="fade-up" data-aos-duration="800">
                        <h3 class="fw-bold line-height">Zed Capital <br>Academy</h3>

                        <div class="red-line"></div>

                        <p class="text-gray">
                            Structured learning paths from fundamentals to advanced risk control.
                        </p>

                        <div class="w-100">
                            <button class="demo-button btn">
                                <span class="demo-text">Try Demo</span>
                                <span class="demo-icon">→</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row align-items-stretch" data-aos="fade-up" data-aos-duration="800">
            <div class="position-absolute w-100 aos-init aos-animate set-diamond-image" data-aos="fade-up" data-aos-delay="800">
                <img src="assets/images/silver-red-candle.png" alt="Candlestick" class="candle-img">
            </div>

            <div class="col-md-12 feature-box">
                <div class="row">
                    <!-- Feature 1 -->
                    <div class="col-md-4 feature-item d-flex flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="feature-title mx-0">
                            Global 24/7 Support Desk
                            <span class="text-danger fw-bold">&rarr;</span>
                        </div>
                        <div class="feature-text mx-0">
                            Consistent, courteous service across every time zone.
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="d-none d-md-block col-md-1 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800">
                        <div class="divider"></div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-3 feature-item d-flex flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="feature-title">
                            Flexible position sizing
                            <span class="text-danger fw-bold">&rarr;</span>
                        </div>
                        <div class="feature-text">
                            Stay comfortable with your exposure and trade using flexible sizings.
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="d-none d-md-block col-md-1 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800">
                        <div class="divider"></div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-3 feature-item d-flex flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="feature-title">
                            Risk-management tools
                            <span class="text-danger fw-bold">&rarr;</span>
                        </div>
                        <div class="feature-text">
                            Use stop-losses to limit your downside when the market goes against you.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End For Biginner Trader-->

<!-- Start How to start steps -->
<style>
    #how_to_start {
        padding: 80px 0;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        /* background-color: var(--zed-backgound-color); */
        background-image: url('assets/images/background/how-to-start.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    .step-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin: auto;
        position: relative;
    }

    .step-circle img {
        width: 200px;
        height: 200px;
        transition: transform 0.3s ease;
    }

    .step-circle:hover .step-title {
        color: var(--zed-primary);
    }

    .step:hover .step-circle {
        background-color: #fff;
        transform: scale(1.05);
    }

    .step:hover .step-circle img.default {
        display: none;
    }

    .step:hover .step-circle img.hover {
        display: inline;
    }

    .step-circle img.hover {
        display: none;
    }

    .step-title {
        position: absolute;
        font-weight: 700;
        font-size: 1.6rem;
        margin-top: 0;
    }

    .step-desc {
        color: #666;
        font-size: 0.71rem;
        margin-top: 5px;
    }

    .arrow-top-round {
        width: 28%;
        height: 30px;
        background: url('assets/images/step-top-connector.png') no-repeat center;
        background-size: contain;
        padding: 0 0 100px;
        margin: -10px 0px 160px -15px;
    }

    .arrow-bottom-round {
        width: 28%;
        height: 30px;
        background: url('assets/images/step-bottom-connector.png') no-repeat center;
        background-size: contain;
        padding: 0 0 100px;
        margin: -25px;
    }

    .step-desc p {
        margin: 0;
    }

    #how_to_start .fw-semibold {
        font-size: 1.4rem;
    }

    @media (max-width: 767.9px) {
        #how_to_start {
            padding: 60px 0;
        }

        .step-circle {
            margin-top: 25px;
        }
    }
</style>

<div id="how_to_start">
    <div class="position-relative set-diamond-image">
        <img src="assets/images/diamonds/2-diamonds.png" alt="Corner Image" class="position-absolute top-0 start-0 float-y" style="width: 100px; height: 80px;">
    </div>
    <div class="container py-5 pt-0">
        <h2 class="fw-bold text-center h2 mb-2">Start Trading in Three Steps</h2>
        <p class="text-gray text-center pb-5">No complexities, just a smooth and seamless process!</p>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">

            <!-- Step 1 -->
            <div class="step text-center">
                <div class="step-circle">
                    <img src="assets/images/step-bg.png" alt="Sign Up" class="default">
                    <img src="assets/images/step-bg-hover.png" alt="Sign Up Hover" class="hover">
                    <div class="step-title">Sign Up</div>
                </div>
                <div class="fw-semibold pt-5">Step 1</div>
                <div class="step-desc">
                    <p>Register for the trading</p>
                    <p>account by filling in your details.</p>
                </div>
            </div>

            <div class="arrow-top-round d-none d-md-block"></div>

            <!-- Step 2 -->
            <div class="step text-center">
                <div class="step-circle">
                    <img src="assets/images/step-bg.png" alt="Sign Up" class="default">
                    <img src="assets/images/step-bg-hover.png" alt="Sign Up Hover" class="hover">
                    <div class="step-title">Deposit</div>
                </div>
                <div class="fw-semibold pt-5">Step 2</div>
                <div class="step-desc">
                    <p>Add funds to your trading</p>
                    <p>account and get started.</p>
                </div>
            </div>

            <div class="arrow-bottom-round d-none d-md-block"></div>

            <!-- Step 3 -->
            <div class="step text-center">
                <div class="step-circle">
                    <img src="assets/images/step-bg.png" alt="Sign Up" class="default">
                    <img src="assets/images/step-bg-hover.png" alt="Sign Up Hover" class="hover">
                    <div class="step-title">Start</div>
                </div>
                <div class="fw-semibold pt-5">Step 3</div>
                <div class="step-desc">
                    <p>Analyze, execute, manage,</p>
                    <p>Withdrawal at your time. (24/7)</p>
                </div>
            </div>

        </div>
    </div>
    <div class="position-relative set-diamond-image">
        <img src="assets/images/diamonds/3-diamonds.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 130px; height: 100px;">
    </div>
</div>
<!-- End How to start steps -->

<!-- Start Live Market Data-->
<style>
    #map {
        /* padding: 120px 0; */
        min-height: 85vh;
        /* width: 100%; */
        /* overflow: visible !important; */
    }

    .gmnoprint {
        display: none !important;
    }

    #live_market {
        min-height: 100vh;
    }

    .map-tooltip {
        background: white;
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #d7d7d7;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    .map-tooltip .title {
        font-weight: bold;
        margin-bottom: 4px;
    }

    .gm-ui-hover-effect {
        display: none !important;
    }

    .pulse-marker {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        animation: pulse 2.5s infinite;
        box-shadow: 0 0 0 rgba(76, 175, 80, 0.4);
    }

    .static-marker {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.6);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(76, 175, 80, 0.2);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.0);
        }
    }

    /* Market Carousel Styles */
    .market {
        background-color: #ffffffad;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: center;
        border: 1px solid #dbdbdb;
        height: 100%;
    }

    .market img {
        width: 32px;
        vertical-align: middle;
        border-radius: 50%;
        height: 32px;
    }

    .market .status {
        margin-top: 10px;
        font-weight: bold;
        color: green;
    }

    .market.closed .status {
        color: red;
    }

    .timeline {
        height: 10px;
        margin-top: 10px;
        background: #ff0000;
        border-radius: 10px;
        overflow: hidden;
    }

    .timeline .bar {
        height: 100%;
        background: #4caf50;
        width: 0;
    }

    #marketCarousel {
        /* position: sticky; */
        bottom: 0;
        /* left: 5%;
            width: 85%; */
        z-index: 1000;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }

    .carousel-control-next,
    .carousel-control-prev {
        width: 5%
    }

    #live_market .w-100 {
        z-index: 1;
        text-align: center;
        padding-top: 50px;
    }

    .pulse-marker {
        background-size: 35px 30px !important;
    }

    @media (max-width: 767.9px) {
        #marketCarousel {
            display: none;
        }
    }

    a[rel="noopener"] {
        display: none !important;
    }
</style>

<div class="" id="live_market" data-aos="fade-up" data-aos-duration="800">
    <div class="position-absolute w-100 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
        <h2 class="fw-bold h2">Live Market</h2>
    </div>

    <div id="map"></div>

    <!-- Market Carousel -->
    <div id="marketCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="market-slides"></div>

        <button class="carousel-control-prev" type="button" data-bs-target="#marketCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#marketCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<!-- End Live Market Data-->

<!-- Start Fund Security -->
<style>
    #fund_security {
        padding: 80px 0;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        overflow: hidden;
        /* background-image: url('assets/images/background/stock-chart-showing-upward-trend-growth-reverse.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; */
        background-color: var(--zed-card-back);
        position: relative;
    }

    .section-secure {
        padding: 60px 15px;
    }

    .security-text h2 {
        font-weight: 700;
        font-size: 2.5rem;
    }

    .security-text p {
        color: #666;
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .security-text .listed {
        font-weight: 600;
        margin-top: 10px;
    }

    .security-images {
        position: relative;
        height: 400px;
    }

    .security-images img {
        position: absolute;
        /* width: 100%; */
    }

    .img-shield {
        width: 110%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .img-dollar {
        top: -15%;
        left: -10%;
        width: 70px;
    }

    .img-euro {
        top: 22%;
        right: 18%;
        width: 80px;
    }

    .img-pound {
        bottom: -15%;
        left: 25%;
        width: 70px;
    }

    .security-text p {
        width: 75%;
    }

    @media (max-width: 767.9px) {
        .security-images {
            display: none;
        }

        .security-text p {
            width: 100%;
        }

        /* .security-images img {
                max-width: 50px;
            } */

        .img-shield {
            max-width: 100px;
        }

        #fund_security {
            padding: 60px 0;
        }
    }

    .img-doller-move-in {
        transform: translate(40%, 40%);
        transition: transform 1.5s ease-in-out;

    }

    .img-euro-move-in {
        transform: translate(-40%, 40%);
        transition: transform 1.5s ease-in-out;

    }

    .img-pound-move-in {
        transform: translate(40%, -40%);
        transition: transform 1.5s ease-in-out;
    }

    .img-doller-move-out,
    .img-euro-move-out,
    .img-pound-move-out {
        transform: translate(0%, 0%);
        transition: transform 1.5s ease-in-out;
    }

    .arrow-list {
        list-style: none; /* remove default dots */
        padding-left: 0; /* remove extra padding */
    }

    .arrow-list li {
        position: relative;
        padding-left: 20px; /* space for the arrow */
    }

    .arrow-list li::before {
        content: "›"; /* or ">" */
        position: absolute;
        left: 0;
        color: var(--zed-primary); /* Bootstrap primary color */
        font-size: 45px;
        margin: -20px 0 0 0;
    }
</style>

<section class="section-secure" id="fund_security">
    <div class="container py-5">
        <div class="row align-items-center hover-box">
            <!-- Left Text Column -->
            <div class="col-md-6 security-text" data-aos="fade-up" data-aos-duration="800">
                <h2 class="mb-4">Fund Security</h2>
                <p class="trust-text text-gray mb-4" data-aos="fade-up" data-aos-delay="500">
                    At Zed Capital, the safety of your funds is our highest priority. Client deposits are kept in segregated accounts with top-tier banks, safeguarded under FSC regulation. With negative balance protection, advanced risk management, and bank-level data security, we ensure your capital remains protected at all times.
                </p>
                <ul class="arrow-list">
                    <li class="mb-1 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Segregated Client Accounts
                    </li>
                    <li class="mb-1 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        FSC Regulated & Compliant
                    </li>
                    <li class="mb-1 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Negative Balance Protection
                    </li>
                    <li class="mb-1 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Advanced Risk Management
                    </li>
                    <li class="mb-1 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Bank-Level Security & Encryption
                    </li>
                </ul>

                <div class="position-relative set-diamond-image">
                    <img src="assets/images/diamonds/fund-security-3-diamonds.png" alt="Corner Image" class="position-absolute bottom-10 end-50 float-y" style="width: 150px; height: 80px; top: 15px;">
                </div>
            </div>

            <!-- Right Image Column -->
            <div class="col-md-6 security-images" id="scroll_box" data-aos="fade-up" data-aos-duration="1000">
                <img src="assets/images/fund-security.png" alt="Shield" class="img-shield">
                <img src="assets/images/doller-fund-security.png" alt="Dollar Symbol" class="img-dollar" id="img_doller">
                <img src="assets/images/euro-fund-security.png" alt="Euro Symbol" class="img-euro" id="img_euro">
                <img src="assets/images/pound-fund-security.png" alt="Pound Symbol" class="img-pound" id="img_pound">
            </div>
        </div>
    </div>
</section>
<!-- End Fund Security -->

<!-- Start Client review -->
<style>
    #client_review {
        padding: 80px 0;
        /* min-height: 85vh; */
        width: 100%;
        overflow: visible !important;
    }

    .testimonial-card {
        background-color: var(--zed-card-back);
        border-radius: 25px;
        padding: 25px;
        height: 100%;
    }

    .testimonial-card h5 {
        font-weight: 600;
    }

    .testimonial-card p {
        font-size: 0.9rem;
        color: #666;
    }

    .stars {
        color: #f5a623;
        font-size: x-large;
    }

    .carousel-control-prev,
    .carousel-control-next {
        filter: invert(1);
    }

    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }

    .trustpilot-widget {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        font-family: system-ui, Arial, sans-serif;
    }

    .tp-header {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .tp-logo {
        width: 25px;
        height: 25px;
        fill: #00b67a;
    }

    .tp-text {
        font-weight: 600;
        color: #111;
        font-size: 18px;
    }

    .tp-stars {
        display: flex;
        gap: 2px;
    }

    .tp-star {
        font-size: 16px;
        line-height: 1;
        padding: 3px;
        background: #00b67a;
        color: #fff;
        border-radius: 2px;
        width: 22px;
        height: 22px;
        text-align: center;
    }

    .tp-star.half {
        background: linear-gradient(90deg, #00b67a 50%, #dfeee9 50%);
        color: #fff;
    }

    @media (max-width: 767.9px) {
        #client_review {
            padding: 60px 0;
        }

        .testimonial-card {
            padding: 10px;
        }
    }
</style>

<section class="section-client-review" id="client_review">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-gray">Testimonials</p>
            <h2 class="h2 fw-bold">Our Clients Review</h2>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3 fw-bold">Jijo John</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3">Minaxi Menon</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3">James Kamron</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3 fw-bold">Jijo John</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3">Minaxi Menon</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="text-start position-absolute">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small>2025-05-24</small>
                                </div>
                                <h5 class="pt-3">James Kamron</h5>
                                <p class="pt-2 text-gray">The services of Zed Capital and the information on this site are not directed at residents of
                                    American Samoa.</p>
                                <div style="font-weight: 500;">⭐ Trustpilot</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more carousel-item blocks for more slides -->

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Trustpilot Dummy Widget -->
        <div class="row justify-content-center p-5">
            <div class="trustpilot-widget">
                <div class="tp-header">
                    <!-- Star icon -->
                    <svg class="tp-logo" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2l2.9 6.6 7.1.6-5.3 4.6 1.7 7-6.4-3.9-6.4 3.9 1.7-7L2 9.2l7.1-.6L12 2z" />
                    </svg>
                    <span class="tp-text">Trustpilot</span>
                </div>

                <div class="tp-stars">
                    <span class="tp-star full">★</span>
                    <span class="tp-star full">★</span>
                    <span class="tp-star full">★</span>
                    <span class="tp-star full">★</span>
                    <span class="tp-star half">★</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client review -->

<?php
include_once('elements/footer.php');
?>