<?php
include_once ('elements/header.php');
?>

<style>
    .metal-header{
        padding: 120px 0; /* Adjust padding as needed */
        background-image: url('assets/images/background/product-metal-background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: center;   /* Vertical center */
        justify-content: center; /* Horizontal center */
        margin-top: 120px;
    }

    .divider {
        width: 75px;
        background-color: var(--zed-primary);
    }

    .btn-outline-danger{
        background-color: var(--zed-primary);
        border-color: var(--zed-primary);
        color: var(--zed-light-bg);
    }

    h5.stock-indices{
        width: 25%;
    }

    .metal-header h2{
        width: 75%;
    }

    @media (max-width: 767.98px) {
        .set-diamond-image{
            display: none;
        }

        .rounded-pill{
            margin-bottom: 1rem;
        }

        h5.stock-indices{
            width: 100%;
            text-align: center;
        }

        .metal-header{
            background-position: inherit !important;
        }

        .metal-header h2{
            width: 100%;
            margin-top: -100px;
        }
    }
</style>

<section class="py-5 metal-header">
    <div class="container">
        <div class="row align-items-center">
        
            <!-- Text Column -->
            <div class="col-md-6 text-black"  >
                <h2 class="fw-bold h2 mb-5">What is Metal trading and how does it work?</h2>
                <div class="p-1 divider" data-aos="fade-up" data-aos-delay="800"></div>
                <p class="mt-5 text-gray w-75" data-aos="fade-up" data-aos-delay="800">
                    Metal, or foreign exchange, refers to the market where currencies are traded against each other.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="position-relative p-0" style="margin-top: -30px; background-color: #fdfdfd7d;">
    <div class="bg-dark text-white py-4 px-5 d-flex align-items-center" style="background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('your-metal-bg.jpg'); background-size: cover;">
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-outline-danger fw-bold rounded-pill px-5">
                    Basics of Metal
                </a>

                <div class="position-relative set-diamond-image">
                    <img src="assets/images/silver-diamond.png" alt="Corner Image" class="position-absolute bottom-0 start-0" style="width: 100px; height: 60px; margin: -60px -15px;">
                </div>
            </div>
            <div class="col-md-8">
                <p class="mb-0 small">
                    Stocks, also known as equities or shares, represent ownership in a company. When you own stock in a company, you own a portion of that company’s assets and earnings proportional to the number of shares you hold.
                </p>
            </div>
        </div>    
    </div>

</section>

<style>
    .card-background{
        background-color: #ffffffbf;
        border: 1px solid var(--zed-border-color);
        border-radius: 25px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-background:hover {
        border: 1px solid var(--zed-secondary);
    }

    .stock-heading{
        display: flex;
        align-items: center;   /* Vertical center */
    }

    @media (max-width: 767.98px) {
        .card-background{
            padding: 2rem !important;
        }
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="position-relative set-diamond-image">
            <img src="assets/images/black-diamond.png" alt="Corner Image" class="position-absolute top-0 end-0" style="width: 40px; height: 40px;margin: -15px -80px;">
        </div>
        <div class="row g-4">
            <!-- Types of Stocks -->
            <div class="col-md-6">
                <div class="p-5 card-background">
                    <div class="row">
                        <div class="col-md-6 stock-heading">
                            <h3 class="fw-bold mb-3">Types<br>of Stocks</h3>
                        </div>
                        <div class="col-md-6 text-start">
                            <img src="assets/images/types-of-stock.png" alt="Stock Icon" class="w-50 p-0">
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <strong>Common Stock</strong><br>
                            <p class="text-gray">
                                Most stocks traded on public exchanges are common stocks. Shareholders typically have voting rights in company matters and may receive dividends.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <strong>Preferred Stock</strong><br>
                            <p class="text-gray">
                                These stocks have preferential treatment in terms of dividends and liquidation but usually do not carry voting rights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buying and Selling Stocks -->
            <div class="col-md-6">
                <div class="p-5 card-background">
                    <div class="row">
                        <div class="col-md-6 stock-heading">
                            <h3 class="fw-bold mb-3">Buying and<br>Selling Stocks</h3>
                        </div>
                        <div class="col-md-6 text-start">
                            <img src="assets/images/buying-selling-stock.png" alt="Chart Icon" class="w-50 p-0">
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <strong>Stock Exchanges</strong><br>
                            <p class="text-gray">
                                Most stocks traded on public exchanges are common stocks. Shareholders typically have voting rights in company matters and may receive dividends.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <strong>Brokerage Accounts</strong><br>
                            <p class="text-gray">
                                These stocks have preferential treatment in terms of dividends and liquidation but usually do not carry voting rights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pt-0">
    <div class="container">
        <div class="p-4 rounded-4 border shadow-sm">
            <!-- Header Black Bar -->
            <div class="bg-dark text-white p-4 rounded-3 mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                <h5 class="fw-bold mb-2 mb-md-0 stock-indices">Stock Indices</h5>
                <p class="mb-0 small">
                    Indices like the S&P 500, Dow Jones Industrial Average (<strong>DJIA</strong>), and NASDAQ Composite track the performance of groups of stocks.
                    These indices serve as benchmarks for the overall market or specific sectors.
                </p>
            </div>

            <!-- Order Types -->
            <div class="row text-center text-md-start p-4">
                <div class="col-md-4 px-4 border-end mb-3 mb-md-0">
                    <p class="fw-bold mb-1">Market Order</p>
                    <p class="text-muted small mb-0">An order to buy or sell a stock at the current market price.</p>
                </div>
                <div class="col-md-4 px-4 border-end mb-3 mb-md-0">
                    <p class="fw-bold mb-1">Limit Order</p>
                    <p class="text-muted small mb-0">An order to buy or sell a stock at a specific price (or better).</p>
                </div>
                <div class="col-md-4 px-4">
                    <p class="fw-bold mb-1">Stop-Loss Order</p>
                    <p class="text-muted small mb-0">A conditional order to sell a stock if its price falls to a specified level, limiting potential losses.</p>
                </div>
            </div>
        </div>

        <!-- Footer Description -->
        <div class="pt-4">
            <p class="fw-bold small">
                Stocks play a crucial role in investment portfolios, offering potential for capital appreciation, dividends, and portfolio diversification.
                However, investors should carefully assess their risk tolerance and investment goals before investing in stocks.
            </p>
        </div>
    </div>

    <div class="position-relative set-diamond-image">
        <img src="assets/images/common-2-diamonds.png" alt="Corner Image" class="position-absolute bottom-30 end-0 float-y" style="width: 150px;height: 120px;margin: -20px 75px;">
    </div>
</section>


<?php
include_once ('elements/footer.php');
?>