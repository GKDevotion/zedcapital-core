<?php
$seoArr = [
    "title" => "Transparent Trading System | Fair & Secure Investment Platform",
    "description" => "Discover a transparent trading system designed for fairness, accuracy, and investor trust. Trade confidently with real-time insights and zero hidden fees.",
    "keyword" => "transparent trading, trading transparency, secure trading system, fair trading platform, transparent investment platform, best transparent trading system for investors, how transparent trading systems build trust, benefits of a transparent trading platform, secure and transparent online trading platform, real-time transparent trading data system, open and fair trading technology solutions, transparent trading software for brokers, regulated transparent trading company"
];
include_once ('elements/header.php');
?>

<style>
    .why-zed-capital-header {
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/why-zed-header-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 65vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 120px;
    }

    /* .why-zed-capital-header p{
        font-size: 1.3rem;
    } */

    .why-zed-capital-bullet-point{
        background-color: #ffffffb3;
        padding: 40px 25px;
        opacity: 0.9;
        display: flex;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 25px;
        border: 1px solid var(--zed-border-color);
        margin-top: -35px;
    }

    .why-zed-capital-bullet-point img{
        height: 35px;
        margin-right: 10px;
        margin-left: 20px;
    }

    .why-zed-capital-bullet-point .w-50{
        margin: -7px 0 0px 75px;
    }

    .why-zed-capital-bullet-point span{
        color: var(--zed-dark-text);
    }

    .header-text-message{
        display: flex;
        align-items: center;   /* Vertical center */

    }

    .underline {
        width: 75px;
        height: 4px;
        background-color: var(--zed-primary);
        margin: 40px 0 40px 0;
        padding: 4px;
    }

    .trust-section {
        padding: 70px 0;
    }

    .why-zed-header-white-dot-background{
        width: 40px; 
        height: 40px; 
        margin: -55px 0 0 -45px;
    }

    @media (max-width: 767.98px) {
        .trust-image {
            text-align: center;
            margin-top: 30px;
        }

        .why-zed-capital-header h1{
            font-size: 2rem;
        }

        .trust-text{
            width: 100%;
        }

        .set-diamond-image{
            display: none;
        }

        .why-zed-header-white-dot-background{
            margin: -55px 0 0 -20px !important;
        }
    }
    
</style>

<section class="why-zed-capital-header" >
    <div class="container">
        <div class="row align-items-center">
            <div class="position-relative">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/background/why-zed-header-white-dot-background.png" alt="Corner Image" class="position-absolute top-0 start-0 why-zed-header-white-dot-background">
            </div>
            <div class="col-lg-5 col-md-6 text-md-start text-center" data-aos="fade-up" data-aos-duration="800">
                <h1 class="d-none">
                    Transparent Trading System: Building Trust Through Clarity
                </h1>
                <h2 class="fw-bold text-white mb-5 h2">
                     Transparent 
                     <br>
                     Trading System
                </h2>
                <p class="text-white">
                    A trusted partner in global capital market solutions, we go beyond brokerage - delivering secure, innovative, and transparent trading built on integrity, trust, and a client-first approach to empower traders worldwide.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="" >
    <div class="container">
        <div class="row why-zed-capital-bullet-point">
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4 mt-4" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/regulated-stp-broker.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Regulated STP Broker</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4 mt-4" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/razor-thin-spread.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Razor-Thin <br>Spread</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4 mt-4" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/ultra-fast-execution.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Ultra-Fast Execution</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4 mt-4" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/24-7-support.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>24x7 <br>Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .arrow-list {
        list-style: none; /* remove default dots */
        padding-left: 0; /* remove extra padding */
    }

    .arrow-list li {
        position: relative;
        padding-left: 20px; /* space for the arrow */
        font-size: 1.25rem !important;
    }

    .arrow-list li::before {
        content: "›"; /* or ">" */
        position: absolute;
        left: 0;
        color: var(--zed-primary); /* Bootstrap primary color */
        font-size: 45px;
        margin: -20px 0 0 0;
    }

    @media (max-width: 767.9px) {
        .arrow-list li {
            font-size: 1rem !important;
        }
    }
</style>

