<?php
$seoArr = [
    "title" => "Forex Profit Calculator | Calculate Potential Forex Trading Gains",
    "description" => "Use Zed Academy's Forex Profit Calculator to estimate your trading gains. Calculate potential profits and plan your forex trades with accuracy and confidence.",
    "keyword" => "forex profit calculator, forex trading calculator, calculate forex gains, trading profit estimator, Zed Academy forex tool, how to calculate forex profits online, forex trading profit calculator for beginners, calculate potential gains in forex trading, Zed Academy forex trading calculator tool, forex profit and loss calculation guide, accurate forex profit estimation online"
];
include_once ('elements/header.php');
?>

<style>
    .page-title-h2-tag h1{
        color: var(--zed-primary);
    }

    .page-title-h2-tag{
        margin-top: 120px;
        padding: 40px 0;
    }

    .section-title h1 {
        text-transform: capitalize;
    }

    .box-shadow {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 20px;
    }
</style>

<div class="container profit-calculator">

    <div class="row page-title-h2-tag">
        <div class="col-md-12 text-center section-title my-4">
            <h1 class="">Forex Profit Calculator</h1>
        </div>
    </div>

    <div class="row hide">
        <div class="col-md-10 offset-1 mt-2 section-title">
            <h3 class="text-center secondary-color mt-10">
                Calculate how much you could potentially gain from your
                trading
            </h3>
        </div>
    </div>

    <div class="row mt-30">
        <div class="col-md-10 offset-1">
            <h2 class="text-center d-none">
                Set profit targets and risk-manage losses
            </h2>
            <p class="p-content text-justify mt-2">
                Never take a trade until you've planned out every potential
                scenario. That's a golden rule for every professional investor. The FXTM profit calculator can help you
                plan out potential profits and losses so you go into trades ready for every possible outcome.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2 class="">Simple, free and effective risk management</h2>
            <p class="p-content mt-3">Follow the steps below to use our simple, free online tool.</p>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-6 offset-3 box-shadow">

            <form id="forex_profit_calculator_form">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <label for="instrument">Instrument</label>
                        <select name="instrument" id="instrument" class="form-control">
                            <option value="EUR/USD" selected>EUR/USD</option>
                            <option value="USD/JPY">USD/JPY</option>
                            <option value="GBP/USD">GBP/USD</option>
                            <option value="AUD/USD">AUD/USD</option>
                            <option value="XAU/USD">XAU/USD</option>
                            <!-- Add more instruments as needed -->
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="deposit_currency">Deposit Currency</label>
                        <select name="deposit_currency" id="deposit_currency" class="form-control">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="JPY">JPY</option>
                            <option value="GBP">GBP</option>
                            <!-- Add more currencies as needed -->
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="buy_sell">Buy or Sell</label>
                        <select name="buy_sell" id="buy_sell" class="form-control">
                            <option value="buy" selected>Buy</option>
                            <option value="sell">Sell</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="lots">Lots (trade size)</label>
                        <input type="text" name="lots" id="lots" class="form-control" value="1">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="open_price">Open Price</label>
                        <input type="text" step="0.0001" name="open_price" id="open_price" class="form-control"
                            value="1.08824">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="close_price">Close Price</label>
                        <input type="text" step="0.0001" name="close_price" id="close_price"
                            class="form-control" value="1.10824">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="pip_size">Pip Size (EUR/USD 1 Pip Size):</label>
                        <input type="text" step="0.0001" name="pip_size" id="pip_size" class="form-control"
                            value="0.0001">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-success" id="calculate-btn">Calculate</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <b>
                            <p id="profit"></p>
                        </b>
                    </div>
                </div>

            </form>

            <div id="result"></div>
        </div>
    </div>
</div>


<?php
include_once ('elements/footer.php');
?>