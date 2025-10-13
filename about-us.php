<?php
$seoArr = [
    "title" => "About Us | Zed Academy - Learn, Trade & Succeed in Global Markets",
    "description" => "Learn about Zed Academy, a global trading education platform. Discover our mission, vision, and commitment to empowering traders with knowledge and tools.",
    "keyword" => "about Zed Academy, trading education, financial market experts, learn to trade, ZED Capital information, about Zed Academy and its trading mission, learn trading and investing with Zed Academy, Zed Academy expert trading education and resources, who we are at Zed Academy global trading platform, mission and vision of Zed Academy for traders, trading courses, insights, and tools from Zed Academy, global trading education and investment guidance"
];
include_once ('elements/header.php');
?>

<style>

    .about-us-section {
        padding: 100px 0 0 0; /* Adjust padding as needed */
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/about-us-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 75vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
    }

    .section-text .underline {
        display: block;
        width: 50px;
        height: 8px;
        background-color: var(--zed-primary);
        margin: 40px 0;
    }

    .section-bottom {
        background-color: var(--zed-primary);
        color: #fff;
        padding: 20px 0;
        line-height: 1.5;
        text-align: justify;
    }

    .set-diamond-image img{
        transition-delay: .1s;
        transition-timing-function: ease-in-out;
        transition-duration: .7s;
        transition-property: all;
    }

    .hover-translateY p{
        text-align: justify;
    }
    @media (max-width: 767.9px) {

        .about-us-section {
            background-size: auto !important;
            margin-top: 50px;
        }
        .section-text h1 {
            font-size: 28px;
        }

        .set-diamond-image{
            display: none;
        }

        .about-us-section .w-50 {
            width: 100% !important;
        }

        .hover-translateY p{
            text-align: start;
        }
    }
</style>

<section class="about-us-section">
    <div class="container section-text">
        <h1 class="fw-bold mt-4">Get to know<br>Zed Capital</h1>
        <span class="underline"></span>
        <p class="mb-4 w-50">
            Zed Capital International Ltd is a globally regulated financial services provider, licensed by the Financial Services Commission (FSC), Mauritius. We empower traders and investors with secure, transparent, and seamless access to global markets.
        </p>
    </div>
</section>

<div class="section-bottom">
    <div class="container">
        <p class="mb-0">
            Built on trust, innovation and integrity, we deliver institutional grade liquidity, advanced platforms and robust risk management ensuring every client enjoys world class market access, security, and support.
        </p>
    </div>
</div>

<style>
    .mission-value {
        padding: 100px 0 90px 0;
    }

    .mission-value-hover-effect {
        position: relative;
        text-decoration: none;
        color: #000;
        font-size: 2rem;
    }

    .mission-value-hover-effect::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -20px; /* distance below text */
        width: 100%;
        height: 2px;
        background: var(--zed-primary);
        transform: scaleX(0);
        transform-origin: left; /* start from left */
        transition: transform 0.3s ease;
    }

    .mission-value .card:hover .mission-value-hover-effect::after {
        transform: scaleX(1);
    }

    .card {
        background: var(--zed-white-glass-effect);
        border: 1px solid #ddd;
        flex: 1 1 300px;
        position: relative;
        /* box-shadow: 0 2px 8px rgba(0,0,0,0.05); */
        overflow: hidden;
        border-radius: 25px;
        padding: 3rem;
    }

    .card img {
        position: absolute;
        top: 20px;
        right: 20px;
        max-width: 100px;
        opacity: 0.8;
    }

    .card p {
        font-size: 15px;
        color: #666;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .card p.bold {
        font-weight: bold;
        color: #000;
    }

    .about-mission-img{
        transition: transform 0.8s ease;
        width: 160px;
        height: 130px; 
        margin: -36px 15px;
    }

    .about-vision-img{
        transition: transform 0.8s ease;
        width: 140px;
        height: 150px; 
        margin: -45px 15px;
    }

    .mission-value .hover-translateY:hover .about-mission-img, .mission-value .hover-translateY:hover .about-vision-img{
        transform: translateY(-50px);
    }

    .hover-translateY .card{
        min-height: 450px;
    }

    .text-justify{
        text-align: justify;
    }
    @media (max-width: 768px) {
        .mission-value {
            padding: 100px 0 0 0;
        }

        .card img {
            position: static;
            display: block;
            margin: 0 auto 15px;
            max-width: 80px;
        }
        .card {
            padding: 30px !important;
            margin-bottom: 50px;
        }
    }
