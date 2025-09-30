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
            <a class="text-white text-decoration-none" href="middle-eastern-market.php">
                Middle East Market
            </a>
        </div>
        <div class="text-center flex-fill py-2">
            <a class="text-red text-decoration-none" href="asian-market.php">
                Asian Market
            </a>
        </div>
    </div>

    <!-- Financial Market Section -->
    <div class="bg-light text-dark mt-4 rounded-4 p-4 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h2 class="fw-bold">Asian Financial Market</h2>
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
            <button class="tab-btn active" data-url="https://s.tradingview.com/widgetembed/?symbol=NIKKEI">NIKKEI</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=SENSEX">SENSEX</button>
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
    <iframe id="marketFrame" src="https://s.tradingview.com/widgetembed/?symbol=NIKKEI" width="100%"></iframe>

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
            <h3 class="fw-bold mb-5">Why the Asian Market Matters Globally</h3>
            <p class="text-muted text-gray">
                <b class="text-black">Diversity</b>: Multiple financial hubs offer unique strengths — equities in London, bonds in Frankfurt, banking in Zurich, asset management in Luxembourg.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Growth Engine</b>: Asia accounts for over 50% of global GDP growth in recent years.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Demographics</b>: Young, expanding populations in India and Southeast Asia drive long-term consumption and investment demand.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Global Supply Chains</b>: Asia is central to manufacturing, technology, and global trade.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Capital Market Reforms</b>: Liberalization in China and India is opening deeper opportunities for international investors.
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
                            <div class="fw-semibold">NIKKEI</div>
                            <div class="text-muted small d-none">1.15894</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3 openLiveAccount">Trade</button>
                </div>

                <!-- Repeat more market cards as needed -->
                <div class="d-flex justify-content-between align-items-center mb-2 p-2 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <div class="fw-semibold">SENSEX</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3 openLiveAccount">Trade</button>
                </div>

            </div>
        </div>

        <div class="col-12 px-5">
            <p class="text-muted text-gray">
                At <b>Zed Capital International Ltd</b>, we track these developments to help clients access Asia’s long-term growth story while managing short-term volatility
            </p>
        </div>
    </div>
</div>

