<?php
include_once ('elements/header.php');
?>

<style>
    .zed-acedamy-header{
        background-color: var(--zed-primary);
        background-image: url('assets/images/background/zed-academy-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 70vh;
        margin-top: 120px;
    }

    .divider-back {
        width: 75px;
        background-color: var(--zed-dark-text);
    }

    @media (max-width: 767.98px) {
        .set-diamond-image{
            display: none;
        }

    }
</style>

<section class="py-5 zed-acedamy-header">
    <div class="container">
        <div class="row align-items-center" style="min-height: 50vh;">
        
            <!-- Text Column -->
            <div class="col-md-6 text-white align-items-center" data-aos="fade-up" data-aos-delay="800">
                <p class="" style="font-size: 1.6rem">Zed Academy</p>
                <h2 class="fw-bold h2 mb-5">Learn. Trading. <br>Success.</h2>
                <div class="p-1 divider-back" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 w-75" data-aos="fade-up" data-aos-delay="800">
                Access structured video courses led by experienced professionals covering 
                technical analysis, risk management, trading strategies, market psychology and more.
                </p>
            </div>

            <!-- Video Column -->
            <div class="col-md-6 text-center position-relative d-none d-lg-block" data-aos="fade-up" data-aos-delay="800">
                <img src="assets/images/sharpen-your-trading.png" alt="Zed Capital Video" class="d-none img-fluid w-100"  data-aos="fade-up" data-aos-delay="800"/>
                <a href="#" class="position-absolute top-50 start-0 translate-middle" data-aos="fade-up" data-aos-delay="800">
                <div class="p-0" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/play-icon.png" alt="Zed Capital Video" class="img-fluid w-25" />
                </div>
                </a>
            </div>
        </div>
    
    </div>
</section>

<style>
    .zed-academy-header{
        background-color: #ffffffbf;
        padding: 40px 50px;
        /* opacity: 0.7; */
        display: flex;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 25px;
        border: 1px solid var(--zed-border-color);
        margin-top: -125px;
    }

    .bg-transparent img{
        width: 75%;
    }
    
    .knowledge-trading{
        padding: 120px 0; /* Adjust padding as needed */
        /* background-image: url('assets/images/background/earn-certificate.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; */
        position: relative;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .knowledge-trading p{
        width: 75% !important;
    }

    .knowledge-tradinng-icon img{
        margin-top: -70px;
        width: 300px !important;
    }

    @media (max-width: 767.98px) {
        .knowledge-trading p{
            width: 100% !important;
        }
    }
</style>

<section class="py-5 pb-0 knowledge-trading">
    <div class="container text-start">
        <div class="row zed-academy-header" data-aos="fade-up" data-aos-delay="800">
            <h5 class="fw-bold mb-4" data-aos="fade-up" data-aos-delay="800">Knowledge first Smart trading next</h5>
            <p class="mb-0 text-gray">
                At <strong>Zed Capital</strong>, learning comes first. Whether you're just starting out or looking to refine your skills, our courses provide practical knowledge and expert guidance to help you trade more confidently.
            </p>
        </div>
    </div>
</section>

<div class="container position-relative text-end knowledge-tradinng-icon">
    <div class="row">
        <div class="position-absolute set-diamond-image" data-aos="fade-up" data-aos-delay="100" style="z-index: -1;">
            <img src="assets/images/knowledge-tradinng.png" alt="Android" class=""/>
        </div>
    </div>
</div>

<style>
    .trading-guide-section{
        padding: 120px 0 0 0;
    }
    .highlight-line {
        width: 50px;
        height: 8px;
        background-color: red;
        margin: 25px auto;
    }

    .trading-image {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
    }

    .trading-caption {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: rgba(0, 0, 0, 0.6);
        padding: 10px 15px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        font-size: 1rem;
    }

    .read-more {
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        color: black;
        text-decoration: none;
    }

    .read-more svg {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .read-more:hover svg {
        transform: translateX(5px);
    }

    .trading-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .caption {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 15px;
        color: #fff;
        font-weight: bold;
        border-radius: 4px;
    }

    .read-more {
        color: #000;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .read-more svg {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .read-more:hover svg {
        transform: translateX(5px);
    }
</style>

<section class="trading-guide-section">
    <div class="container pb-0">
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="800">
        <h2 class="fw-bold">Trading Guide for Beginner</h2>
        <div class="highlight-line"></div>
        <p class="fw-semibold mb-0">Kickstart Your Trading Journey!</p>
        <p class="text-muted">
            This guide is the perfect starting point whether you’re entirely new to trading or looking to strengthen your fundamentals.
        </p>
        </div>

        <div class="row align-items-center pb-5">
        <!-- Left Text -->
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="800">
                <div class="mb-4" >
                    <h6 class="fw-bold"># Asset Class</h6>
                    <p class="text-muted">A category of financial instruments with similar characteristics, such as stocks, bonds, or commodities, governed by the same regulatory framework.</p>
                </div>
                <div class="mb-4" >
                    <h6 class="fw-bold"># Aussie (Ozzie)</h6>
                    <p class="text-muted">A commonly used term for the AUD/USD currency pair, known for its liquidity and connection to commodity markets.</p>
                </div>
                <div class="mb-4" >
                    <h6 class="fw-bold"># Acquisition</h6>
                    <p class="text-muted">The process where one company takes control of another, often as part of a growth or expansion strategy.</p>
                </div>
                <a href="#" class="read-more">
                    Read More 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.354.498.498 0 0 1-.146.354l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>

        <!-- Right Image -->
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="trading-image text-end" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/trading-platform-guidelines.png" alt="Trading Platform Guidelines" class="img-fluid" style="width: 85%;">
                    <!-- <div class="trading-caption">Trading Platform Guidelines</div> -->
                </div>
            </div>
        </div>

        <div class="row align-items-center pt-5">
        <!-- Left Text -->
            <div class="col-lg-5 mt-4 mt-lg-0" >
                <div class="trading-image text-start" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/trading-terminology.png" alt="Trading Terminology" class="img-fluid" style="width: 85%;">
                    <!-- <div class="trading-caption">Trading Platform Guidelines</div> -->
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="800">
                <div class="mb-4" >
                    <h6 class="fw-bold"># Asset Class</h6>
                    <p class="text-muted">A category of financial instruments with similar characteristics, such as stocks, bonds, or commodities, governed by the same regulatory framework.</p>
                </div>
                <div class="mb-4" >
                    <h6 class="fw-bold"># Aussie (Ozzie)</h6>
                    <p class="text-muted">A commonly used term for the AUD/USD currency pair, known for its liquidity and connection to commodity markets.</p>
                </div>
                <div class="mb-4" >
                    <h6 class="fw-bold"># Acquisition</h6>
                    <p class="text-muted">The process where one company takes control of another, often as part of a growth or expansion strategy.</p>
                </div>
                <a href="#" class="read-more" >
                    Read More 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.354.498.498 0 0 1-.146.354l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>
            
        </div>
    </div>
</section>

<style>
    .btn-red {
        background-color: var(--zed-primary);
        color: white;
        border-radius: 30px;
        padding: 10px 25px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    .btn-red:hover {
        background-color: #c62828;
        color: white;
    }
    .section-title {
        font-weight: bold;
        font-size: 2rem;
    }

    .divider {
        width: 80px;
        height: 8px;
        background-color: var(--zed-primary);
        margin: 40px 0;
    }

    .lesson-image {
        width: 100%;
        height: auto;
    }
</style>

<div class="container py-5">
    <div class="row align-items-center">
      <!-- Text Section -->
        <div class="col-lg-7 mb-4 mb-lg-0 p-0">
            <img src="assets/images/bit-size-lesson.png" alt="Beginner Trading Course" class="lesson-image">
        </div>

      <!-- Image Section -->
        <div class="col-lg-5 text-start" data-aos="fade-up" data-aos-delay="800">
            <h2 class="h2 fw-bold" data-aos="fade-up" data-aos-delay="200">Learn in <br> Bite-Sized Lessons</h2>
            <div class="divider" data-aos="fade-up" data-aos-delay="300"></div>
            <h6 class="fw-bold" data-aos="fade-up" data-aos-delay="400">Beginner Trading Course</h6>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="500">
                Start trading with ease! Learn the basics in quick, simple lessons designed for beginners.
            </p>
            <a href="#" class="btn-red" data-aos="fade-up" data-aos-delay="600">
                See All Beginner Courses
            </a>
        </div>
    </div>
</div>

<style>
    .exlusive-webinars{
        background-color: var(--zed-banner-bg-start);
    }

    .exlusive-webinars .divider {
        margin: 35px auto;
    }

    .exlusive-webinars .learn-card .divider {
        margin: 5px 0;
        width: 50px;
        height: 4px;
        background-color: var(--zed-border-color);
    }

    .feature-card {
        background: #fff;
        border-radius: 15px;
        padding: 35px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--zed-border-color);
        height: 100%;
    }
    .feature-card img {
        width: 80px;
        height: auto;
        margin: -15px -15px;
        position: absolute;
    }
    .feature-card h5 {
        font-weight: bold;
        letter-spacing: inherit;
    }
    .feature-card p {
        color: #777;
        margin: 20px 0px;
    }
</style>

<section class="exlusive-webinars p-3">
    <div class="container py-5 text-center">
        <h2 class="fw-bold h2" data-aos="fade-up" data-aos-delay="800">Zed Capital Exclusive Webinars</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="800">
            are meticulously curated to help you achieve trading excellence and unlock market opportunities.
        </p>
        <div class="divider" data-aos="fade-up" data-aos-delay="800"></div>
        <h5 class="fw-bold mb-4" data-aos="fade-up" data-aos-delay="800">You Will Learn</h5>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="feature-card learn-card text-start">
                    <div class="row position-relative">
                        <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                            <h5>Global Market Hotspot Analysis</h5>
                        </div>
                        <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/images/global-market-analys.png" alt="Global Market">
                        </div>
                    </div>
                    <div class="divider" data-aos="fade-up" data-aos-delay="400"></div>
                    <p data-aos="fade-up" data-aos-delay="400">Latest trends in U.S. stocks, forex, and gold</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature-card learn-card text-start">
                    <div class="row position-relative" >
                        <div class="col-md-7" data-aos="fade-up" data-aos-delay="600">
                            <h5>Top Trading Strategy Tips</h5>
                        </div>
                        <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="600">
                            <img src="assets/images/top-trading-tips.png" alt="Trading Tips">
                        </div>
                    </div>
                    <div class="divider" data-aos="fade-up" data-aos-delay="600"></div>
                    <p data-aos="fade-up" data-aos-delay="600">How to accurately capture buy and sell points?</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature-card learn-card text-start">
                    <div class="row position-relative">
                        <div class="col-md-7" data-aos="fade-up" data-aos-delay="800">
                            <h5>In-depth Case Study Analysis</h5>
                        </div>
                        <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="800">
                            <img src="assets/images/depth-case-analysis.png" alt="Case Study">
                        </div>
                    </div>
                    <div class="divider" data-aos="fade-up" data-aos-delay="800"></div>
                    <p data-aos="fade-up" data-aos-delay="800">Real transaction data review, learning advanced trading strategies</p>
                </div>
            </div>
        </div>

        <div class="mt-5 text-start">
            <h6 class="fw-bold" data-aos="fade-up" data-aos-delay="500">Suitable for:</h6>
            <ul class="text-muted">
                <li data-aos="fade-up" data-aos-delay="600"><strong>Beginner Traders:</strong> Learn market analysis from scratch</li>
                <li data-aos="fade-up" data-aos-delay="700"><strong>Experienced Investors:</strong> Optimize your trading strategies</li>
                <li data-aos="fade-up" data-aos-delay="800"><strong>Institutions & Professionals:</strong> Gain deeper insights into market dynamics</li>
            </ul>
        </div>
    </div>
</section>

<style>

    #professional_getway{
        padding: 50px 0; /* Adjust padding as needed */
        background-color: #fff;
        /* background-image: url('assets/images/background/your-gateway-professional-trading.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; */
        position: relative;
    }

    #professional_getway .d-grid img{
        margin-top: -55px;
    }

    @media (max-width: 767.98px) {
        
        .zed-academy-header{
            padding: 25px !important;
        }

    }
</style>

<section class="" id="professional_getway">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="position-absolute w-100 text-end set-diamond-image">
                <img src="assets/images/background/redgreen-trading-candles-white-studio.png" alt="Candle Studio" style="width: 25%; margin-top: -200px;">
            </div>
            <!-- Left Column -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="h2 fw-bold mb-5" data-aos="fade-up" data-aos-delay="800">Your gateway to professional trading</h2>
                <div class="divider"></div>
                <p class="text-muted mt-5 text-gray aos-init" data-aos="fade-up" data-aos-delay="800">
                    At ZED Academy, we provide a structured and in-depth trading education designed to help you develop real-world trading skills, gain confidence, and trade like a professional.
                    At ZED Academy, we provide a structured and in-depth trading education designed to help you develop real-world trading skills, gain confidence, and trade like a professional.
                </p>
                <ul class="mt-4 aos-init" data-aos="fade-up" data-aos-delay="800">
                    <li>Complete all course videos</li>
                    <li>Pass the final exam</li>
                    <li>Receive your Zed Academy Certificate of Completion</li>
                </ul>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="d-grid gap-3" data-aos="fade-up" data-aos-delay="800">
                
                    <!-- Card 1 -->
                    <div class="d-flex justify-content-between align-items-start p-4 border rounded-4" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h5 class="fw-bold">Expert-led education</h5>
                            <p class="text-muted mb-0">
                                Our courses are designed and taught by top financial traders, analysts, and market strategists with years of professional experience in the financial markets.
                            </p>
                        </div>
                        <img src="assets/images/expert-led-education.png" alt="Expert Icon" class="w-25">
                    </div>

                    <!-- Card 2 -->
                    <div class="d-flex justify-content-between align-items-start p-4 border rounded-4" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <h5 class="fw-bold">Learn at your own pace</h5>
                            <p class="text-muted mb-0">
                                All courses are 100% online and mobile-friendly, allowing you to learn anytime, anywhere, on any device. Our platform is optimized for a seamless experience.
                            </p>
                        </div>
                        <img src="assets/images/learn-at-your-own-pace.png" alt="Chart Icon" class="w-25">
                    </div>

                    <!-- Card 3 -->
                    <div class="d-flex justify-content-between align-items-start p-4 border rounded-4 aos-init" data-aos="fade-up" data-aos-delay="600">
                        <div>
                            <h5 class="fw-bold">Certification &amp; credibility</h5>
                            <p class="text-muted mb-0">
                                Boost your trading credibility with a Zed Academy Certificate of Completion. Our certification validates your knowledge and skills, making it a valuable addition to your career enhancement.
                            </p>
                        </div>
                        <img src="assets/images/certification.png" alt="Certificate Icon" class="w-25">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .get-started {
        padding: 120px 0;
        background-image: url('assets/images/background/zed-acadamy-get-started.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
    }

    .get-started .divider {
        background-color: black;
    }

    .btn-start {
        background-color: white;
        color: #e6392f;
        border-radius: 25px;
        font-weight: bold;
        padding: 10px 25px;
        border: none;
        transition: 0.3s;
    }

    .btn-start:hover {
        background-color: #f8d7da;
    }
    
    img {
        max-width: 100%;
        height: auto;
    }
</style>

<section class="get-started">
    <div class="container">
        <div class="row  align-items-center">
        
            <!-- Left Text -->
            <div class="col-md-6 align-items-center">
                <h2 class="fw-bold h2">Get Started!</h2>
                <div class="divider"></div>
                <p class="mb-0" style="font-size: 1.5rem;">Sign up and access the Global Markets<br>in less than 3 minutes</p>
            </div>

            <!-- Right Image & Button -->
            <div class="col-md-6 text-end align-items-center">
                <p class="mb-2" style="font-size: 1.5rem;">
                    Try Free <br>
                    Demo Account
                </p>
                <button class="btn-start" data-aos="fade-up" data-aos-delay="800" style="padding: 10px 40px; font-size: 1.5rem; margin-top: 20px; font-weight: 500;">Start Trading</button>
            </div>

        </div>

        <div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-delay="800">
            <img src="assets/images/diamonds/common-2-diamonds.png" alt="Corner Image" class="position-absolute bottom-30 end-0 float-y" style="width: 150px;height: 120px;margin: 50px 75px;">
        </div>
    </div>
</section>

<?php
if( false ){
    $paramArr = [
        'name' => "Stock"
    ];

    $videoArr = [
        [
            'id' => "iBZcDvw8Fi8",
            "title" => "Forex Trading for Beginners (Full Course)",
            "description" => "Forex trading is a massively profitable skill that can bring you time, location & financial freedom when mastered.",
        ],
        [
            'id' => "9tCR16dsb6M",
            "title" => "Forex Course for Beginners 2025",
            "description" => "Beginner to Profitable: Full Trading Roadmap (Step-by-Step Guide).",
        ],
        [
            'id' => "eynxyoKgpng",
            "title" => "The Only Technical Analysis Video You Will Ever Need...",
            "description" => "Understanding how to implement technical analysis correctly in your trading is one of the most important things you need to create a profitable trading career. ",
        ]
    ];

    include_once ('elements/explore-more-about.php');
}
?>

<style>
    .video-thumbnail {
        position: relative;
        text-align: center;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
    }
    .video-thumbnail img {
        max-width: 100%;
        border-radius: 25px;
    }
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255,255,255,0.85);
        border-radius: 50%;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: #e63946;
        cursor: pointer;
        transition: all 0.3s;
    }
    .play-btn:hover {
        background: #e63946;
        color: #fff;
    }

    .zed-academy-video-thumbnail .card-img-top {
        height: 450px;
        object-fit: cover;
    }
