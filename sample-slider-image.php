<?php
include_once('elements/header.php');
?>
<style>
    #carouselExampleDark{
        padding: 75px 0 0 0;
    }
    .carousel-indicators{
        bottom: -32px;
    }
</style>

<!-- Example Code Start-->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5">
    <div class="carousel-indicators">
        <?php
        for( $i=0;$i<20;$i++ ){
            if( $i==0 ){?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i; ?>" class="active" aria-current="true"></button>
            <?php } else { ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>" class="" aria-label="Slide <?php echo $i; ?>"></button>
            <?php }
        ?>
        <?php
        }
        ?>
    </div>
    <div class="carousel-inner">
        <?php
        for( $i=0;$i<20;$i++ ){
            if( $i==0 ){?>
                <div class="carousel-item active">
                    <img src="assets/images/slider/<?php echo $i+1; ?>.jpg" alt="Slider <?php echo $i; ?>" class="w-100">
                </div>
            <?php } else { ?>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/images/slider/<?php echo $i+1; ?>.jpg" alt="Slider <?php echo $i; ?>" class="w-100">
                </div>
            <?php }
        ?>
        <?php
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Example Code End -->

<!-- Start Support Benefit -->
<style>
    #support_benefit {
        padding: 50px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #support_benefit img {
        width: 100px;
        margin-left: -15px;
        padding-bottom: 15px;
    }

    #support_benefit .img-div {
        min-height: 115px;
    }

    #support_benefit p {
        padding-right: 5px;
    }

    @media (max-width: 767.9px) {
        #account_type {
            padding: 40px 0 !important;
        }

        #support_benefit p {
            padding-right: 0;
        }
    }
</style>

<div id="support_benefit">
    <div class="container px-4">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4">
                <div class="img-div">
                    <img src="assets/images/regulated-stp-broker.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Regulated</p>
                    <p class="mb-0 pb-2">STP Broker</p>
                </h5>
                <p class="mb-0 text-gray">
                    Trade with full confidence through our licensed STP brokerage — regulated, transparent, and committed to fair pricing and reliability.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4">
                <div class="img-div">
                    <img src="assets/images/24x7-support.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">24x7</p>
                    <p class="mb-0 pb-2">Support</p>
                </h5>
                <p class="mb-0 text-gray">
                    Your trusted trading partner, with dedicated experts available around the clock to assist and resolve.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4">
                <div class="img-div">
                    <img src="assets/images/nominee-fund-protection.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Nominee</p>
                    <p class="mb-0 pb-2">Fund Protection</p>
                </h5>
                <p class="mb-0 text-gray">
                    Your capital is safeguarded with strong nominee fund protection — so you can trade stress-free while we keep your investments secure.
                </p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 px-4 py-4">
                <div class="img-div">
                    <img src="assets/images/top-tier-liquidity-provider.gif" />
                </div>
                <h5 class="mt-1 fw-bold">
                    <p class="mb-0 pb-2">Top Tier Liquidity</p>
                    <p class="mb-0 pb-2">Provider</p>
                </h5>
                <p class="mb-0 text-gray">
                    Access deep liquidity and tight spreads with top-tier global providers — ensuring fast execution and reliable market access.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Support Benefit -->

<?php
include_once('elements/footer.php');
?>