</style>

<section class="mission-value">
    <div class="container">
        <div class="row">
            <!-- Mission -->
            <div class="col-md-6 hover-translateY">
                <div class="position-relative set-diamond-image">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-mission.png" alt="Mission Image" class="position-absolute bottom-30 end-0 about-mission-img">
                </div>
                <div class="card">
                    <h2 class="h2 pb-5 mb-0">
                        <a href="javascript:void(0)" class="mission-value-hover-effect">
                            Mission
                        </a>
                    </h2>
                    <p class="text-gray">
                        Our mission is to deliver secure, transparent, and comprehensive capital market solutions that empower clients to trade and invest with confidence, clarity, and control.
                    </p>
                    <p class="">
                        We are committed to offering equal access to global markets across diverse asset classes, while deploying innovative platforms and technologies that enhance both execution and decision-making. By promoting financial literacy and education, we enable clients to trade smarter and with greater assurance. Through industry-leading risk management, we safeguard client interests and build sustainable relationships founded on trust, performance, and transparency.
                    </p>
                </div>
            </div>

            <!-- Vision -->
             <div class="col-md-6 hover-translateY">
                <div class="position-relative set-diamond-image">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-vision.png" alt="Vision Image" class="position-absolute bottom-30 end-0 about-vision-img">
                </div>
                <div class="card">
                    <h2 class="h2 pb-5 mb-0">
                        <a href="javascript:void(0)" class="mission-value-hover-effect">
                            Vision
                        </a>
                    </h2>
                    <p class="text-gray text-justify">
                        To be recognized as a trusted global leader in financial markets, admired for our integrity, innovation and long-term value creation.
                    </p>
                    <p class=" text-justify">
                        We aspire to become the preferred partner for individuals, corporates, and institutions worldwide, leading the way in digital transformation and next-generation trading technologies. By setting benchmarks in regulation, compliance, and ethical business practices, we aim to expand access to global markets while strengthening financial security and resilience. Ultimately, we seek to build a lasting legacy of growth and innovation that endures across generations
                    </p>
                </div>
             </div>
        </div>
    </div>

</section>

