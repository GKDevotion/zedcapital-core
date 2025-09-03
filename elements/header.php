<?php
    $version = 0.03;
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="assets/css/style.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="assets/css/responsive.css?v=<?php echo $version;?>" rel="stylesheet">
        <link href="assets/css/keyframe.css?v=<?php echo $version;?>" rel="stylesheet">

        <!-- OwlCarousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

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
                    <div class="top-bar d-flex align-items-center justify-content-between px-3 px-md-7">
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
                            <a href="#" class="d-none d-sm-inline">
                                <img style="width: 20px;" src="https://cdn-icons-png.flaticon.com/512/10009/10009068.png" />
                                Client
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
                    <div class="container-fluid">
                        <a class="navbar-brand m-0" href="index.php">
                            <img src="assets/images/logo.png" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mainNavbar">
                            <ul class="navbar-nav m-auto mb-2 mb-lg-0 menu">
                                <li class="nav-item"><a class="nav-link" href="why-zedcapital.php">Why Zed Capital</a></li>

                                <!-- Financial Market Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="financialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Financial Market
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="financialDropdown">
                                        <li>
                                        <a class="dropdown-item" href="american-market.php">
                                            <img src="https://cdn-icons-png.flaticon.com/128/12653/12653527.png">
                                            American Market
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="european-market.php">
                                            <img src="https://cdn-icons-png.flaticon.com/128/16003/16003443.png">
                                            European Market
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="middle-eastern-market.php">
                                            <img src="https://cdn-icons-png.flaticon.com/128/16496/16496144.png">
                                            Middle Eastern Market
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="asian-market.php">
                                            <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png">
                                            Asian Market
                                        </a>
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="trading-view-market.php">
                                            <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png">
                                            Trading View Market
                                        </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Product Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                                    <ul class="dropdown-menu" aria-labelledby="productDropdown">
                                        <li>
                                            <a class="dropdown-item" href="stock.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/12653/12653527.png">
                                                Stock
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="forex.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png">
                                                Forex
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="indices.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/16496/16496144.png">
                                                Indices
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="metal.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/16003/16003443.png">
                                                Metal
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="commodities.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png">
                                                Commodities
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="crypto.php">
                                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png">
                                                Crypto
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="platform.php">Platform</a></li>
                                <li class="nav-item"><a class="nav-link" href="tools-resources.php">Tools & Resources</a></li>
                                <li class="nav-item"><a class="nav-link" href="zed-academy.php">Zed Academy</a></li>
                                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                            </ul>
                        
                            <div class="d-flex">
                                <div class="li-demo-account-btn">
                                <a href="#" class="btn btn-demo demo-account-btn">
                                    Demo Account
                                </a>
                                </div>
                                <div class="li-live-account-btn">
                                <a href="#" class="btn btn-live ms-2 live-account-btn">
                                    Live Account
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <!-- ✅ End STICKY HEADER (Top bar + Navbar) -->