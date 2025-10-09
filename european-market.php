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
            <a class="text-red text-decoration-none" href="european-market.php">
                Europian Market
            </a>
        </div>
        <div class="text-center flex-fill py-2">
            <a class="text-white text-decoration-none" href="middle-eastern-market.php">
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
            <h2 class="fw-bold">European Financial Market</h2>
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
            <button class="tab-btn active" data-url="https://s.tradingview.com/widgetembed/?symbol=CAC40">CAC40</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=UK100">UK100</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=EUREX:FESX1!">FESX1!</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=IG-DAX">DAX</button>
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
    <iframe id="marketFrame" src="https://s.tradingview.com/widgetembed/?symbol=CAC40" width="100%"></iframe>

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
            <h3 class="fw-bold mb-5">Why the European Market Matters Globally</h3>
            <p class="text-muted text-gray">
                <b class="text-black">Diversity</b>: Multiple financial hubs offer unique strengths — equities in London, bonds in Frankfurt, banking in Zurich, asset management in Luxembourg.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Regulatory Framework</b>: The European Securities and Markets Authority (ESMA) ensures harmonized financial regulation across the EU, fostering transparency and investor protection.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Global Impact</b>: Europe's role in energy markets, monetary policy, and trade agreements significantly influences global capital flows.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Stability & Innovation</b>: While rooted in history, European markets are also leaders in sustainable finance, ESG investing, and green bonds.
            </p>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 rounded-4">
                <h5 class="fw-bold mb-3 text-center">Related markets</h5>

                <!-- Market 1 -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 px-5 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/eu.png" class="d-none" width="24" alt="EUR/USD">
                        <div>
                            <div class="fw-semibold">CAC40</div>
                            <div class="text-muted small d-none">1.15894</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-4 openLiveAccount">Trade</button>
                </div>

                <!-- Repeat more market cards as needed -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 px-5 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <div class="fw-semibold">UK100</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-4 openLiveAccount">Trade</button>
                </div>

                <!-- Chart Card -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 px-5 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <div class="fw-semibold">FESX1</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-4 openLiveAccount">Trade</button>
                </div>

                <!-- Chart Card -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 px-5 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <div class="fw-semibold">DAX</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-4 openLiveAccount">Trade</button>
                </div>

            </div>
        </div>

        <div class="col-12 px-5">
            <p class="text-muted text-gray">
                At <b>Zed Capital International Ltd</b>, we help clients interpret Europe's multi-faceted market landscape, identifying both traditional and emerging opportunities
            </p>
        </div>
    </div>
</div>

