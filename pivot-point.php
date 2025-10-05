<?php
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

    .mt-30 {
        margin-top: 30px;
    }
    .mb-30 {
        margin-bottom: 30px;
    }
</style>

<div class="container pivot-point">

    <div class="row page-title-h2-tag">
        <div class="col-md-12 text-center section-title mt-30 mb-30">
            <h1 class="">How to calculate pivot points?</h1>
            <p class="secondary-color mt-10">Use our accurate Pivot Points Calculator to help you find the next day
                pivot levels and the three main levels of support and resistance of any instrument.</p>
        </div>
    </div>

    <div class="row mt-30 mb-30 box-shadow p-30">
        <div class="col-md-12 text-center p-10">
            <h2 class="">What is a Pivot Point Calculator</h2>
        </div>
        <div class="col-md-12 text-justify">
            <p class="p-content">Technical analysts can use a pivot point calculator to find possible levels of support
                and resistance for a financial asset, such as a stock, currency pair, or commodity. whether deciding
                whether to enter and exit the market, traders and investors may find these levels to be helpful.</p>
            <p class="p-content">The Standard Pivot Point Formula is the approach most frequently used to determine
                pivot points. Here is the formula along with a quick glossary of the terms:</p>
            <div class="row">
                <div class="col-md-12">
                    <span class="ml-10">1. Pivot Point (PP) = (High + Low + Close) / 3</span><br>
                    <span class="ml-20">- High: The highest price reached during the previous trading
                        session.</span><br>
                    <span class="ml-20">- Low: The lowest price reached during the previous trading session.</span><br>
                    <span class="ml-20">- Close: The closing price of the previous trading session.</span><br>

                    <p class="p-content mt-10 ml-10">Once you know the Pivot Point (PP), you may use it to determine the
                        levels of
                        support and resistance:</p>
                    <span class="ml-10">2. First Support Level (S1) = (2 * PP) - High</span><br>
                    <span class="ml-10">3. First Resistance Level (R1) = (2 * PP) - Low</span><br>
                    <span class="ml-10">4. Second Support Level (S2) = PP - (High - Low)</span><br>
                    <span class="ml-10">5. Second Resistance Level (R2) = PP + (High - Low)</span><br>
                    <span class="ml-10">6. Third Support Level (S3) = Low - 2 * (High - PP)</span><br>
                    <span class="ml-10">7. Third Resistance Level (R3) = High + 2 * (PP - Low)</span><br>
                </div>
            </div>
            <p class="p-content mt-20">The high, low, and closing prices from the previous trading session are required
                in order to use a pivot point calculator. To determine the Pivot Point and the corresponding levels of
                support and resistance, enter these numbers into the formula.</p>
            <p class="p-content">Pivot point calculators are available on a lot of trading platforms and financial
                websites. You can enter the required data into the calculator, and it will automatically determine the
                pivot point as well as its levels of support and resistance. Technical analysts and day traders are
                particularly fond of these calculators..</p>
            <p class="p-content">To make well-informed trading decisions, traders frequently combine pivot points with
                other indicators and techniques, as they are but one technical analysis tool. Furthermore, the
                efficiency of pivot points.</p>
            <p class="p-content">can change according on the asset being studied and the state of the market.</p>
        </div>

    </div>

    <div class="row mt-30 mb-5">
        <div class="col-md-8 offset-2 box-shadow">

            <form id="pivot_point_calculator_form">
                <input type="hidden" id="pivot_point_calculator_form_url"
                    value="{{ route('pivot_point_calculator_form') }}">
                <div class="row">

                    <div class="col-md-6 pt-3">
                        <label for="high">High</label>
                        <input type="text" name="high" id="high" class="form-control" value="1">
                    </div>

                    <div class="col-md-6 pt-3">
                        <label for="low">Low</label>
                        <input type="text" step="0.0001" name="low" id="low" class="form-control"
                            value="1.08824">
                    </div>
                    <div class="col-md-6 pt-3">
                        <label for="close">Close</label>
                        <input type="text" step="0.0001" name="close" id="close" class="form-control"
                            value="1.10824">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-success" id="calculate-btn">Calculate</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-5 result d-none">

                        <div class="row">
                            <div class="col-md-4">
                                <h4>Standard Pivot Points</h4>
                                <p id="standardPivotPoint"></p>
                                <p id="standardR1"></p>
                                <p id="standardR2"></p>
                                <p id="standardR3"></p>
                                <p id="standardS1"></p>
                                <p id="standardS2"></p>
                                <p id="standardS3"></p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="">Fibonacci Pivot Points</h4>
                                <p id="fibonacciPivotPoint"></p>
                                <p id="fibonacciR1"></p>
                                <p id="fibonacciR2"></p>
                                <p id="fibonacciR3"></p>
                                <p id="fibonacciS1"></p>
                                <p id="fibonacciS2"></p>
                                <p id="fibonacciS3"></p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="">Camarilla Pivot Points</h4>
                                <p id="camarillaPivotPoint"></p>
                                <p id="camarillaR1"></p>
                                <p id="camarillaR2"></p>
                                <p id="camarillaR3"></p>
                                <p id="camarillaS1"></p>
                                <p id="camarillaS2"></p>
                                <p id="camarillaS3"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<?php
include_once ('elements/footer.php');
?>