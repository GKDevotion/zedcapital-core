<?php
include_once ('elements/header.php');
?>

<style>
    .market-tab{
        margin-top: 120px;
    }
</style>

<div class="container py-4">

    <!-- Market Tabs -->
    <div class="market-tab d-flex justify-content-between align-items-center bg-black text-white rounded-pill px-3 flex-wrap">
        <div class="text-center flex-fill py-2">
            <a class="text-white text-decoration-none" href="american-market.php">
                Amrican Market
            </a>
        </div>
        <div class="text-center flex-fill py-2">
            <a class="text-white text-decoration-none" href="european-market.php">
                Europian Market
            </a>
        </div>
        <div class="text-center flex-fill py-2">
            <a class="text-red text-decoration-none" href="middle-eastern-market.php">
                Middle East Market
            </a>
        </div>
        <div class="text-center flex-fill py-2">
            <a class="text-white text-decoration-none" href="asian-market.php">
                Asian Market
            </a>
        </div>
    </div>

    <!-- Financial Market Section -->
    <div class="bg-light text-dark mt-4 rounded-4 p-4 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h2 class="fw-bold">Middle Estern Market</h2>
            <p class="text-secondary mb-0">U.S. stock market live Index news today</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="#" class="btn btn-danger fw-semibold rounded-pill px-4 py-2">Market live news</a>
        </div>
    </div>

</div>

<div class="container py-4 pb-0">
    <div class="position-relative">

        <!-- Custom Buttons -->
        <div id="custom-tabs">
            <button class="tab-btn active" data-url="https://s.tradingview.com/widgetembed/?symbol=EGX30">EGX30</button>
        </div>
    </div>
</div>

<style>
    
    /* Custom Tab Style */
    #custom-tabs {
      display: flex;
      gap: 10px;
      padding: 10px;
    }

    #custom-tabs button {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      background: #f1f1f1;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s;
    }

    #custom-tabs button.active {
      background: black;
      color: white;
    }

    iframe {
      border: none;
      width: 100%;
      height: 65vh; /* 80% height of the screen */
      flex-grow: 1;
    }
</style>

<div class="container py-4">
    <!-- Iframe -->
    <iframe id="marketFrame" src="https://s.tradingview.com/widgetembed/?symbol=EGX30" width="100%"></iframe>

    <script>
        // Handle button clicks
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Update iframe src
                document.getElementById('marketFrame').src = btn.dataset.url;

                // Update active button style
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
</div>

<style>
    .dual-progress {
      height: 14px;
      border-radius: 1rem;
      overflow: hidden;
    }

    .progress-sellers {
      background-color: #f44336;
    }

    .progress-buyers {
      background-color: #4285f4;
    }
</style>

<div class="container my-2 py-5">
    <div class="row mb-2">
        <div class="col text-start text-danger fw-bold">Sellers</div>
        <div class="col text-end text-primary fw-bold">Buyers</div>
    </div>

    <div class="dual-progress d-flex w-100">
        <div class="progress-sellers" style="width: 37.45%;"></div>
        <div class="progress-buyers flex-fill" style="width: 62.55%;"></div>
    </div>

    <div class="row mt-2">
        <div class="col text-start fw-bold">37.45%</div>
        <div class="col text-end fw-bold">63.55%</div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-8 mb-4 px-5">
            <h3 class="fw-bold mb-5">Why the Middle Eastern Market Matters Globally</h3>
            <p class="text-muted text-gray">
                <b class="text-black">Energy Leadership</b>: Oil and gas revenues underpin global energy security and pricing.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Sovereign Wealth Funds</b>: With trillions in assets under management, Gulf sovereign funds are among the most influential global investors.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Diversification & Reform</b>: Initiatives like Saudi Vision 2030 and the UAE’s innovation-driven strategies are creating new growth sectors.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Strategic Location</b>: Positioned between Asia, Europe, and Africa, the Middle East is a natural hub for cross-border trade and capital flows.
            </p>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 rounded-4">
                <h5 class="fw-bold mb-3">Related markets</h5>

                <!-- Market 1 -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/eu.png" class="d-none" width="24" alt="EUR/USD">
                        <div>
                            <div class="fw-semibold">EGX30</div>
                            <div class="text-muted small d-none">1.15894</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3 openLiveAccount">Trade</button>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .card-custom {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        background: #fff;
        min-height: 450px;
    }
    .img-icon {
        width: 60px;
        height: auto;
    }
    .stock-img {
        width: 75%;
        margin: 0px 0 0 100px;
    }
    .chart-img {
        width: 60px;
        height: auto;
    }
    @media (max-width: 767px) {
        .text-end-md {
            text-align: start !important;
            margin-top: 20px;
        }
    }
</style>