<section>
    <div class="container">
        <div class="position-relative set-diamond-image">
            <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/why-zed-3-diamonds.png" alt="Corner Image" class="position-absolute top-0 end-0 float-y" style="width: 150px; height: 100px; margin: -60px -75px 0 0;">
        </div>
        <div class="row trust-section align-items-center">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <h2 class="h2">
                    Strategic risk Management
                </h2>
                <div class="underline"></div>
                <p class="trust-text text-gray mb-5" data-aos="fade-up" data-aos-delay="500">
                    At Zed Capital, the safety of your funds is our highest priority. Client deposits are kept in segregated accounts with top-tier banks, safeguarded under FSC regulation. With negative balance protection, Strategic risk Management, and bank-level data security, we ensure your capital remains protected at all times.
                </p>
                <ul class="arrow-list">
                    <li class="mb-2 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Segregated Client Accounts
                    </li>
                    <li class="mb-2 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        FSC Regulated & Compliant
                    </li>
                    <li class="mb-2 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Negative Balance Protection
                    </li>
                    <li class="mb-2 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Strategic Risk Management
                    </li>
                    <li class="mb-2 fs-5 px-4" data-aos="fade-up" data-aos-delay="500">
                        Bank-Level Security & Encryption
                    </li>
                </ul>
            </div>
            <div class="col-md-6 trust-image text-center" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/trust-lock.png" alt="Lock Security Image" class="w-100">
            </div>
        </div>
    </div>
</section>

<style>
    .feature-icon {
        /* display: flex; */
        align-items: center;
        margin-bottom: 25px;
    }

    .feature-icon img {
        max-width: 50px;
        max-height: 50px;
    }

    .feature-box {
        text-align: center;
        padding: 0;
    }

    .feature-title {
        font-weight: 600;
    }

    @media (max-width: 767.98px) {
        .feature-title{
            font-size: 0.9rem;
        }
    }
</style>

<section>
    <div class="container pb-5">
        <div class="row pb-3">

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="100">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/education-daily-analysis.png" alt="Education">
                    </div>
                    <div class="text-center feature-title">Education and<br>Daily Analytics</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="300">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/news-live-market.png" alt="Insight News">
                    </div>
                    <div class="text-center feature-title">Insight News and<br>Live Market</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="500">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/account-setup.png" alt="Account Setup">
                    </div>
                    <div class="text-center feature-title">5-Minute<br>Account Setup</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="700">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/instant-deposite.png" alt="Instant Deposit">
                    </div>
                    <div class="text-center feature-title">Instant<br>Deposit</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="900">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/withdrawals.png" alt="Withdrawals">
                    </div>
                    <div class="text-center feature-title">Withdrawals<br>Within 24 Hours</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1100">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/competitive-commission.png" alt="Commission">
                    </div>
                    <div class="text-center feature-title">Competitive<br>Commission</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1300">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/top-tier-liquidity.png" alt="Liquidity">
                    </div>
                    <div class="text-center feature-title">Top-Tier<br>Liquidity Provider</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="feature-icon" >
                        <img src="<?php echo getBaseUrl(); ?>/assets/images/user-friendly.png" alt="Platform">
                    </div>
                    <div class="text-center feature-title">User-Friendly<br>Trading Platform</div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .professional-pricing{
        background-color: var(--zed-backgound-color);
    }
    /* .pricing-box p {
      color: #666;
      font-size: 1rem;
    } */

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
      padding: 80px 0;
    }

    .a-link-move-icon:hover i{
        transition: transform 0.2s ease;
        transform: translateX(10px);
    }

    @media (max-width: 767.98px) {
        .learning-img{
            width: 100% !important;
        }

        .learning-heading{
            font-size: 2rem;
        }

        .learning-text{
            width: 100% !important;
        }

        .zed-academy-header{
            padding: 30px 0 !important;
        }
    }
</style>

