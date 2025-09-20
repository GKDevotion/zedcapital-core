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
            <a class="text-red text-decoration-none" href="american-market.php">
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
            <a class="text-white text-decoration-none" href="asian-market.php">
                Asian Market
            </a>
        </div>
    </div>

    <!-- Financial Market Section -->
    <div class="bg-light text-dark mt-4 rounded-4 p-4 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h2 class="fw-bold">American Financial Market</h2>
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
            <button class="tab-btn active" data-url="https://s.tradingview.com/widgetembed/?symbol=DJI">US30</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=US500">US500</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=SPX">SP500</button>
            <button class="tab-btn" data-url="https://s.tradingview.com/widgetembed/?symbol=NDX">NDAQ</button>
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
    <iframe id="marketFrame" src="https://s.tradingview.com/widgetembed/?symbol=DJI" width="100%"></iframe>

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
            <h3 class="fw-bold mb-5">Why the American Market Matters Globally</h3>
            <p class="text-muted text-gray">
                <b class="text-black">Scale & Liquidity</b>: Trillions of dollars traded daily make it the most liquid marketplace worldwide.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Regulatory Framework</b>: Oversight from the <b>Securities and Exchange Commission (SEC)</b> and <b>Commodity Futures Trading Commission (CFTC)</b> builds investor trust.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Innovation Hub</b>: ETFs, structured products, and fintech platforms are continuously pioneered in the U.S.
            </p>
            <p class="text-muted text-gray">
                <b class="text-black">Global Influence</b>: Market shifts in the U.S. ripple across Asia, Europe, and emerging economies within seconds.
            </p>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 rounded-4">
                <h5 class="fw-bold mb-3">Related markets</h5>

                <!-- Market 1 -->
                <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/eu.png" width="24" alt="EUR/USD">
                        <div>
                            <div class="fw-semibold">EUR/USD</div>
                            <div class="text-muted small">1.15894</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Trade</button>
                </div>

                <!-- Repeat more market cards as needed -->
                <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/us.png" width="24" alt="USD/JPY">
                        <div>
                            <div class="fw-semibold">USD/JPY</div>
                            <div class="text-muted small">148.756</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Trade</button>
                </div>

                <!-- Chart Card -->
                <div class="bg-light p-2 rounded mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://flagcdn.com/24x18/gb.png" width="24" alt="GBP/USD">
                            <div>
                                <div class="fw-semibold">GBP/USD</div>
                                <div class="text-muted small">1.33984</div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Trade</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    .progress-bar {
        transition: width 0.2s ease;
    }
</style>

<div class="container py-4">
  <div id="marketRows" class="row g-3"></div>
</div>

<script>
  const data = [
    {
      symbol: "EUR/USD",
      name: "Euro / US Dollar",
      flag: "https://flagcdn.com/24x18/eu.png",
      price1: 1.15894,
      price2: 1.15900,
      changeValue: 0.00006,
      changePercent: -0.35,
      chart: "https://via.placeholder.com/60x20?text=↘",
      sellPercent: 47.79,
      buyPercent: 52.21
    },
    {
      symbol: "USD/JPY",
      name: "US Dollar / Japanese Yen",
      flag: "https://flagcdn.com/24x18/us.png",
      price1: 148.763,
      price2: 148.773,
      changeValue: 0.01,
      changePercent: 0.54,
      chart: "https://via.placeholder.com/60x20?text=↗",
      sellPercent: 45.24,
      buyPercent: 54.76
    },
    {
      symbol: "GBP/USD",
      name: "GBP / US Dollar",
      flag: "https://flagcdn.com/24x18/eu.png",
      price1: 1.15894,
      price2: 1.15900,
      changeValue: 0.00006,
      changePercent: -0.35,
      chart: "https://via.placeholder.com/60x20?text=↘",
      sellPercent: 47.79,
      buyPercent: 52.21
    },
    {
      symbol: "USD/AUD",
      name: "US Dollar / AUD",
      flag: "https://flagcdn.com/24x18/us.png",
      price1: 148.763,
      price2: 148.773,
      changeValue: 0.01,
      changePercent: 0.54,
      chart: "https://via.placeholder.com/60x20?text=↗",
      sellPercent: 45.24,
      buyPercent: 54.76
    }
  ];

  const marketRows = document.getElementById('marketRows');

  data.forEach(item => {
    const changeColor = item.changePercent < 0 ? 'text-danger' : 'text-success';

    const row = document.createElement('div');
    row.className = "col-12";
    row.innerHTML = `
      <div class="d-flex align-items-center justify-content-between bg-light rounded-3 p-2 shadow-sm flex-wrap">
        <div class="d-flex align-items-center gap-2" style="min-width: 200px;">
          <img src="${item.flag}" width="24" alt="${item.symbol}">
          <div>
            <div class="fw-semibold">${item.symbol}</div>
            <small class="text-muted">${item.name}</small>
          </div>
        </div>
        <div class="text-primary fw-semibold">${item.price1}</div>
        <div class="text-primary fw-semibold">${item.price2}</div>
        <div class="text-secondary small">${item.changeValue}</div>
        <div class="small fw-semibold ${changeColor}">${item.changePercent > 0 ? '+' : ''}${item.changePercent}%</div>
        <div><img src="${item.chart}" alt="chart" class="img-fluid"></div>
        <div class="d-flex align-items-center gap-2" style="min-width: 120px;">
          <small>${item.sellPercent}%</small>
          <div class="progress flex-grow-1" style="height: 6px;">
            <div class="progress-bar bg-danger" style="width: ${item.sellPercent}%;"></div>
            <div class="progress-bar bg-primary" style="width: ${item.buyPercent}%;"></div>
          </div>
          <small>${item.buyPercent}%</small>
        </div>
      </div>
    `;
    marketRows.appendChild(row);
  });