<style>

    .lse-bg-market-image{
        background-image: url('assets/images/markets/london-stock-exchange.jpg');
        background-size: cover;
    }

    .euronext-bg-market-image{
        background-image: url('assets/images/markets/euronext.jpg');
        background-size: cover;
    }
    .card-custom {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        /* background: #fff; */
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
            <div class="info-card text-dark">
                <h4 class="fw-bold text-center mb-4">Zed Capital International Ltd, Navigating Europe's Financial Landscape</h4>

                <p class="text-mute">
                    At <b>Zed Capital International Ltd</b>, we recognize the <b>European financial market</b> as one of the most diversified and sophisticated financial systems in the world. With its blend of historic financial centers, unified regulations, and innovative instruments, Europe plays a critical role in shaping global investment flows.
                </p>

                <p class="text-mute">
                    From London's equity and forex dominance to Frankfurt's central banking leadership, and from Paris to Zurich's wealth management hubs, the European market provides investors with stability, depth, and global connectivity.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-0">
        <h3 class="text-center my-5 fw-bold">The Structure of the European Market</h3>
    </div>

    <div class="row">
        <!-- Stock Market Card -->
        <div class="col-lg-4">
            <div class="card-custom text-dark lse-bg-market-image">
                <h3 class="fw-bold px-3">London Stock Exchange (LSE)</h3>
                <p class="mt-3 p-3 text-muted w-75">
                    One of the oldest and most international markets, listing companies from across the globe.
                </p>
            </div>
        </div>

        <!-- Dow Jones Description -->
        <div class="col-lg-8 px-5">
            
            <h4 class="fw-bold mt-2 mb-4">Equities (Stock Market)</h4>
            <p class="text-muted">
                Europe hosts some of the world's most prestigious exchanges, including the <b>London Stock Exchange (LSE), Euronext, Deutsche Börse (Frankfurt)</b>, and <b>SIX Swiss Exchange (Zurich)</b>.
            </p>
            <p class="text-muted">
                These markets represent a broad spectrum of industries from energy and finance to luxury goods and technology.
            </p>
            <p class="text-muted">
                Blue-chip indices such as the <b>FTSE 100, DAX 40</b>, and <b>CAC 40</b> serve as key benchmarks for global investors.
            </p>

            <h4 class="fw-bold my-4">Fixed Income (Bond Market)</h4>
            <p class="text-muted">
                The European bond market is one of the deepest in the world, offering sovereign bonds, corporate debt, and supranational issuances.
            </p>
            <p class="text-muted">
                <b>German Bunds</b> are regarded as the safe-haven benchmark across Europe, similar to U.S. Treasuries.
            </p>
            <p class="text-muted">
                The market is further shaped by <b>European Central Bank (ECB)</b> monetary policy, which influences yields, credit spreads, and investor sentiment across the Eurozone.
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
                The <b>Euro (EUR)</b> is the second most traded currency globally, accounting for nearly <b>30% of international reserves</b>.
            </p>
            <p class="text-muted">
                London remains the largest global foreign exchange hub, even post-Brexit, handling trillions of dollars in daily transactions.
            </p>
            <p class="text-muted">
                The Swiss Franc (CHF) also plays a unique role as a safe-haven currency during times of global uncertainty.
            </p>

            <h4 class="fw-bold my-4">Commodities & Derivatives</h4>
            <p class="text-muted">
                European exchanges such as <b>Euronext</b> and the <b>London Metal Exchange (LME)</b> set global benchmarks for metals, energy, and agricultural products.
            </p>
            <p class="text-muted">
                Derivatives such as futures and options provide investors with advanced tools for hedging, portfolio diversification, and tactical opportunities.
            </p>
        </div>

        <!-- Right Card Section -->
        <div class="col-lg-4">
            <div class="card-custom text-dark pb-0 euronext-bg-market-image">
                <h3 class="fw-bold p-3 m-0">Euronext</h3>
                <p class="m-0 p-3 text-muted w-75">
                    Europe's largest integrated exchange, spanning multiple financial hubs including Amsterdam, Paris, and Milan.
                </p>
            </div>
        </div>

    </div>

    <div class="row g-4 align-items-center mt-5">
      
        <div class="col-md-12 mb-5">
            <div class="info-card text-dark">
                <h4 class="fw-bold mt-2 mb-4">Private Capital (Venture Capital & Private Equity)</h4>
                <p class="text-muted">
                    Europe is a global hub for private equity, venture capital, and hedge funds, particularly in London, Paris, and Luxembourg.
                </p>
                <p class="text-muted">
                    Switzerland and Luxembourg remain world leaders in wealth management, private banking, and cross-border asset structuring.
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

    .icon-circle img{
        width: 50px;
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
                            Exposure to European blue chips, luxury brands, energy firms, and global exporters.
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
                            Sovereign bonds, corporate credit, and green bond investments.
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
                        <h5 class="fw-bold mb-1">Alternative Assets</h5>
                        <p class="mb-0 small-muted">
                            Access to private equity, hedge funds, and sustainable investment products
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
                            <h5 class="fw-bold mb-1">Currency</h5>
                            <p class="mb-0 small-muted">
                                Trading opportunities in the EUR, GBP, and CHF, influenced by ECB and Bank of England policy
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
                        <i class="text-red bi bi-shop d-none"></i>
                        <img src="assets/images/flat-icon/Fragmentation.png" alt="Fragmentation">
                    </div>
                    <h5 class="fw-bold text-center">Fragmentation</h5>
                    <p class="small-muted mb-0 text-center">
                        Europe is not a single unified market, regulatory and political differences between EU and non-EU states matter.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-regex d-none"></i>
                        <img src="assets/images/flat-icon/Geopolitical-Factors.png" alt="Geopolitical Factors">
                    </div>
                    <h5 class="fw-bold text-center">Geopolitical Factors</h5>
                    <p class="small-muted mb-0 text-center">
                        Market sentiment is influenced by regional tensions, oil dependency, and Brexit.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-globe d-none"></i>
                        <img src="assets/images/flat-icon/Monetary-Policy.png" alt="Monetary Policy Shift">
                    </div>
                    <h5 class="fw-bold text-center">Monetary Policy Shifts</h5>
                    <p class="small-muted mb-0 text-center">
                        ECB and Bank of England decisions strongly impact bond yields, currencies, and equity valuations.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-arrow-repeat d-none"></i>
                        <img src="assets/images/flat-icon/Economic-cycle.png" alt="Economic cycle">
                    </div>
                    <h5 class="fw-bold text-center">Economic Cycles</h5>
                    <p class="small-muted mb-0 text-center">
                        Slower growth or fiscal pressures in member states can create volatility across the bloc.
                    </p>
                </div>
            </div>

            <div class="col-lg-12 pb-0">
                <div class="p-3 pb-0 bg-white">
                    <p>
                        At <b>Zed Capital International Ltd</b>, we provide structured risk analysis and balanced strategies to help investors navigate Europe's complexity.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="your-guide">
    <div class="container py-5 border-top">
        <h2 class="h4 mb-3">Zed Capital International Ltd — Your Partner in Europe</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="tech-feature mb-3">
                    <h5 class="fw-bold">Sustainable Focus</h5>
                    <p class="small-muted mb-0">
                        Guidance on ESG investing, green bonds, and sustainable asset allocation — areas where Europe leads globally
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tech-feature mb-3">
                    <h5 class="fw-bold">Comprehensive Coverage</h5>
                    <p class="small-muted mb-0">
                        We examine the major markets in Europe, from London to Frankfurt and Zurich to Paris.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="tech-feature">
                    <h5 class="fw-bold">Tailored Strategies</h5>
                    <p class="small-muted mb-0">
                        Insights designed for long-term investors, active traders, and institutional clients alike
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="p-3 bg-white">
                    <h5 class="fw-bold">Conclusion</h5>
                    <ul class="arrow-list mb-0 small-muted">
                        <li class="mb-1 fs-6 px-4">
                            The <b>European financial market</b> is both diverse and influential — a blend of tradition, innovation, and regulatory strength. Its impact extends across currencies, commodities, equities, and alternative assets, making it a vital component of any global portfolio
                        </li>
                        <li class="mb-1 fs-6 px-4">
                            At <b>Zed Capital International Ltd</b>, we empower our clients with the knowledge, access, and strategies needed to engage effectively with Europe's financial ecosystem. Whether seeking growth, diversification, or stability, we provide the insights to help investors succeed
                        </li>
                        <li class="mb-1 fs-6 px-4"> 
                            Zed Capital International Ltd — unlocking opportunities across Europe’s financial heartlands
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