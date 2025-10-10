<?php
include_once ('elements/header');
?>

<style>

    .about-us-header{
        padding: 120px 0 10px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/your-gateway-professional-trading.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 50vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 80px;
    }

    .about-us-header p{
        font-size: 1.3rem;
    }

    .red_line{
        width: 50px; 
        padding: 4px; 
        background-color: var(--zed-primary);
    }

    .multiple-user-with-trade{
        position: absolute;
        top: 10%;
        right: 10%;
        width: 20%;
    }

    .tools-bubble{
        position: absolute;
        width: 15%;
        left: 0;
        top: 20%;
    }

    @media (max-width: 767.98px) {
        .about-us-header{
            padding: 60px 0 !important;
        }

        .card-background p{
            width: 100%;
        }

        .global-present p{
            width: 100% !important;
        }

        .set-card-border{
            padding: 0 !important;
        }
    }
    
</style>

<section class="about-us-header">
    <div class="container py-3 ">
        <div class="row align-items-center">

            <div class="text-start">
                <img src="assets/images/tools-bubble.png" alt="Zed Capital Video" class="img-fluid tools-bubble"  data-aos="fade-up" data-aos-delay="800"/>
            </div>

            <div class="text-end">
                <img src="assets/images/multiple-user-with-trade.png" alt="Zed Capital Video" class="img-fluid multiple-user-with-trade"  data-aos="fade-up" data-aos-delay="800"/>
            </div>

            <div class="col-12 position-relative">
                
                <div class="d-flex align-items-center mb-5">
                    <h1 class="mb-1 fw-bold">About Zed Capital International Limited</h1>
                </div>
                

                <div class="red_line"></div>
                <p class="text-muted text-gray mt-5">
                    Zed Capital International Limited is a trusted name in the forex brokerage industry, committed to providing exceptional trading services and investment opportunities to traders worldwide. As a leading forex broker, we combine extensive market expertise with advanced technology to offer a secure and transparent trading environment. Zed Capital International Limited is a trusted name in the forex brokerage industry,
                </p>

                <img src="assets/images/toosl-curve-line.png" alt="Wave" style="width: 200px;">

                <p class="text-back mt-4">
                    With a <strong>global presence</strong> and a diverse client base, we offer localized services and insights to meet the unique needs of traders worldwide.
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
</style>

<section class="py-5 global-present">
    <div class="container">
        <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6 ">
            <div class="position-relative">
                <div class="row">
                    <div class="col-md-12 text-end position-absolute">
                        <img src="assets/images/stand-by-users.png" alt="Client Icon" class="" style="width: 200px; margin: -75px -45px 0 0;">
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
                    <div class="col-md-12 text-end position-absolute">
                        <img src="assets/images/register-note.png" alt="Client Icon" class="" style="width: 110px; margin: -75px -45px 0 0;">
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
    .our-commitment-bg{
        background-image: url('assets/images/dotted-bg.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    .our-commitment-text-bg{
        background-color: #f92828; 
        clip-path: polygon(50px 0%, 100% 0%, 100% 100%, 0% 100%);
    }
</style>

<section class="position-relative p-0" style="background-color: #fdfdfd;">
    <div class="container-fluid px-0">
        <div class="row gx-0 align-items-center">

            <!-- Left Column -->
            <div class="col-lg-4 text-center text-lg-start px-5 py-4 our-commitment-bg">
                <h3 class="fw-bold mb-0" >Our Commitment<br>to Traders</h3>
            </div>

            <!-- Right Column with Red Background & Angled Shape -->
            <div class="col-lg-8 position-relative text-white px-4 py-4 our-commitment-text-bg">
                <ul class="mb-0 ps-5 px-5 w-75">
                    <li>
                        Stocks, also known as equities or shares, represent ownership in a company. When you own stock in a company, you own a portion of that company's assets and earnings proportional to the number of shares you hold.
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<style>
    .key-feature-service{
        background-image: url('assets/images/background/key-feature-service.png');
        background-size: cover;
        background-position: center;
        background-repeat: round;
        position: relative;
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
</style>

<section class="key-feature-service">
    <div class="container p-5">
        <div class="row p-5">
            <h2 class="fw-bold text-center">Key Features and Services</h2>
        </div>
        <div class="row">
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold w-75 mb-4 text-hover-effect">Comprehensive Trading Platforms</h5>
                    <p class="text-gray">
                        Access leading-edge trading platforms such as Meta Trader 5 (MT5), renowned for their robust functionality, advanced charting tools, and automated trading.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold w-75 mb-4 text-hover-effect">Wide Range of Instruments</h5>
                    <p class="text-gray">
                        Trade a diverse range of forex currency pairs, commodities, indices, and cryptocurrencies, catering to diverse trading strategies and preferences.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-left">
                <div class="card-background">
                    <h5 class="fw-bold w-75 mb-4 text-hover-effect">Educational Resources</h5>
                    <p class="text-gray">
                        Enhance your trading skills with our comprehensive educational resources, including webinars, tutorials, market analysis, and expert insights.
                    </p>
                </div>
            </div>
            <div class="col-md-6 set-card-border-right">
                <div class="card-background">
                    <h5 class="fw-bold w-75 mb-4 text-hover-effect">Secure and Transparent</h5>
                    <p class="text-gray">
                        Operate with confidence knowing that Zed Capital International Limited adheres to strict regulatory standards and employs cutting-edge security measures.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once ('elements/footer');
?>