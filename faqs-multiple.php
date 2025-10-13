<?php
$seoArr = [
    "title" => "",
    "description" => "",
    "keyword" => ""
];
include_once('elements/header.php');
?>

<style>
    .faq-container{
        margin-top: 120px;
        padding: 80px 20px;
    }

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

    header h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }
</style>

<div class="container faq-container">

    <header data-aos="fade-down">
        <div class="row text-center mb-5">
            <h1>Frequently Asked Questions</h1>
        </div>
    </header>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    The American Financial Market
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <?php
                    include_once ('elements/faqs/american-market.php');
                    ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Why Choose Zed Capital International Ltd
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <?php
                    include_once ('elements/faqs/choose-zed-capital.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('elements/footer.php');
?>