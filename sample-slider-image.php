<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Slider Example</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .carousel-indicators{
            bottom: -50px;
        }
    </style>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <!-- Example Code Start-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <?php
            for( $i=0;$i<=20;$i++ ){
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
            for( $i=0;$i<=20;$i++ ){
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
</body>

</html>