<section class="professional-pricing">
    <div class="container">
        <div class="pricing-section">
            <h2 class="h2 fw-bold">Zed Capital Market Advantages</h2>
            <div class="underline"></div>

            <div class="row">
                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="fw-bold fs-4">
                        Competitive Pricing & Execution
                    </p>
                    <p class="text-gray" style="width: 90%;">
                        Spreads starting from 0.1 pips, ultra-low latency execution, and transparent cost structures with no hidden fees.
                    </p>
                    <a href="#" class="d-none a-link-move-icon">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>
                    
                    <p class="fw-bold fs-4">
                        Regulatory Assurance
                    </p>
                    <p class="text-gray" style="width: 90%;">
                        Fully licensed under FSC Mauritius, ensuring compliance with international standards. Client funds are safeguarded in segregated accounts with leading banking institutions.
                    </p>
                </div>

                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="fw-bold fs-4">
                        Global Market Access
                    </p>
                    <p class="text-gray" style="width: 90%;">
                        Trade forex, commodities, indices, equities, and cryptocurrencies from a single account with institutional-grade liquidity and broad diversification.
                    </p>
                    <a href="#" class="d-none a-link-move-icon">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>

                    <p class="fw-bold fs-4">
                        Advanced Technology
                    </p>
                    <p class="text-gray" style="width: 90%;">
                        Powerful MT5 platform with enhanced analytics, algorithmic trading support, and seamless access across desktop, web, and mobile.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .on-demand-section {
        padding: 80px 0;
        display: flex;
    }

    .learning-text {
        color: #666;
        font-size: 1rem;
        line-height: 1.7;
        width: 75%;
    }

    .btn-learn {
        margin: 10px 10px 10px 0;
        padding: 15px 20px;
        font-weight: 600;
        border-radius: 15px;
        background-color: white;
        border: 1px solid var(--zed-border-color);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        /* display: inline-flex; */
        align-items: center;
        transition: all 0.3s ease;
        text-decoration: none;
        color: #000;
        min-width: 210px;
    }

    .btn-learn i {
        background: var(--zed-primary);
        color: white;
        border-radius: 50%;
        margin-left: 12px;
        padding: 10px;
        font-size: 0.8rem;
    }

    .btn-learn:hover {
        background-color: var(--zed-icon-color);
        border: 1px solid var(--zed-secondary);
    }

    .learning-img {
        width: 100%;
        border-radius: 8px;
    }

    @media (max-width: 767.98px) {
        .on-demand-section .learning-div{
            padding: 0 !important;
        }
    }
</style>

<section class="on-demand-section pb-0">
    <div class="container-fluid learning-section py-5 pt-0">
        <div class="row align-items-center">
            <div class="col-md-7 col-12 learning-div mb-4 mb-md-0 p-5" data-aos="fade-up" data-aos-duration="800">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/on-demand-learning.png" alt="Tablet with chart" class="learning-img">
            </div>
            <div class="col-md-5 col-12">
                <h2 class="h2 learning-heading" data-aos="fade-up" data-aos-duration="800">
                    <p>Education <br>Clarity, Confidence, and Control</p>
                </h2>
                <div class="underline"></div>
                <p class="learning-text" data-aos="fade-up" data-aos-duration="800">
                    At Zed Capital International Ltd, we recognize that well-informed traders make better decisions. Our education program delivers the knowledge and tools required to navigate global markets with confidence.
                </p>

                <div class="text-start d-none">
                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Security & Risk Management <i class="fas fa-arrow-right d-none"></i>
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Account Manager
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Negative balance protection
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Transparent policies 
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .section-container {
        padding: 40px 0 80px;
    }

    .headline {
        font-weight: 700;
        font-size: 2rem;
    }

    .sub-headline {
        font-weight: 600;
        margin-top: 20px;
    }

    .desc {
        color: #6c757d;
        margin-top: 10px;
        line-height: 1.6;
    }

    .btn-custom {
        background-color: #ff3c3c;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 25px;
        padding: 10px 24px;
        margin-top: 20px;
    }

    .btn-custom:hover {
        background-color: #e73232;
    }

    @media (max-width: 991px) {
        .text-center-md {
        text-align: center;
        }
    }

    #nominee_fund_protection .btn-learn{
        min-width: 270px;
    }
</style>

<section class="section-container" id="nominee_fund_protection">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Text -->
            <div class="col-lg-6 text-center-md">
                <h2 class="headline">Nominee Fund Protection</h2>
                
                <div class="underline"></div>
                
                <p class="desc p-0 m-0">
                    At Zed Capital International Ltd, client fund security remains our top priority. In the unfortunate event of a client's unavailability due to death, critical illness, or any other valid reason, the client's registered nominee is entitled to claim the available account balance or account credentials in accordance with our verification and compliance procedures.
                </p>

                <div class="text-start mt-4">
                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Authorized Nominee Access <i class="fas fa-arrow-right d-none"></i>
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Full Transparency
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Seamless Fund Settlement
                    </button>

                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Client Confidence
                    </button>
                </div>

                <a class="mt-5 btn btn-custom" href="nominee-fund-protection" title="Nominee Fund Protection">
                    Get Started
                </a>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="1200">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/nominee-letter.png" class="w-100" alt="Nominee Letter">
            </div>
        </div>
    </div>
