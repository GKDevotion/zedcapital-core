<?php
include_once('elements/header.php');
?>

<style>

    .faq-header {
        padding: 40px 0;
        margin-top: 120px;
    }
    .faq-title {
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 2rem;
    }
    .accordion-button {
        font-weight: 700;
        font-size: 1rem;
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
        font-size: 1rem;
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

<section class="bg-white faq-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12" data-aos="fade-up" data-aos-duration="850">
                <div class="mb-5">
                    <span class="faq-title"> ZED CAPITAL INTERNATIONAL LTD</span> <br>
                    <span style="font-size: 1.8rem; margin-bottom: 10px;"> FREQUENTLY ASKED QUESTIONS (FAQs)</span>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                1. What does Zed Capital International Ltd do?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital International Ltd is a globally regulated multi-asset brokerage offering access to Forex, Commodities, Indices, Stocks (CFDs) and Crypto CFDs. It provides clients with advanced trading technology, transparent pricing and institutional-grade liquidity via the Meta Trader 5 platform.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                2. Where is Zed Capital International Ltd regulated?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital is authorized and regulated by the Financial Services Commission (FSC) of Mauritius, ensuring full compliance with international financial and client fund protection standards. The company holds regulatory number GB24203133.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                3. What does FSC regulation mean for clients?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                It ensures that Zed Capital operates under strict financial, operational and ethical supervision. Client funds are held in segregated accounts and protected through regular audits and compliance checks.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                4. What is Zed Capital's mission?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To deliver a transparent, technology-driven and secure trading environment for traders and investors worldwide - empowering them through innovation, reliability and service excellence.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                5. Does Zed Capital provide investment advice or trading signals?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                No. Zed Capital is a brokerage firm and does not provide trade signals, investment advice or manage client accounts. All trading activity is at the client's discretion.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="true" aria-controls="faq6">
                                6. How does Zed Capital protect client funds?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital ensures the highest level of fund safety through:
                                <ul class="arrow-list">
                                    <li>
                                        Segregated client accounts with trusted banking partners
                                    </li>
                                    <li>
                                        Tier-1 financial institutions for fund custody
                                    </li>
                                    <li>
                                        Strict AML/KYC compliance and regular audits
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="true" aria-controls="faq7">
                                7. Are client funds insured or covered by any scheme?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Client deposits are safeguarded under FSC Mauritius regulations and Zed Capital’s internal fund protection policies.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="true" aria-controls="faq8">
                                8. Does Zed Capital use trusted banking and crypto partners?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Zed Capital works with top-tier global banks and reputable crypto custodians to ensure fund security and smooth transaction processing.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="true" aria-controls="faq9">
                                9. How is client data protected?
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                All personal and financial data are secured through 256-bit SSL encryption, firewalls and GDPR-compliant privacy practices.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="true" aria-controls="faq10">
                                10. What is the minimum age to open an account?
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Clients must be 18 years or older and legally eligible to enter into a financial contract in their jurisdiction.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 11 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="true" aria-controls="faq11">
                                11. Does Zed Capital accept clients globally?
                            </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Zed Capital welcomes clients worldwide except those from restricted or sanctioned jurisdictions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 12 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="true" aria-controls="faq12">
                                12. What makes Zed Capital different from other brokers?
                            </button>
                        </h2>
                        <div id="faq12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="arrow-list">
                                    <li>
                                        FSC-regulated operations
                                    </li>
                                    <li>
                                        1000+ tradable instruments
                                    </li>
                                    <li>
                                        Instant crypto deposits and 24-hour withdrawals
                                    </li>
                                        50% stop-out protection
                                    </li>
                                    <li>
                                        24x7 client support
                                    </li>
                                    <li>
                                        Transparent pricing
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 13 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading13">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq13" aria-expanded="true" aria-controls="faq13">
                                13. Does Zed Capital offer corporate or institutional accounts?
                            </button>
                        </h2>
                        <div id="faq13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Institutional clients can request customized liquidity, spreads and dedicated account management solutions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 14 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading14">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq14" aria-expanded="true" aria-controls="faq14">
                                14. Where can I verify Zed Capital's regulation?
                            </button>
                        </h2>
                        <div id="faq14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can confirm our regulatory status directly on the FSC Mauritius website under the entity name Zed Capital International Ltd.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 15 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq" aria-expanded="true" aria-controls="faq">
                                15. What account types does Zed Capital offer?
                            </button>
                        </h2>
                        <div id="faq" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital provides two account options:
                                    <ul class="arrow-list">
                                        <li>
                                            Elite Premium Account - Low spreads, zero commission, ideal for standard traders.
                                        </li>
                                        <li>
                                            Raw Account - True ECN execution with raw spreads from 0.1 pips and low commission.
                                        </li>
                                    </ul>
                                Both accounts include a 50% stop-out level and leverage of up to 1:500.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 16 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading16">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq16" aria-expanded="true" aria-controls="faq16">
                                16. What is the minimum deposit requirement?
                            </button>
                        </h2>
                        <div id="faq16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The minimum deposit starts at $100.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 17 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading17">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq17" aria-expanded="true" aria-controls="faq17">
                                 17. What is the stop-out level at Zed Capital?
                            </button>
                        </h2>
                        <div id="faq17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                  The stop-out level is 50%, meaning trades may close automatically when equity falls to half the required margin.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 18 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading18">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq18" aria-expanded="true" aria-controls="faq18">
                                 18. Which trading platform does Zed Capital use?
                            </button>
                        </h2>
                        <div id="faq18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                  Zed Capital operates exclusively on Meta Trader 5 (MT5) - a multi-asset platform offering advanced analytics, algorithmic trading and mobile access.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 19 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading19">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq19" aria-expanded="true" aria-controls="faq19">
                                   19. Does Zed Capital support automated trading or EAs?
                            </button>
                        </h2>
                        <div id="faq19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. All Expert Advisors (EAs), custom indicators, scalping and hedging strategies are fully supported.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 20 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading20">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq20" aria-expanded="true" aria-controls="faq20">
                                    20. Which instruments can I trade?
                            </button>
                        </h2>
                        <div id="faq20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                 Over 1,000 global instruments, including:
                                        <ul class="arrow-list">
                                            <li>
                                                Forex pairs (major, minor, exotic)
                                            </li>
                                            <li>
                                                Commodities (Gold, Silver, Oil, Gas)
                                            </li>
                                            <li>
                                                Indices (US30, NAS100, GER40, UK100)
                                            </li>
                                            <li>
                                                Stock CFDs (Apple, Tesla and others)
                                            </li>
                                            <li>
                                                Crypto CFDs (BTC, ETH, XRP, LTC etc.)
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 21 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading21">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq21" aria-expanded="true" aria-controls="faq21">
                                 21. What deposit methods are available?
                            </button>
                        </h2>
                        <div id="faq21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                  Zed Capital supports:
                                        <ul class="arrow-list">
                                            <li>
                                                Bank Wire Transfer (1-3 business days)
                                            </li>
                                            <li>
                                                Cryptocurrency (BTC, USDT, ETH) - Instant confirmation
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 22 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading22">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq22" aria-expanded="true" aria-controls="faq22">
                                  22. Are crypto deposits instant?
                            </button>
                        </h2>
                        <div id="faq22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, Deposits via crypto are credited instantly after blockchain confirmation, ensuring quick access to trading capital.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 23 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading23">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq23" aria-expanded="true" aria-controls="faq23">
                                 23. What withdrawal methods are available?
                            </button>
                        </h2>
                        <div id="faq23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                  Withdrawals are processed using the same method as the deposit - either crypto or bank wire. Requests are completed within 24 hours on business days.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 24 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading24">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq24" aria-expanded="true" aria-controls="faq24">
                                     24. Are there any deposit or withdrawal fees?
                            </button>
                        </h2>
                        <div id="faq24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital charges no internal fees. External network or bank charges may apply depending on your provider.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 25 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading25">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq25" aria-expanded="true" aria-controls="faq25">
                                 25. Can I open multiple accounts?
                            </button>
                        </h2>
                        <div id="faq25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                 Yes. You can manage multiple live or demo accounts under one client profile to diversify or test different strategies.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 26 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading26">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq26" aria-expanded="true" aria-controls="faq26">
                                  26. Does Zed Capital offer Islamic (Swap-Free) Accounts?
                            </button>
                        </h2>
                        <div id="faq26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Swap-free (Islamic) accounts are available upon request for clients following Sharia principles.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 27 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading27">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq27" aria-expanded="true" aria-controls="faq27">
                                 27. How do I verify my account?
                            </button>
                        </h2>
                        <div id="faq27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Upload valid KYC documents (ID and proof of address) through the client portal. The verification process usually takes only a few minutes.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 28 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading28">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq28" aria-expanded="true" aria-controls="faq28">
                                28. How fast are trades executed?
                            </button>
                        </h2>
                        <div id="faq28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Zed Capital provides ultra-low latency execution, averaging under 50 milliseconds with Tier-1 liquidity providers.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 29 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading29">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq29" aria-expanded="true" aria-controls="faq29">
                                29. Does Zed Capital offer 24x7 support? 
                            </button>
                        </h2>
                        <div id="faq29" class="accordion-collapse collapse" aria-labelledby="heading29" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Our expert team is available 24 hours a day, 7 days a week for technical, trading and account assistance.
                                    📩 Email: support@zedcapital.com
                                    🌐 Website: www.zedcapital.com
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 30 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading30">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq30" aria-expanded="true" aria-controls="faq30">
                                 30. How long do withdrawals take?
                            </button>
                        </h2>
                        <div id="faq30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                  Withdrawals are processed within 24 hours of approval. Crypto withdrawals are typically completed faster.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 31 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading31">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq31" aria-expanded="true" aria-controls="faq31">
                                31. Does Zed Capital offer educational resources?
                            </button>
                        </h2>
                        <div id="faq31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Through Zed Academy, clients gain access to professional webinars, tutorials, trading seminars and market analysis.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 32 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading32">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq32" aria-expanded="true" aria-controls="faq32">
                                 32. Does Zed Capital provide demo accounts?
                            </button>
                        </h2>
                        <div id="faq32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                 Yes. A free MT5 demo account is available to practice trading strategies in a risk-free environment.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 33 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading33">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq33" aria-expanded="true" aria-controls="faq33">
                                33. Does Zed Capital offer Live Chat support?
                            </button>
                        </h2>
                        <div id="faq33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                 Yes. Zed Capital provides instant Live Chat support directly through the official website.
                                    Our multilingual support team is available 24×7 to assist with account setup, deposits, technical guidance or general inquiries in real time.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 34 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="850">
                        <h2 class="accordion-header" id="heading34">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq34" aria-expanded="true" aria-controls="faq34">
                                 34. Why choose Zed Capital International Ltd?
                            </button>
                        </h2>
                        <div id="faq34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <ul class="arrow-list">
                                        <li>
                                            FSC-regulated brokerage
                                        </li>
                                        <li>
                                            1000+ instruments across markets
                                        </li>
                                        <li>
                                            Instant crypto deposits and 24-hour withdrawals
                                        </li>
                                        <li>
                                            50% stop-out protection
                                        </li>
                                        <li>
                                            Two account types (Elite and Raw)
                                        </li>
                                        <li>
                                            24x7 global support
                                        </li>
                                        <li>
                                            Transparent pricing and secure funds
                                        </li>
                                        <li>
                                            Advanced MT5 trading platform
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('elements/footer.php');
?>