</script>

<style>
    .card-custom {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        background: #fff;
    }
    .img-icon {
        width: 60px;
        height: auto;
    }
    .stock-img {
        width: 75%;
        margin: -100px 0 -38px 125px;
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
      
        <div class="col-md-10 offset-1 mb-5">
            <div class="card-custom text-dark">
                <h4 class="fw-bold text-center mb-4">Zed Capital International Ltd — Understanding the World's Financial Epicenter</h4>

                <p class="text-mute">
                    At Zed Capital International Ltd, we view the American financial market as the heartbeat of the global economy. Its scale, diversity, and regulatory strength make it the most influential financial ecosystem worldwide. From Wall Street’s equity exchanges to Chicago’s commodity markets, the U.S. provides liquidity, innovation, and transparency that shape global capital flows
                </p>

                <p class="text-mute">
                    Engaging with this market requires more than participation — it requires deep knowledge, disciplined strategies, and institutional insight.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-0">
        <h3 class="text-center my-5 fw-bold">The Structure of the U.S. Market</h3>
    </div>

    <div class="row">
        <!-- Stock Market Card -->
        <div class="col-lg-4">
            <div class="card-custom text-dark">
                <h3 class="fw-bold">Stock Market<br>(<span class="text-uppercase">NASDAQ</span>)</h3>
                <p class="mt-5 text-muted w-75">
                    The New York Stock Exchange (NYSE) and NASDAQ are the two major exchanges where publicly traded companies list their shares.
                </p>
                <p class="text-dark fw-medium w-75">
                    Major stock indices include the S&P 500 (top 500 US companies)
                </p>
                <div class="d-flex align-items-center mt-4">
                    <img src="assets/images/stock-market-nasdaq.png" class="stock-img" alt="NYSE">
                </div>
            </div>
        </div>

        <!-- Dow Jones Description -->
        <div class="col-lg-8 px-5">
            
            <h4 class="fw-bold mt-2 mb-4">1. Equities (Stock Market)</h4>
            <p class="text-muted">
                Anchored by the <b>New York Stock Exchange (NYSE)</b> and <b>NASDAQ</b>, the U.S. equity market accounts for <b>over half of global equity market capitalization.</b>
            </p>
            <p class="text-muted">
                It hosts global leaders in technology, finance, energy, and healthcare — companies that influence innovation and consumer trends worldwide.
            </p>
            <p class="text-muted">
                U.S. equities attract investors for their liquidity, transparency, and ability to generate long-term returns.
            </p>

            <h4 class="fw-bold my-4">2. Fixed Income (Bond Market)</h4>
            <p class="text-muted">
                The <b>U.S. Treasury market</b> is the <b>global benchmark for risk-free investment</b>. Treasuries influence everything from mortgage rates to global central bank reserves.
            </p>
            <p class="text-muted">
                The U.S. corporate bond market is the largest in the world, offering income opportunities across credit ratings and maturities.
            </p>
            <p class="text-muted">
                Municipal bonds provide a unique tax-efficient investment avenue, funding infrastructure and development projects.
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
            margin: -50px -30px 0 0;
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
        <div class="col-lg-8 px-5 text-section">
            <h4 class="fw-bold mt-2 mb-4">3. Currencies (Foreign Exchange)</h4>
            <p class="text-muted">
                The <b>U.S. dollar (USD)</b> is the reserve currency of choice, used in over <b>80% of all global forex transactions.</b>
            </p>
            <p class="text-muted">
                The dollar's role is reinforced by the U.S. economy's size, depth of markets, and political stability.
            </p>
            <p class="text-muted">
                Federal Reserve policy decisions directly move global currency markets, impacting trade balances and capital allocation.
            </p>

            <h4 class="fw-bold my-4">4. Commodities & Derivatives</h4>
            <p class="text-muted">
                U.S. commodity and futures markets, particularly the <b>Chicago Mercantile Exchange (CME)</b> and <b>Chicago Board of Trade (CBOT)</b>, set the <b>world's benchmark prices</b> for oil, gold, agricultural products, and interest rates.
            </p>
            <p class="text-muted">
                Derivatives such as futures and options provide investors with advanced tools for hedging, portfolio diversification, and tactical opportunities.
            </p>
        </div>

        <!-- Right Card Section -->
        <div class="col-lg-4">
            <div class="info-card text-dark pb-0">
                <h3 class="fw-bold">NYSE Market<br>(US30-500)</h3>
                <p class="mt-5 text-muted">
                    The New York Stock Exchange (NYSE) and NASDAQ are the two major exchanges where publicly traded companies list their shares.
                </p>
                <p class="fw-medium w-75">
                    Major stock indices include the S&P 500 (top 500 US companies)
                </p>
                <div class="mt-4 text-end">
                    <img src="assets/images/nyse-market.png" alt="Bull and Bear" class="bull-bear-img">
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4 align-items-center mt-5">
      
        <div class="col-md-8 offset-2 mb-5">
            <div class="card-custom text-dark">
                <h4 class="fw-bold mt-2 mb-4">5. Private Capital (Venture Capital & Private Equity)</h4>
                <p class="text-muted">
                    The U.S. dominates the <b>venture capital and private equity industry</b>, particularly in Silicon Valley and New York.
                </p>
                <p class="text-muted">
                    Private markets fuel innovation in artificial intelligence, biotechnology, renewable energy, and fintech.
                </p>
                <p class="text-muted">
                    These investments not only shape domestic growth but also define the trajectory of global technological and economic progress.
                </p>
            </div>
        </div>
    </div>
</div>

<section id="opps" class="container mb-5">
    <h2 class="h4 mb-3">Opportunities for Investors</h2>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card feature-card p-3">
                <div class="d-flex gap-3 align-items-start">
                    <div class="icon-circle"><i class="bi bi-grid-1x2-fill"></i></div>
                    <div>
                    <h5 class="mb-1">Diversified Access</h5>
                    <p class="mb-0 small-muted">Exposure to equities, bonds, ETFs, commodities, and alternative assets enables portfolio construction across risk premia.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card feature-card p-3">
                <div class="d-flex gap-3 align-items-start">
                    <div class="icon-circle"><i class="bi bi-trend-up"></i></div>
                    <div>
                    <h5 class="mb-1">Long-Term Growth</h5>
                    <p class="mb-0 small-muted">U.S. corporate earnings power and ongoing innovation drive sustainable returns over multi-year horizons.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card feature-card p-3">
                <div class="d-flex gap-3 align-items-start">
                    <div class="icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                    <div>
                    <h5 class="mb-1">Tactical Trading</h5>
                    <p class="mb-0 small-muted">Volatility around Fed policy, employment data, and earnings creates short-term trading and hedging opportunities.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card feature-card p-3">
                <div class="d-flex gap-3 align-items-start">
                    <div class="icon-circle"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                    <h5 class="mb-1">Currency Advantage</h5>
                    <p class="mb-0 small-muted">Dollar-based assets can offer relative stability and diversification benefits for global investors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="risks" class="container mb-5">
    <h2 class="h4 mb-3">Risks and Considerations</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="card p-3 mb-3">
                <h5>Market Volatility</h5>
                <p class="small-muted mb-0">Driven by monetary policy, inflation, earnings cycles, and geopolitics — prepare for drawdowns and use diversification and hedges.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-3">
                <h5>Regulatory Complexity</h5>
                <p class="small-muted mb-0">U.S. markets operate under a robust and evolving compliance framework; tax, disclosure and cross-border rules may affect strategies.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Global Shocks</h5>
                <p class="small-muted mb-0">Trade conflicts, energy crises, or financial contagion can quickly affect valuations — scenario-based planning is essential.</p>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="p-3 bg-white">
                <h5>Zed Capital Risk Approach</h5>
                <ul class="mb-0 small-muted">
                    <li>Disciplined risk management</li>
                    <li>Scenario analysis and stress-testing</li>
                    <li>Global diversification and active rebalancing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="risks" class="container mb-5">
    <h2 class="h4 mb-3">Zed Capital International Ltd — Your Guide to the U.S. Market</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-3">
                <h5>Client-Centric Approach</h5>
                <p class="small-muted mb-0">Strategies aligned with objectives and risk tolerance.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-3 mb-3">
                <h5>Institutional Expertise</h5>
                <p class="small-muted mb-0">Insights built to global standards.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Global Outlook</h5>
                <p class="small-muted mb-0">Cross-market perspective and multi-jurisdiction experience.</p>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="p-3 bg-white">
                <h5>Conclusion</h5>
                <ul class="mb-0 small-muted">
                    <li>The American financial market is more than just the largest marketplace — it is the engine of global finance. Its movements determine the flow of capital, shape international policy, and influence economies worldwide.</li>
                    <li>At Zed Capital International Ltd, we provide the knowledge, access, and institutional-level analysis our clients need to navigate this market with confidence. Whether your goal is growth, income, or risk management, our mission is to empower you to succeed in the world's most powerful financial arena.</li>
                    <li> Zed Capital International Ltd — guiding investors through the American market with clarity, confidence, and expertise.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
include_once ('elements/footer.php');
?>