</section>

<style>

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
        min-height: 125px;
    }

    .tech-feature:hover {
        border: 1px solid var(--zed-secondary);
    }
    .icon-circle img{
        width: 40px;
    }

    
</style>

<section class="opportunities-for-investors pb-5">
    <div class="container py-5 pt-0">
        <div class="row" data-aos="fade-up" data-aos-duration="800">
            <div class="col-12 text-center">
                <p>
                    Education at Zed Capital is a strategic advantage, empowering clients with clarity, discipline, and long-term market confidence.
                </p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2 icon-circle-desktop" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/Diversification.svg">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800" class="opportunities-mobile-responsive">
                            <h5 class="fw-bold mb-1">Structured Learning</h5>
                            <p class="mb-0 small-muted">
                                Professional courses, guides, and tutorials tailored to all experience levels.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/Efficiency.svg">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800">
                            <h5 class="fw-bold mb-1">Expert Research</h5>
                            <p class="mb-0 small-muted">
                                Daily and weekly market insights across forex, commodities, indices, equities, and digital assets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/professional-tools.svg">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800">
                            <h5 class="fw-bold mb-1">Practical Resources</h5>
                            <p class="mb-0 small-muted">
                                Trading calculators, glossaries, and strategy frameworks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2" data-aos="fade-up" data-aos-duration="800">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/svg/liquidity.svg">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800">
                            <h5 class="fw-bold mb-1">Interactive Training </h5>
                            <p class="mb-0 small-muted">
                                Live webinars and seminars with industry professionals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    
    .section-title {
        text-align: center;
        margin-bottom: 10px;
    }

    .award-badge {
        height: 350px; /* or any height you need */
        position: relative; /* important for absolute positioning of child */
    }

    .award-badge img {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    @media (max-width: 767.98px) {
        .award-badge{
            height: 175px !important;
        }

        .award-design{
            width: 75% !important;
        }
    }
 
</style>

<div class="container py-5 pt-0 d-none">
    <h2 class="h2 section-title mt-5">Our latest wins</h2>
    <p class="text-center text-gray">
      Trade with confidence when you trade with Zed Capital,<br class="d-none d-md-block" />
      an award-winning global broker.
    </p>

    <div class="row py-5 pt-0 text-center">
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/award-1.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="600">
                Most Trusted <br> Broker
            </p>
            <img src="<?php echo getBaseUrl(); ?>/assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="900">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/award-2.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="600">
                Most Trusted <br> Broker
            </p>
            <img src="<?php echo getBaseUrl(); ?>/assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="900">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/award-3.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="300">
                Most Trusted <br> Broker
            </p>
            <img src="<?php echo getBaseUrl(); ?>/assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="800">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="<?php echo getBaseUrl(); ?>/assets/images/award-4.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="300">
                Most Trusted <br> Broker
            </p>
            <img src="<?php echo getBaseUrl(); ?>/assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="800">
        </div>
    </div>
</div>

<style>
    .contact-section {
        background-color: var(--zed-primary); /* Red background */
        color: #fff;
        text-align: center;
        padding: 60px 20px;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .contact-section {
            padding: 40px 15px;
        }

        .contact-section p{
            text-align: justify;
        }
    }
</style>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <h2 class="h2 fw-bold mb-4" data-aos="fade-up" data-aos-duration="800">Our Commitment</h2>
            <p class="text-white text-center" data-aos="fade-up" data-aos-duration="800">
                At Zed Capital, we are committed to empowering traders and investors with the tools, resources, and support they need to succeed in today's dynamic markets. Whether you are a retail client seeking access to opportunities, or a professional investor requiring institutional standards, Zed Capital provides the platform, expertise, and reliability to help you achieve your goals.
            </p>
        </div>
    </div>
</section>

<?php
include_once ('elements/footer.php');
?>