<?php
include_once ('elements/header.php');
?>

<style>
    .why-zed-capital-header {
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/why-zed-header-background.png');
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

    .why-zed-capital-header p{
        font-size: 1.3rem;
    }

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

    .trust-text {
        width: 85%;
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
    }
    
</style>

<section class="why-zed-capital-header" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 text-md-start text-center" data-aos="fade-up" data-aos-duration="800">
                <h1 class="fw-bold text-white w-75">
                    Why Choose Zed Capital
                </h1>
                <p class="text-white">
                    Get the tools you need to succeed in the market.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="" >
    <div class="container">
        <div class="row why-zed-capital-bullet-point">
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/regulated-stp-broker.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Regulated STP Broker</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/razor-thin-spread.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Razor-Thin Spread</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/ultra-fast-execution.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>Ultra-Fast Execution</span>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 px-3 py-3 ml-4" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/24-7-support.png" class="position-absolute" alt="Windows">
                <div class="w-50">
                    <span>24x7 <br>Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="position-relative set-diamond-image">
            <img src="assets/images/diamonds/why-zed-3-diamonds.png" alt="Corner Image" class="position-absolute top-0 end-0 float-y" style="width: 150px; height: 100px; margin: -60px -75px 0 0;">
        </div>
        <div class="row trust-section align-items-center">
            <div class="col-md-6"  data-aos="fade-up" data-aos-delay="500">
                <h2 class="h2">A Broker You Can Trust</h2>
                <div class="underline"></div>
                <p class="trust-text text-gray"  data-aos="fade-up" data-aos-delay="500">
                    When placing your money with a broker, you need to make sure your broker is secure and can endure through good and bad times in the broader financial markets. Our strong capital position, conservative balance sheet and automated risk controls are designed to protect Zed capital from major market events that can threaten the stability of financial institutions.
                </p>
            </div>
            <div class="col-md-6 trust-image text-center" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/trust-lock.png" alt="Lock Security Image" class="w-100">
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
                        <img src="assets/images/education-daily-analysis.png" alt="Education">
                    </div>
                    <div class="text-center feature-title">Education and<br>Daily Analytics</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="300">
                    <div class="feature-icon" >
                        <img src="assets/images/news-live-market.png" alt="Insight News">
                    </div>
                    <div class="text-center feature-title">Insight News and<br>Live Market</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="500">
                    <div class="feature-icon" >
                        <img src="assets/images/account-setup.png" alt="Account Setup">
                    </div>
                    <div class="text-center feature-title">5-Minute<br>Account Setup</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="700">
                    <div class="feature-icon" >
                        <img src="assets/images/instant-deposite.png" alt="Instant Deposit">
                    </div>
                    <div class="text-center feature-title">Instant<br>Deposit</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="900">
                    <div class="feature-icon" >
                        <img src="assets/images/withdrawals.png" alt="Withdrawals">
                    </div>
                    <div class="text-center feature-title">Withdrawals<br>Within 24 Hours</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1100">
                    <div class="feature-icon" >
                        <img src="assets/images/competitive-commission.png" alt="Commission">
                    </div>
                    <div class="text-center feature-title">Competitive<br>Commission</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1300">
                    <div class="feature-icon" >
                        <img src="assets/images/top-tier-liquidity.png" alt="Liquidity">
                    </div>
                    <div class="text-center feature-title">Top-Tier<br>Liquidity Provider</div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-sm-6 px-3 py-3">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="feature-icon" >
                        <img src="assets/images/user-friendly.png" alt="Platform">
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
            <h2 class="h2 fw-bold">Professional Pricing - Maximize Your Returns</h2>
            <div class="underline"></div>

            <div class="row">
                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-gray" style="width: 90%;">Commissions start at USD 0 on US listed stocks and ETFs,² with low commissions on other products. There are no added spreads, ticket charges or account minimums.</p>
                    <a href="#" class="a-link-move-icon">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>

                    <p class="mt-4 text-gray" style="width: 85%;">Earn interest rates of up to USD 3.83% on instantly available cash.</p>
                    <a href="#" class="a-link-move-icon">Compare Interest Rates <i class="fas fa-chevron-circle-right"></i></a>
                </div>

                <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-gray" style="width: 90%;">Commissions start at USD 0 on US listed stocks and ETFs,² with low commissions on other products. There are no added spreads, ticket charges or account minimums.</p>
                    <a href="#" class="a-link-move-icon">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>

                    <p class="mt-4 text-gray" style="width: 85%;">Earn interest rates of up to USD 3.83% on instantly available cash.</p>
                    <a href="#" class="a-link-move-icon">Compare Interest Rates <i class="fas fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .on-demand-section {
        padding: 80px 0;
    }

    .learning-text {
        color: #666;
        font-size: 1rem;
        line-height: 1.7;
        width: 75%;
    }

    .btn-learn {
        margin-top: 20px;
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 15px;
        background-color: white;
        border: 1px solid var(--zed-border-color);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
        text-decoration: none;
        color: #000;
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

<section class="on-demand-section">
    <div class="container-fluid learning-section py-5 pt-0">
        <div class="row align-items-center">
            <div class="col-md-7 col-12 learning-div mb-4 mb-md-0 p-5" data-aos="fade-up" data-aos-duration="800">
                <img src="assets/images/on-demand-learning.png" alt="Tablet with chart" class="learning-img">
            </div>
            <div class="col-md-5 col-12">
                <h2 class="h2 learning-heading" data-aos="fade-up" data-aos-duration="800">
                    <p>On-Demand Educational Resources - Never Stop Learning</p>
                </h2>
                <div class="underline"></div>
                <p class="learning-text" data-aos="fade-up" data-aos-duration="800">
                    Zed Capital provides several resources to help you better understand Zed products and services, markets and technology.
                </p>

                <div class="text-start">
                    <button class="btn-learn btn " data-aos="fade-up" data-aos-duration="800">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </button>
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

<div class="container py-5 pt-0">
    <h2 class="h2 section-title">Our latest wins</h2>
    <p class="text-center text-gray">
      Trade with confidence when you trade with Zed Capital,<br class="d-none d-md-block" />
      an award-winning global broker.
    </p>

    <div class="row py-5 pt-0 text-center">
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="assets/images/award-1.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="600">
                Most Trusted <br> Broker
            </p>
            <img src="assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="900">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="assets/images/award-2.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="600">
                Most Trusted <br> Broker
            </p>
            <img src="assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="900">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="assets/images/award-3.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="300">
                Most Trusted <br> Broker
            </p>
            <img src="assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="800">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="award-badge" data-aos="fade-up" data-aos-duration="300">
                <img src="assets/images/award-4.png" class="img-fluid w-75">
            </div>
            <p class="fw-bold text-center py-2 pb-0" data-aos="fade-up" data-aos-duration="300">
                Most Trusted <br> Broker
            </p>
            <img src="assets/images/award-bottom-design.png" class="img-fluid w-50 award-design" style="margin-top: -35px;" data-aos="fade-up" data-aos-duration="800">
        </div>
    </div>
</div>

<?php
include_once ('elements/footer.php');
?>