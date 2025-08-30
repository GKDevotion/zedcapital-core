<?php
include_once ('elements/header.php');
?>

<style>
    .section-forex {
        background: #f9f9f9;
        padding: 100px;
        position: relative;
        overflow: hidden;
        background-image: url('assets/images/background/tools-resources.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        
    }

    .subheading {
        color: var(--zed-primary);
        font-weight: 400;
        font-size: 1.5rem;
    }

    .main-heading {
        font-weight: 600;
        font-size: 3.5rem;
        color: var(--zed-green-text);
        line-height: 1.2;
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

    .forex-images {
        margin-top: 40px;
    }

    .forex-images img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        object-fit: cover;
    }

    .mt-50 {
        margin-top: -50px;
    }

    .mb100{
        margin-bottom: 100px;
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
            <div class="col-md-6 text-center text-md-start mt-100">
                <div class="subheading">We are Trading company</div>
                <h2 class="main-heading">
                    Forex Trading<br>
                    <span class="highlight">Tools & Resources</span><br>
                    Overview
                </h2>
                <p class="description">
                    Forex trading requires access to various tools and resources to make informed decisions and execute trades effectively.
                    Here are some essential tools and resources commonly used by forex traders.
                </p>
            </div>

            <div class="col-md-6 d-flex justify-content-center forex-images flex-wrap gap-3">
                <div class="col" data-aos="fade-up" data-aos-duration="600">
                    <img src="assets/images/forex-trade-header-1.png" alt="Trading tool 1" class="mt-50">
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="800">
                    <img src="assets/images/forex-trade-header-2.png" alt="Trading tool 2" class="mt-5">
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000">
                    <img src="assets/images/forex-trade-header-3.png" alt="Trading tool 3" class="mt-50">
                </div>
            </div>
        </div>
        <div class="row position-absolute" style="margin-top: -80px;">
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
                <img src="assets/images/tools-bubble.png" alt="Calendar Icon" class="w-50" />
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="700">
                <img src="assets/images/toosl-curve-line.png" alt="Calendar Icon" class="w-50 mt-5" />
            </div>
        </div>
    </div>
</section>

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
                            <p>
                                <strong>Meta Trader 4/5:</strong> 
                                <span class="text-gray">" platforms offering comprehensive trading tools, indicators, and automated trading capabilities.</span>
                            </p>
                        </div>
                        <img src="assets/images/trading-platform.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
                            <strong>cTrader:</strong> 
                            <span class="text-gray">"Known for its intuitive interface and advanced charting tools.</span>
                        </p>
                        <p>
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
                            <p>
                                <strong>TradingView:</strong> 
                                <span class="text-gray">"Web-based platform with powerful charting tools, social trading features, and a wide range of technical indicators. </span>
                            </p>
                        </div>
                        <img src="assets/images/charting-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
                            <strong>MetaTrader Charts:</strong> 
                            <span class="text-gray">"Integrated into MT4/MT5 platforms, providing customizable charting and technical analysis tools.</span>
                        </p>
                        <p>
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
                            <p>
                                <strong>Forex Factory:</strong> 
                                <span class="text-gray">"Offers an economic calendar, market news, and forums for trader discussions.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/news-calender.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
                            <strong>Investing.com:</strong> 
                            <span class="text-gray">"Provides real-time news, analysis, economic calendar, and customizable alerts.</span>
                        </p>
                        <p>
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
                            <p>
                                <strong>Babypips:</strong> 
                                <span class="text-gray">"Offers a comprehensive beginner's guide to forex trading, educational articles, and a community forum. </span>
                            </p>
                            
                        </div>
                        <img src="assets/images/education-resources.png" alt="Book Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
                            <strong>Investopedia:</strong> 
                            <span class="text-gray">"Provides articles, tutorials, and a dictionary of financial terms relevant to forex trading.</span>
                        </p>
                        <p>
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
                            <p>
                                <strong>Stop Loss/Take Profit Orders:</strong> 
                                <span class="text-gray">"Automated orders to limit losses and secure profits.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/risk-management.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
                            <strong>Position Size Calculators:</strong> 
                            <span class="text-gray">"Tools to determine the appropriate position size based on risk tolerance and account size.</span>
                        </p>
                        <p>
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
                            <p>
                                <strong>Expert Advisors (EAs):</strong> 
                                <span class="text-gray">"Automated trading systems developed within MT4/MT5 platforms.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/charting-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
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
                            <p>
                                <strong>Autochartist:</strong> 
                                <span class="text-gray">"Provides automated technical analysis, pattern recognition, and trading signals.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/technocal-analysis.png" alt="Calendar Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
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
                            <p>
                                <strong>Expert Advisors (EAs):</strong> 
                                <span class="text-gray">"Automated trading systems developed within MT4/MT5 platforms.</span>
                            </p>
                            
                        </div>
                        <img src="assets/images/community-forum.png" alt="Book Icon" class="" />
                    </div>
                    <div class="col-12">
                        <p>
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

<section class="mb-5">
    <div class="container">
        <div class="start-box" data-aos="fade-up" data-aos-duration="800">
            <div class="black-box d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="mb-3 mb-md-0 w-50">
                    <h4>Tools & <br>Resources</h4>
                </div>
                <div>
                    <p>
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

<?php
include_once ('elements/footer.php');
?>