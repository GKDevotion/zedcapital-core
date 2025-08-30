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
            <h4 class="fw-bold">Dow Jones Industrial Average</h4>
            <p class="text-muted text-gray">
                The base currency is EUR and the counter currency is USD. The EUR/USD price shows how many American dollars are needed to buy one Eurozone's euro. Bringing together two largest global currencies, the pair belongs to Forex majors along with GBP/USD, USD/JPY and USD/CHFEUR/USD has quite a low bid-ask spread and is considered the world's most liquid currency pair. Traders buy or sell it heavily, provides for relatively high volatility levels. Liquidity coupled with volatility makes EUR/USD an attractive trading instrument for newcomers to Forex.
            </p>

            <h4 class="fw-bold mt-4">US-500</h4>
            <p class="text-muted text-gray">
                EUR is an official currency of the European Union. On 1 January 1999, it was released as a virtual currency unit for cashless transactions and accounting purposes. The euro banknotes and coins were issued on 1 January 2002. The euro is unique in that it's a common currency for 19 out of 28 members of the EU, which are referred to as the Eurozone. Every day, about 338.6 million people use the EUR for payments, making it the second most popular and heavily traded currency unit.
            </p>
            <p class="text-muted text-gray">
                The European Central Bank (ECB) is responsible for the monetary policy.
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
                    <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Trade</button>
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
                    <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Trade</button>
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
                        <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Trade</button>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="badge bg-danger-subtle text-danger small">↓ -0.100%</span>
                    </div>
                </div>

                <!-- Market 1 -->
                <div class="d-flex justify-content-between align-items-center mb-3 p-2 rounded bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/eu.png" width="24" alt="EUR/USD">
                        <div>
                            <div class="fw-semibold">EUR/USD</div>
                            <div class="text-muted small">1.15894</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Trade</button>
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
                    <button class="btn btn-sm btn-outline-warning rounded-pill px-3">Trade</button>
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
            <h3 class="fw-bold">Dow Jones Industrial Average</h3>
            <p class="text-muted w-75">
                The base currency is EUR and the counter currency is USD. The EUR/USD price shows how many American dollars are needed to buy one Eurozone's euro. Bringing together two largest global currencies, the pair belongs to Forex majors along with GBP/USD, USD/JPY and USD/CHF.
            </p>
            <p class="text-muted w-75">
                EUR/USD has quite a low bid-ask spread and is considered the world's most liquid currency pair. Traders buy or sell it heavily, providing relatively high volatility levels. Liquidity coupled with volatility makes EUR/USD an attractive trading instrument for newcomers to Forex.
            </p>
            <p class="text-muted w-75">
                American dollars are needed to buy one Eurozone's euro. Bringing together two largest global currencies, the pair belongs to Forex majors along with GBP/USD, USD/JPY and USD/CHF.
            </p>
        </div>

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

<div class="container py-5">
    <div class="row align-items-center g-4">

        <!-- Left Text Section -->
        <div class="col-lg-8 px-5 text-section">
            <h3 class="fw-bold-title">US-30</h3>
            <p>
                EUR is an official currency of the European Union. On 1 January 1999, it was released as a virtual currency unit for cashless transactions and accounting purposes. The euro banknotes and coins were issued on 1 January 2002. The euro is unique in that it’s a common currency for 19 out of 28 members of the EU, which are referred to as the Eurozone. Every day, about 338.6 million people use the EUR for payments, making it the second most popular and heavily traded currency unit.
            </p>
            <p>
                The European Central Bank (ECB) is responsible for the monetary policy in the EU, thus, controls all the euro-related issues. ECB is in charge of maintaining price stability and defining key interest rates for the Eurozone.
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
</div>

<?php
include_once ('elements/footer.php');
?>