<style>
    .key-feature-service{
        background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/key-feature-service.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    
    .key-feature-service h2{
        margin-bottom: 3rem;
    }

    .set-card-border{
        padding: 15px 140px;
    }

    .set-card-border-left{
        padding: 0px 80px 80px 200px;
    }

    .set-card-border-right{
        padding: 0 200px 80px 80px;
    }

    .card-background{
        background-color: #ffffffbf;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        margin: 10px 0;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        min-height: 205px;
    }

    .card-background:hover {
        border: 1px solid var(--zed-secondary);
    }

    .text-hover-effect {
        display: inline-block;
        position: relative;
        /* margin-bottom: 15px */
    }

    .text-hover-effect::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 3px;
        background-color: var(--zed-primary);
        width: 0;
        transition: width 0.3s ease;
    }

    .card-background:hover .text-hover-effect::after {
        width: 50%;
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

    .desktop-view {
        display: flex;
    }

    .mobile-view {
        display: none;
    }

    @media (max-width: 767.9px) {

        .key-feature-service{
            background-image: none !important;
        }
        .key-feature-service h2{
            margin-bottom: 0;
        }

        .desktop-view {
            display: none;
        }

        .mobile-view {
            display: block;
        }

        .set-card-border-left, .set-card-border-right {
            padding: 0;
        }

        .text-hover-effect{
            text-align: center;
        }

        .card-background p{
            text-align: justify;
        }
    }
</style>

<section class="key-feature-service">
    <div class="container p-5">
        <div class="position-relative set-diamond-image">
            <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/2-diamonds.png" alt="Corner Image" class="position-absolute top-0 start-0 float-y" style="width: 100px; height: 70px;margin: -15px -80px; z-index: 1;">
        </div>
        <div class="row">
            <h2 class="h2 text-center">Key Features and Services</h2>
        </div>
        <div class="row desktop-view mt-5">
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">
                        Regulated & Secure Trading
                    </h5>
                    <p class="text-gray">
                        Licensed by the <b>FSC, Mauritius</b>, Zed Capital ensures fund safety, transparency, and full client protection through strict regulatory standards and secure trading systems.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">
                        Global Market Access
                    </h5>
                    <p class="text-gray">
                        Trade <b>forex, commodities, indices, stocks, and crypto CFDs</b> with tight spreads, fast execution and deep liquidity across global markets - all from one platform.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">
                        Innovative Trading Solutions
                    </h5>
                    <p class="text-gray">
                        Experience advanced trading with <b>MT5, Webtrading ,Copy Trading</b>, designed for both professional and performance-driven traders seeking flexibility and control.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">
                        Client-Centric Support
                    </h5>
                    <p class="text-gray">
                        Enjoy <b>instant deposits and withdrawals, with 24/7 multilingual assistance</b> and a dedicated team focused on delivering a seamless trading experience.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mobile-view">
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">Comprehensive Trading Platforms</h5>
                    <p class="text-gray">
                        Access leading-edge trading platforms such as Meta Trader 5 (MT5), renowned for their robust functionality, advanced charting tools, and automated trading.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">Wide Range of Instruments</h5>
                    <p class="text-gray">
                        Trade a diverse range of forex currency pairs, commodities, indices, and cryptocurrencies, catering to diverse trading strategies and preferences.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">Educational Resources</h5>
                    <p class="text-gray">
                        Enhance your trading skills with our comprehensive educational resources, including webinars, tutorials, market analysis, and expert insights.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold mb-4 text-hover-effect">Secure and Transparent</h5>
                    <p class="text-gray">
                        Operate with confidence knowing that Zed Capital International Limited adheres to strict regulatory standards and employs cutting-edge security measures.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
            text-align: start;
            font-size: 1rem !important;
        }
    }
</style>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <h2 class="h2 fw-bold mb-4">Our Commitment</h2>
            <p class="text-white m-auto fs-3">
                Trust through transparency, opportunity through innovation.
            </p>
            <p class="text-white m-auto fs-3">
                Your gateway to secure, reliable and professional global capital market solutions.
            </p>
        </div>
    </div>
</section>

<style>
    .regulatory-section {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 0;
        flex-wrap: wrap;
        position: relative;
    }

    .regulatory-left img {
        max-width: 100%;
        height: auto;
    }

    .regulatory-right .underline {
        display: block;
        width: 80px;
        height: 8px;
        background: var(--zed-primary);
        margin: 30px 0;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .regulatory-section {
            flex-direction: column;
            text-align: center;
            padding: 100px 0 20px;
        }
        .regulatory-right {
            padding-left: 0;
            margin-top: 30px;
        }
    }
</style>

<section class="regulatory-section">
    <div class="container">
        <div class="row">
            <!-- Left Image -->
            <div class="col-md-7">
                <div class="regulatory-left">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/regulatory-assurance.png" alt="Regulatory Assurance">
                </div>
            </div>
            <!-- Right Text -->
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="regulatory-right">
                    <h2 class="h1 fw-bold">Operates under strict global regulatory and compliance standards:</h2>
                    <span class="underline"></span>
                    <ul class="arrow-list">
                        <li class="text-gray">
                            Licensed and regulated by the Financial Services Commission (FSC), Mauritius.
                        </li>
                        <li class="text-gray">
                            Client deposits maintained in segregated accounts with leading international banks.
                        </li>
                        <li class="text-gray">
                            Full adherence to international financial standards and AML/CTF frameworks.
                        </li>
                        <li class="text-gray">
                            Regular independent audits and transparent reporting.
                        </li>
                    </ul>

                    <p class="mt-4">
                        This ensures that every client operates in a secure, compliant, and trustworthy environment.
                    </p>
                </div>
            </div>
        </div>