<div class="container py-5">
    <div class="row g-4 align-items-center">
      
        <div class="col-md-12 mb-5">
            <div class="card-custom text-dark">
                <h4 class="fw-bold text-center mb-4">Zed Capital International Ltd — Unlocking Opportunities in the Middle East</h4>

                <p class="text-mute">
                    At <b>Zed Capital International Ltd</b>, we recognize the Middle Eastern financial market as one of the fastest-growing and strategically significant regions in global finance. Anchored by energy wealth, sovereign investment funds, and ambitious economic diversification programs, the Middle East has transformed into a hub of capital markets, banking, and cross-border investment.
                </p>

                <p class="text-mute">
                    From Dubai’s global financial center to Riyadh’s rapidly expanding stock exchange, and from Abu Dhabi’s sovereign funds to Qatar’s investment hubs, the Middle East is redefining its role in the global economy.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-0">
        <h3 class="text-center my-5 fw-bold">Structure of the Middle Eastern Market</h3>
    </div>

    <div class="row">
        <!-- Stock Market Card -->
        <div class="col-lg-4">
            <div class="card-custom text-dark">
                <h3 class="fw-bold">Saudi Exchange (Tadawul)</h3>
                <p class="mt-5 text-muted w-75">
                    The biggest exchange in the Middle East, anchored by the TASI Index and Saudi Aramco.
                </p>
                <div class="d-flex align-items-center mt-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Tadawul_logo.svg" class="stock-img" alt="NYSE">
                </div>
            </div>
        </div>

        <!-- Dow Jones Description -->
        <div class="col-lg-8 px-5">
            
            <h4 class="fw-bold mt-2 mb-4">Equities (Stock Market)</h4>
            <p class="text-muted">
                The <b>Saudi Stock Exchange (Tadawul)</b> is the largest in the region, with listings including Saudi Aramco, one of the world’s most valuable companies.
            </p>
            <p class="text-muted">
                The <b>Dubai Financial Market (DFM)</b> and <b>Abu Dhabi Securities Exchange (ADX)</b> attract international investors with growing liquidity and innovation.
            </p>
            <p class="text-muted">
                The <b>Qatar Stock Exchange (QSE)</b> and <b>Kuwait Stock Exchange (Boursa Kuwait)</b> also serve as key platforms for regional and international capital.
            </p>

            <h4 class="fw-bold my-4">Fixed Income (Bond Market)</h4>
            <p class="text-muted">
                Sovereign debt issuance is increasing as Gulf states finance diversification projects.
            </p>
            <p class="text-muted">
                <b>Sukuk (Islamic bonds)</b> represent a distinctive and rapidly expanding segment, aligning investments with Sharia-compliant principles.
            </p>
            <p class="text-muted">
                The UAE, Saudi Arabia, and Qatar are now among the leading global issuers of sukuk.
            </p>
        </div>

    </div>

    <style>
    
        .info-card {
            border-radius: 15px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
        }
        .bull-bear-img {
            width: 60%;
            margin: 0 -15px 0 0;
        }
        .text-section {
            color: #555;
        }
        .fw-bold-title {
            font-weight: 700;
        }
        @media (max-width: 767.98px) {
            .text-section {
                margin-bottom: 30px;
            }
        }
    </style>

    <div class="row align-items-center g-4 mt-5">

        <!-- Left Text Section -->
        <div class="col-lg-8 px-5">
            <h4 class="fw-bold mt-2 mb-4">Currencies (Foreign Exchange)</h4>
            <p class="text-muted">
                Regional currencies such as the <b>Saudi Riyal (SAR), UAE Dirham (AED)</b>, and <b>Qatari Riyal (QAR)</b> are often pegged to the U.S. dollar, ensuring exchange rate stability.
            </p>
            <p class="text-muted">
                Dubai has positioned itself as a hub for <b>forex and commodities trading</b>, offering access to both local and international markets.
            </p>

            <h4 class="fw-bold my-4">Commodities & Derivatives</h4>
            <p class="text-muted">
                The Middle East remains the <b>global leader in oil and gas</b>, with pricing power that directly influences global energy markets.
            </p>
            <p class="text-muted">
                Exchanges such as the <b>Dubai Mercantile Exchange (DME)</b> offer futures trading on crude oil and related products.
            </p>
            <p class="text-muted">
                Increasing focus on <b>renewable energy investments</b> reflects the region’s transition toward long-term sustainability.
            </p>
        </div>

        <!-- Right Card Section -->
        <div class="col-lg-4">
            <div class="card-custom text-dark pb-0">
                <h3 class="fw-bold">Dubai Financial Market (DFM)</h3>
                <p class="mt-5 text-muted">
                    A key Gulf exchange offering equities, sukuk, bonds, and Sharia-compliant products.
                </p>
                <div class="mt-4 text-end">
                    <img src="assets/images/svg/dfm-dubai-financial-market.svg" alt="Bull and Bear" class="bull-bear-img">
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4 align-items-center mt-5">
      
        <div class="col-md-12 mb-5">
            <div class="info-card text-dark">
                <h4 class="fw-bold mt-2 mb-4">Sovereign Wealth & Private Capital</h4>
                <p class="text-muted">
                    The Middle East is home to some of the world's largest sovereign wealth funds, including.
                </p>
                    <ul>
                        <li>
                            Abu Dhabi Investment Authority (ADIA)
                        </li>
                        <li>
                            Saudi Arabia's Public Investment Fund (PIF)
                        </li>
                        <li>
                            Qatar Investment Authority (QIA)
                        </li>
                    </ul>
                <p class="text-muted">
                    These funds are reshaping global capital markets through large-scale investments in infrastructure, technology, real estate, and alternative assets.
                </p>
            </div>
        </div>
    </div>