</style>
<div class="container py-5">
    <div class="row align-items-center mt-5">
        <!-- Left Content -->
        <div class="col-lg-4">
            <h2 class="fw-bold">Explore more about Stock with Zed Capital</h2>
            <div class="mt-2 mb-3" style="width:50px; height:4px; background:#e63946;"></div>
            <p class="text-muted">
                Zed Capital provides several resources to help you better understand Zed products 
                and services, markets and technology.
            </p>
            <a href="#" class="btn btn-outline-dark d-inline-flex align-items-center">
                Learn more 
            <span class="ms-2 bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width:25px; height:25px;">
                →
            </span>
            </a>
        </div>

        <!-- Right Video Section -->
        <div class="col-lg-8">
            <div class="video-thumbnail zed-academy-video-thumbnail" data-video="https://www.youtube.com/embed/iBZcDvw8Fi8?autoplay=1" data-title="Forex Trading for Beginners (Full Course)">
                <img src="https://img.youtube.com/vi/iBZcDvw8Fi8/hqdefault.jpg" alt="iBZcDvw8Fi8" class="card-img-top">
                <span class="play-btn">▶</span>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.video-thumbnail').forEach(el => {
            el.addEventListener('click', function () {
            const videoUrl = this.getAttribute('data-video');
            const videoTitle = this.getAttribute('data-title');
            this.innerHTML = `<iframe width="100%" height="450" style="border-radius: 25px;" src="${videoUrl}" 
                title="${videoTitle}" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>`;

            this.style = "border: 0";
            });
        });
    </script>

</div>
<div class="position-relative set-diamond-image" data-aos="fade-up" data-aos-duration="850">
    <img src="assets/images/diamonds/silver-diamond.png" alt="Corner Image" class="position-absolute bottom-0 end-0 float-y" style="width: 80px; height: 50px; margin: -30px 200px;">
</div>

<?php
include_once ('elements/footer.php');
?>