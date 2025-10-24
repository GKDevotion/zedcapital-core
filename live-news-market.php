<style>
    .testimonial-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    #marketNews h2 {
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-image: url('<?php echo getBaseUrl(); ?>/assets/images/background/live-news-market.jpg'); */
        background-size: cover;
        background-repeat: no-repeat;
    }

    .sentiment-neutral {
        color: #888;
    }

    .sentiment-positive {
        color: #10B981;
    }

    /* Emerald-500 */
    .sentiment-negative {
        color: #EF4444;
    }

    /* Red-500 */

    .testimonial-card svg{
        width: 25px;
        color: var(--zed-secondary);
        margin-right: 5px;
    }

    .testimonial-card span{
        font-size: 0.9rem;
    }

    .border-gray{
        --bs-border-opacity: 1;
        border-color: var(--zed-secondary) !important;
    }
</style>
<section id="marketNews" class="py-5">
    <div class="container">

        <div class="col-12 text-center">
            <p class="fs-5 text-gray">Overview</p>
            <h2 class="text-center mb-4 h2">Latest Market News</h2>
        </div>

        <div id="marketNewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-6 mb-3">
                            <div class="card testimonial-card p-4">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class=" text-gray">2025-10-24 11:56:36</span>
                                </div>
                                <h5 class="mb-4 fw-bold">
                                    US Dollar Price Forecast: CPI Report and Fed Rate Bets Shape Market Mood - GBP/USD and EUR/USD
                                </h5>
                                <div class="border-top border-gray pt-4">
                                    <p class="text-gray mb-1">
                                        <b>Source:</b> Bloomberg
                                    </p>
                                    <p class="text-gray mb-1">
                                        <b>Pair:</b> AUD-JPY
                                    </p>
                                    <p class="text-gray mb-2">
                                        <b>Sentiment:</b> <span class="sentiment-negative">Negative</span>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        <span class="border-end border-gray pe-3 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Australia</span>
                                        <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#marketNewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#marketNewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</section>