</div>

<style>

    .opportunities-for-investors{
        background-color: var(--zed-backgound-color);
        padding: 50px 0;
    }

    .risks-considerations{
        padding: 50px 0;
    }
    .tech-feature {
        padding: 35px;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        background-color: #fff;
        margin: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .tech-feature:hover {
        border: 1px solid var(--zed-secondary);
    }
    .icon-circle i{
        font-size: 35px;
    }
    
    .opp-h-fix{
        min-height: 300px;
    }
</style>

<section class="opportunities-for-investors">
    <div class="container py-5">
        <h2 class="h4 mb-3">Opportunities for Investors</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2"><i class="text-red bi bi-cpu"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Equities</h5>
                            <p class="mb-0 small-muted">
                                Access to high-growth regional companies and IPOs, particularly in Saudi Arabia and the UAE.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2"><i class="text-red bi bi-cash"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Fixed Income</h5>
                            <p class="mb-0 small-muted">
                                Growing opportunities in both conventional bonds and Sharia-compliant instruments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2"><i class="text-red bi bi-boxes"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Real Assets</h5>
                            <p class="mb-0 small-muted">
                                Infrastructure, real estate, and energy diversification projects backed by sovereign capital
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card tech-feature p-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="icon-circle mt-2"><i class="text-red bi bi-currency-dollar"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Alternative Investments</h5>
                            <p class="mb-0 small-muted">
                                Private equity and venture capital in fintech, clean energy, and logistics
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="risks-considerations">
    <div class="container py-5 pb-0">
        <h2 class="h4 mb-3">Risks and Considerations</h2>
        <div class="row g-3 ">
            <div class="col-lg-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-shop"></i>
                    </div>
                    <h5 class="fw-bold text-center">Geopolitical Sensitivities</h5>
                    <p class="small-muted mb-0">
                        Regional conflicts and political shifts can affect investor sentiment
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-regex"></i>
                    </div>
                    <h5 class="fw-bold text-center">Oil Price Volatility</h5>
                    <p class="small-muted mb-0">
                        Energy markets remain a dominant driver of fiscal stability
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-globe"></i>
                    </div>
                    <h5 class="fw-bold text-center">Regulatory Variation</h5>
                    <p class="small-muted mb-0">
                        Differences in financial market regulations across GCC states require careful navigation
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-arrow-repeat"></i>
                    </div>
                    <h5 class="fw-bold text-center">Liquidity</h5>
                    <p class="small-muted mb-0">
                        While growing, regional markets can be less liquid compared to U.S. and European counterparts
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="p-3 bg-white">
                    <p>
                        At <b>Zed Capital International Ltd</b>, we help clients evaluate these risks while positioning to capture the region’s growing opportunities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="your-guide">
    <div class="container py-5">
        <h2 class="h4 mb-3">Zed Capital International Ltd — Your Gateway to the Middle East</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="tech-feature mb-3">
                    <h5>Regional Insight</h5>
                    <p class="small-muted mb-0">
                        Expertise in Gulf markets, exchanges, and sovereign fund strategies
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tech-feature mb-3">
                    <h5>Sharia-Compliant Solutions</h5>
                    <p class="small-muted mb-0">
                        Understanding of sukuk, Islamic finance, and investment frameworks
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="tech-feature">
                    <h5>Global Perspective</h5>
                    <p class="small-muted mb-0">
                        Bridging Middle Eastern opportunities with international investor strategies
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="p-3 bg-white">
                    <h5>Conclusion</h5>
                    <ul class="mb-0 small-muted">
                        <li>
                            The <b>Middle Eastern financial market</b> is a dynamic blend of energy wealth, sovereign investment, and economic diversification. With expanding capital markets, ambitious reforms, and global-scale sovereign wealth funds, the region is set to play an increasingly pivotal role in the international financial system.
                        </li>
                        <li>
                            At <b>Zed Capital International Ltd</b>, we provide clients with the insight, access, and strategies required to navigate this evolving market — from traditional energy-linked investments to emerging opportunities in technology, infrastructure, and sustainable finance.
                        </li>
                        <li> 
                            Zed Capital International Ltd — connecting global investors to the opportunities of the Middle East.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once ('elements/footer.php');
?>