<style>
    .card-custom {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        background: #fff;
        min-height: 430px;
    }
    .img-icon {
        width: 60px;
        height: auto;
    }
    .stock-img {
        width: 75%;
        margin: -170px 0 0 220px;
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
                <h4 class="fw-bold text-center mb-4">Zed Capital International Ltd — Capturing Growth in Asia</h4>

                <p class="text-mute">
                    At <b>Zed Capital International Ltd</b>, we recognize the Asian financial market as the most dynamic growth engine in the global economy. With the rise of powerhouse economies such as China, Japan, India, and Singapore, Asia has become a hub of capital formation, technological innovation, and long-term investment opportunity.
                </p>

                <p class="text-mute">
                    From Tokyo's deep liquidity to Hong Kong's global financial gateway, and from Singapore's stability to India's fast-growing equity and derivatives markets, Asia offers unmatched diversity and potential for global investors.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-0">
        <h3 class="text-center my-5 fw-bold">The Structure of the Asian Market</h3>
    </div>

    <div class="row">
        <!-- Stock Market Card -->
        <div class="col-lg-4">
            <div class="card-custom text-dark">
                <h3 class="fw-bold">Tokyo Stock Exchange (TSE)</h3>
                <p class="mt-5 text-gray">
                    Asia's largest exchange, best known for the <b>Nikkei 225 Index</b> and global leaders like Toyota and Sony.
                </p>

                <div class="row">
                    <div class="col-6">
                        <p class="fs-6 text-black">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>

                    <div class="col-6">
                        <div class="text-end">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Tokyo_Stock_Exchange_logo.svg" class="w-75" alt="NYSE">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Dow Jones Description -->
        <div class="col-lg-8 px-5">
            
            <h4 class="fw-bold mt-2 mb-4">Equities (Stock Market)</h4>
            <p class="text-muted">
                <b>Tokyo Stock Exchange (TSE)</b> and <b>Osaka Exchange</b> anchor Japan's market, one of the world's largest by capitalization.
            </p>
            <p class="text-muted">
                <b>Hong Kong Stock Exchange (HKEX)</b> serves as a bridge between China and global investors.
            </p>
            <p class="text-muted">
                <b>Shanghai Stock Exchange (SSE)</b> and <b>Shenzhen Stock Exchange (SZSE)</b> dominate China's equity landscape.
            </p>
            <p class="text-muted">
                <b>National Stock Exchange of India (NSE)</b> and <b>Bombay Stock Exchange (BSE)</b> drive India's rapid equity growth
            </p>
            <p class="text-muted">
                Key indices include <b>Nikkei 225, Hang Seng, Shanghai Composite</b>, and <b>Nifty 50</b>
            </p>

            <h4 class="fw-bold my-4">Fixed Income (Bond Market)</h4>
            <p class="text-muted">
                Asia's sovereign bond markets are among the largest globally, with Japan and China leading issuance.
            </p>
            <p class="text-muted">
                The <b>People's Bank of China (PBoC)</b> and <b>Bank of Japan (BoJ)</b> play critical roles in yield and credit spread dynamics.
            </p>
            <p class="text-muted">
                Rapid development of <b>Asian corporate bond markets</b>, particularly in South Korea, India, and Singapore, is attracting global fixed income investors.
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
            margin: 0;
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
                The <b>Japanese Yen (JPY)</b> and <b>Chinese Yuan (CNY/RMB)</b> are among the world's most traded currencies.
            </p>
            <p class="text-muted">
                India's Rupee (INR) is gaining international relevance with the country's growth.
            </p>
            <p class="text-muted">
                <b>Singapore Dollar (SGD)</b> and <b>Hong Kong Dollar (HKD)</b> provide regional stability and global trading access.
            </p>
            <p class="text-muted">
                Asia accounts for a significant share of global forex turnover, particularly through hubs such as <b>Tokyo, Hong Kong, and Singapore</b>.
            </p>

            <h4 class="fw-bold my-4">Commodities & Derivatives</h4>
            <p class="text-muted">
                Asia is a leading consumer and producer of energy, metals, and agricultural products.
            </p>
            <p class="text-muted">
                <b>Shanghai Futures Exchange (SHFE)</b> and <b>Tokyo Commodity Exchange (TOCOM)</b> provide benchmarks for metals and energy.
            </p>
            <p class="text-muted">
                Derivatives activity is growing rapidly, especially in India (NSE derivatives), with Asia now one of the fastest-growing options markets globally
            </p>
        </div>

        <!-- Right Card Section -->
        <div class="col-lg-4">
            <div class="card-custom text-dark pb-0">
                <h3 class="fw-bold">Shanghai Stock Exchange (SSE)</h3>
                <p class="mt-5 text-gray">
                    Among the world's largest by market cap, featuring major Chinese state-owned enterprises.
                </p>

                <p class="w-75 text-black">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <div class="mt-4 text-end">
                    <img src="assets/images/shanghai.png" alt="Bull and Bear" class="bull-bear-img">
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4 align-items-center mt-5">
      
        <div class="col-md-12 mb-5">
            <div class="card-custom text-dark">
                <h4 class="fw-bold mt-2 mb-4">Private Capital & Technology Investment</h4>
                <p class="text-muted">
                    Asia is home to fast-growing <b>venture capital and private equity ecosystems</b>, especially in China, India, and Southeast Asia.
                </p>
                <p class="text-muted">
                    <b>Singapore</b> serves as a regional hub for private wealth and fund management.
                </p>
                <p class="text-muted">
                    Technology sectors — from e-commerce to artificial intelligence — drive capital inflows and innovation-led investment
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
                                Participation in fast-growing sectors such as technology, healthcare, consumer goods, and finance.
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
                                Diversification into sovereign and corporate debt markets with varying yield profiles.
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
                        <h5 class="fw-bold mb-1">Private Equity</h5>
                        <p class="mb-0 small-muted">
                            Access to high-growth startups and emerging market innovation hubs.
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
                                Active trading opportunities in JPY, CNY, INR, and SGD.
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
                    <h5 class="fw-bold text-center">Regulatory Shifts</h5>
                    <p class="small-muted mb-0">
                        Policy changes in China, India, and Japan can create uncertainty.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-regex"></i>
                    </div>
                    <h5 class="fw-bold text-center">Geopolitical Tensions</h5>
                    <p class="small-muted mb-0">
                        Trade disputes, territorial conflicts, and U.S.-China relations impact sentiment.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-globe"></i>
                    </div>
                    <h5 class="fw-bold text-center">Currency Volatility</h5>
                    <p class="small-muted mb-0">
                        Asian currencies can fluctuate sharply in response to capital flows and central bank decisions.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tech-feature opp-h-fix">
                    <div class="icon-circle text-center mb-4">
                        <i class="text-red bi bi-arrow-repeat"></i>
                    </div>
                    <h5 class="fw-bold text-center">Market Fragmentation</h5>
                    <p class="small-muted mb-0">
                        Diverse regulatory environments across Asia require careful market-by-market strategies.
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="p-3 bg-white">
                    <p>
                        At <b>Zed Capital International Ltd</b>, we help clients evaluate these challenges with structured analysis and risk management frameworks.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="your-guide">
    <div class="container py-5">
        <h2 class="h4 mb-3">Zed Capital International Ltd — Your Partner in Asia</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="tech-feature mb-3">
                    <h5>Regional Expertise</h5>
                    <p class="small-muted mb-0">
                        Coverage of Japan, China, India, and Southeast Asian markets.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tech-feature mb-3">
                    <h5>Growth Focus</h5>
                    <p class="small-muted mb-0">
                        Identification of high-potential sectors and instruments.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="tech-feature">
                    <h5>Tailored Solutions</h5>
                    <p class="small-muted mb-0">
                        Strategies aligned with both institutional and private investor objectives.
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="p-3 bg-white">
                    <h5>Conclusion</h5>
                    <ul class="mb-0 small-muted">
                        <li>
                            The <b>Asian financial market</b> is more than a regional player — it is the <b>center of global growth and innovation</b>. Its diversity, scale, and momentum make it an essential component of any global investment strategy.
                        </li>
                        <li>
                            At <b>Zed Capital International Ltd</b>, we provide the insights, access, and disciplined strategies to help clients engage confidently with Asia's opportunities — balancing growth potential with careful risk management.
                        </li>
                        <li> 
                            Zed Capital International Ltd — connecting global investors to Asia's financial future
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