</section>

<style>
    .global-present p{
        width: 90%;
    }

    /* .card-background{
        background-color: #ffffffbf;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        margin: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    } */

    .card-background:hover {
        border: 1px solid var(--zed-secondary);
    }

    .position-relative .card-background{
        min-height: 190px;
    }
</style>

<section class="py-2 mb-5 global-present">
    <div class="container">
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-6 ">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-md-12 text-end position-absolute set-diamond-image">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/stand-by-users.png" alt="Client Icon" class="" style="width: 200px; margin: -75px -45px 0 0;">
                        </div>
                    </div>
                    <div class="card-background position-relative">
                        <!-- <div class="position-absolute top-0 end-0 mt-n4 me-n3"> -->
                        <!-- </div> -->
                        <h5 class="fw-bold mb-4">Client-Centric Approach</h5>
                        <p class="text-gray mb-0">
                            Our client support team is available around the clock to provide assistance and guidance, ensuring a seamless trading experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 ">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-md-12 text-end position-absolute set-diamond-image">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/register-note.png" alt="Client Icon" class="" style="width: 120px; margin: -75px -45px 0 0;">
                        </div>
                    </div>
                    <div class="card-background position-relative">
                        <!-- <div class="position-absolute top-0 end-0 mt-n4 me-n3"> -->
                        <!-- </div> -->
                        <h5 class="fw-bold mb-4">Regulated and Reliable</h5>
                        <p class="text-gray mb-0">
                            We are committed to maintaining the highest standards of regulatory compliance, ensuring transparency and fairness in all client interactions.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .presence-section {
        background: url('<?php echo getBaseUrl(); ?>/assets/images/background/about-us-globe-background.png') no-repeat center top / cover;
        text-align: center;
        padding: 60px 20px;
        position: relative;
        min-height: 55vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 100px;
    }

    /* White fade overlay at bottom */
    .presence-section::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: linear-gradient(to bottom, transparent, white);
        pointer-events: none;
    }

    /* Red underline under text */
    .stat-box span::after {
        content: "";
        display: block;
        width: 40px;
        height: 3px;
        background-color: var(--zed-primary);
        margin: 15px 0;
    }

    .presence-stats div{
        z-index: 1;
    }
</style>

<section class="presence-section">
    <div class="container">
        <div class="row">
            <h2 class="h2 fw-bold">The Strength of Our Global Presence</h2>
            <p class="text-gray">We connect traders worldwide with transparent pricing, advanced technology, and trusted global access.</p>
        </div>
        
        <div class="row presence-stats mt-5">
            <div class="col-md-3 col-sm-6 col-6">
                <div class="stat-box text-start">
                    <h3 class="text-red h2 fw-bold">1000+</h3>
                    <span class="text-gray">Trading Instruments</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="stat-box text-start">
                    <h3 class="text-red h2 fw-bold">12+</h3>
                    <span class="text-gray">Global Offices</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="stat-box text-start">
                    <h3 class="text-red h2 fw-bold">18+</h3>
                    <span class="text-gray">Supported Languages</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="stat-box text-start">
                    <h3 class="text-red h2 fw-bold">100%</h3>
                    <span class="text-gray">Funds Segregation & Protection</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
   
    .where-to-start{
        background-color: var(--zed-banner-bg-start);
    }

    .where-to-start .underline {
        width: 80px;
        height: 8px;
        background-color: red;
        margin: 20px auto;
    }
    .highlight-box {
        background: white;
        padding: 25px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        font-weight: 600;
        border-radius: 5px;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .where-to-start p{
            text-align: justify;
        }
    }
</style>

