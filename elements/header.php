<?php
    $version = 0.061;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Zed Capital</title>

        <!-- Bootstrap 5 CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google Font: Inter -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="assets/css/style.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="assets/css/responsive.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="assets/css/keyframe.css?v=<?php echo $version;?>" rel="stylesheet">
        
        <!-- OwlCarousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            <img src="https://cdn-icons-png.flaticon.com/512/14009/14009731.png" alt="Flag" class="flag-img" />
                            <span class="flag-text">Regulated by the Financial Services Commission(FCS) - <strong>Mauritius</strong></span>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <!-- Language Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="langDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/486/486505.png" />
                                EN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="langDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/128/16002/16002788.png" /> English
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/4060/4060248.png" /> Français
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/128/10600/10600996.png" /> Deutsch
                                    </a>
                                </li>
                                </ul>
                            </div>

                            <!-- Client Login -->
                            <a href="https://cabinet.zedcapital.mu/login" target="_blank" class="d-flex">
                                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/10009/10009068.png" />
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