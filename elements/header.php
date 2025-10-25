<?php
    $version = 0.0617;
    include_once ('helper/custom.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title><?php echo $seoArr['title'];?></title>
        <base href="<?php echo getBaseUrl(); ?>">
        <meta name="description" content="<?php echo $seoArr['description'];?>">
        <meta name="googlebot" content="index">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="author" content="ZedCapital">
        <meta name="copyright" content="Copyright (c) 2025">
        <meta name="generator" content="ZedCapital">

        <meta name="google-site-verification" content="" />

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo getCurrentUrl(); ?>/assets/images/40X40.webp">

        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo $seoArr['title'];?>">
        <meta property="og:description" content="<?php echo $seoArr['description'];?>">
        <meta property="og:url" content="<?php echo getCurrentUrl(); ?>">
        <meta property="og:site_name" content="ZedCapital">
        <meta property="og:image" content="<?php echo getCurrentUrl(); ?>/assets/images/logo.png">

        <meta property="article:publisher" content="https://www.facebook.com">
        <meta property="article:modified_time" content="26-01-2025">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ZedCapital">
        <meta name="twitter:label1" content="Est. reading time">
        <meta name="twitter:data1" content="10 minutes">
        <meta name="twitter:title" content="<?php echo $seoArr['title'];?>" />
        <meta name="twitter:description" content="<?php echo $seoArr['description'];?>" />
        <meta name="twitter:image" content="<?php echo getCurrentUrl(); ?>/assets/images/logo.png" />

        <link rel="canonical" href="<?php echo getCurrentUrl(); ?>">

        <!-- Bootstrap 5 CSS -->
        <link href="<?php echo getBaseUrl(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google Font: Inter -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="<?php echo getBaseUrl(); ?>/assets/css/style.min.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="<?php echo getBaseUrl(); ?>/assets/css/responsive.min.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="<?php echo getBaseUrl(); ?>/assets/css/keyframe.min.css?v=<?php echo $version;?>" rel="stylesheet">
        
        <!-- OwlCarousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SFX26HRGYM"></script>
        <script>
            var url = "<?php echo getBaseUrl(); ?>";
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-SFX26HRGYM');
        </script>
    </head>

    <body data-load="" data-click-animation="" translate="no">
        <!-- Preloader -->
        <!-- <div id="preloader d-none">
            <img src="assets/images/logo.png" alt="Logo" class="preloader-logo">
        </div> -->

        <!-- ✅ Start STICKY HEADER (Top bar + Navbar) -->
        <section>
            <div class="sticky-header">
                <!-- ✅ TOP BAR -->
                <div class="container-fluid sticky-belt">
                    <div class="top-bar d-flex align-items-center justify-content-between px-md-7">
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/14009/14009731.png" alt="Regulated by the Financial Services Commission (FCS)" class="flag-img" />
                            <span class="flag-text">Regulated by the Financial Services Commission (FCS) - <strong>Mauritius</strong></span>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <!-- Language Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="langDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/486/486505.png" alt="Language" />
                                EN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="langDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/128/16002/16002788.png" alt="English" /> English
                                    </a>
                                </li>
                                <li class="d-none">
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/4060/4060248.png" alt="Français" /> Français
                                    </a>
                                </li>
                                <li class="d-none">
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/128/10600/10600996.png" alt="Deutsch" /> Deutsch
                                    </a>
                                </li>
                                </ul>
                            </div>

                            <!-- Client Login -->
                            <a href="https://cabinet.zedcapital.com/login" target="_blank" class="d-flex">
                                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/10009/10009068.png" alt="Client" />
                                Client
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Header Menu -->
                <?php
                include_once ('elements/header-menu.php');
                ?>
            </div>
        </section>
        <!-- ✅ End STICKY HEADER (Top bar + Navbar) -->