<section class="where-to-start">
    <div class="container py-5">
        <div class="row text-center text-md-start">
            <div class="col-12">
                <h2 class="h2 fw-bold text-center">Where It All Started</h2>
                <div class="underline mt-5"></div>
            </div>
        </div>

        <div class="row align-items-center g-4">
            <!-- Left Highlight -->
            <div class="col-md-5 text-md-start p-5">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-11">
                        <div class="highlight-box text-center px-2 px-md-5">
                            The founding members of Zed Capital began as traders themselves.
                        </div>
                        <div class="position-relative set-diamond-image">
                            <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/about-us-2-diamonds.png" alt="Corner Image" class="position-absolute bottom-30 start-0 float-y" style="width: 160px; height: 90px; margin: -65px -65px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Paragraph -->
            <div class="col-md-7">
                <p class="text-gray">
                    Their hands-on experience revealed the daily challenges, roadblocks, and pain points that traders face—issues the industry had yet to solve.
                    Driven by a vision to eliminate these obstacles, they set out to create Zed Capital: a company built by traders, for traders.
                    Zed Capital solves current trading problems and constantly innovates to stay one step ahead, delivering cutting-edge solutions to empower its clients worldwide.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .enjoy-global-market{
        padding: 3rem;
    }

    .enjoy-global-market .underline {
        width: 60px;
        height: 8px;
        background-color: red;
        margin: 20px auto;
    }

    .stock-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 70px;
        height: 40px;
        background: white;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    .stock-card {
        background-color: #f5f5f5;
        border-radius: 12px;
        padding: 40px 20px 20px;
        text-align: center;
        position: relative;
        width: 100%;
        margin: 30px 0;
    }

    .stock-icon {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        transition: transform 0.5s ease;
        width: 40px;
    }

    .stock-card:hover .stock-icon {
        transform: translateX(-50%) translateY(-20px);
    }

    .stock-text {
        font-weight: 600;
        margin-top: 20px;
    }

    .stock-text a {
        color: var(--zed-dark-text)
    }

    .stock-text:hover a {
        color: var(--zed-primary)
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .enjoy-global-market {
            padding: 0;
        }
    }

</style>

<section class="enjoy-global-market">
    <div class="container p-5">
        <!-- Heading -->
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h2 fw-bold">Enjoy access to global markets</h2>
                <div class="underline mt-4"></div>
            </div>
        </div>

        <!-- Cards -->
        <div class="row">
            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-stock.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/stock" class="text-decoration-none">
                            Stock
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-metal.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/metal" class="text-decoration-none">
                            Metal
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-indices.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/indices" class="text-decoration-none">
                            Indices
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-forex.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/forex" class="text-decoration-none">
                            Forex
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-commodities.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/commodities" class="text-decoration-none">
                            Commodities
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 col-sm-6">
                <div class="stock-card">
                    <img src="<?php echo getBaseUrl(); ?>/assets/images/about-us-crypto.png" width="50" class="stock-icon" alt="Stock Icon">
                    <div class="stock-text">
                        <a href="<?php echo getBaseUrl(); ?>/crypto" class="text-decoration-none">
                            Crypto
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</section>

<style>
  
    .value-section {
        position: relative;
        background: url('<?php echo getBaseUrl(); ?>/assets/images/background/about-us-value-background.png') no-repeat center center/cover;
        height: 500px;
        display: flex;
        align-items: end;
        justify-content: center;
        text-align: center;
        color: white;
    }

    /* Dark gradient overlay at bottom */
    .value-section::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    }

    .value-content {
        position: relative;
        z-index: 2;
    }

    .value-content h2 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .value-content p {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .value-section {
            height: 300px;
            padding: 0 20px;
        }

        .value-content h2 {
            font-size: 28px;
        }

        .value-content p {
            font-size: 14px;
        }
    }
</style>

<section class="value-section">
    <div class="value-content">
        <h2>Our Value</h2>
        <p class="mb-2">
            We offer our investors a safe and secure trading environment, supported by transparency and integrity.
        </p>
        <p class="mb-5">
            By empowering a global community of traders, we turn opportunities into confidence and success.
        </p>
    </div>
</section>

<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="800" >
    <img src="<?php echo getBaseUrl(); ?>/assets/images/diamonds/about-us-2-black-red-diamond.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 130px; height: 80px; margin: -55px 125px;">
</div>

<?php
include_once ('elements/footer.php');
?>