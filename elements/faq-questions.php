<style>
    .faq-title {
        font-weight: 700;
        font-size: 2.2rem;
        margin-bottom: 2rem;
    }
    .accordion-button {
        font-weight: 700;
        font-size: 1.25rem;
        background: #fff;
        border: none;
        box-shadow: none;
        padding: 1.1rem 0;
    }
    .accordion-button:focus {
        outline: none;
        box-shadow: none;
    }
    .accordion-button:not(.collapsed) {
        color: #222;
        background-color: #fff;
        box-shadow: none;
    }
    .accordion-body {
        background: #fff;
        font-size: 1.08rem;
        color: #757575;
        padding: 0.75rem 1.25rem 1.3rem 1.25rem;
    }
    .accordion-item {
        border: none;
        border-bottom: 1.2px solid #e5e5e5;
        border-radius: 0;
        margin-bottom: 0;
    }
    .accordion-header {
        border-bottom: none;
    }
</style>

<section class="bg-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12" data-aos="fade-up" data-aos-duration="850">
                <div class="faq-title"><?php echo $paramArr['name'];?> FAQs - Your Questions Answered</div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                What are <?php echo $paramArr['name'];?> CFDs?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A Contract for Difference (CFD) on <?php echo $paramArr['name'];?> allows you to trade the price movement of shares without owning the underlying asset.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                How Do I Trade <?php echo $paramArr['name'];?> with Zed Capital?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Easily trade shares using Zed Capital's MT4 platform. Open an account, deposit funds and start trading global stocks.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                How Do I Get Started with CFD <?php echo $paramArr['name'];?> Trading?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Start by opening an account, funding it and using the trading platform to select and trade your preferred CFD <?php echo $paramArr['name'];?>.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                How Much Do I Need to Start CFD <?php echo $paramArr['name'];?> Trading?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The minimum deposit depends on your broker and the margin requirements for your chosen <?php echo $paramArr['name'];?>. Some accounts start from $100.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Are CFD Shares Better Than <?php echo $paramArr['name'];?>?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                CFDs offer leverage, short-selling and easier access, but lack ownership and can carry higher risks than traditional <?php echo $paramArr['name'];?> purchases.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>