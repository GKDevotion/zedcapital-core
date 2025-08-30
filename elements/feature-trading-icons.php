<style>
    .feature-icon {
        align-items: center;
        margin-bottom: 25px;
    }

    .feature-icon img {
        max-width: 70px;
        max-height: 70px;
    }

    .feature-box {
        text-align: center;
        padding: 0;
    }

    .feature-title {
        font-weight: 600;
    }

    @media (max-width: 767.98px) {
        .feature-title p{
            padding: 0 !important;
        }
    }
</style>

<section>
    <div class="container pb-5">

        <div class="row pb-3">

            <h2 class="h2 mt-5 mb-5 text-center" data-aos="fade-up" data-aos-duration="250">
                Why trade on MetaTrader 5 with Zed Capital?
            </h2>

            <?php
            $class = isset( $class ) ? $class : 'col-md-3 col-lg-3';
            for( $i=0; $i<count($featureIconArr); $i++ ){
            ?>
                <div class="col-6 <?php echo $class;?> col-sm-6 px-5 py-5" data-aos="fade-up" data-aos-duration="850">
                    <div class="feature-box" data-aos="fade-up" data-aos-duration="100">
                        <div class="feature-icon">
                            <img src="<?php echo $featureIconArr[$i]['icon'];?>" alt="<?php echo $featureIconArr[$i]['title'];?>">
                        </div>
                        <div class="text-center feature-title">
                            <p class="px-5">
                                <?php echo $featureIconArr[$i]['title'];?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>