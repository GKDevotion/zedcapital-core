<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container-fluid">
        <a class="navbar-brand m-0" href="<?php echo getBaseUrl(); ?>">
            <img src="<?php echo getBaseUrl(); ?>/assets/images/logo.png" alt="Zed Capital" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 menu">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo getBaseUrl(); ?>/why-zedcapital">
                        Why Zed Capital
                    </a>
                </li>

                <!-- Financial Market Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="financialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Financial Markets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="financialDropdown">
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/american-market">
                                <img src="https://cdn-icons-png.flaticon.com/128/12653/12653527.png" alt="American Market">
                                American Market
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/european-market">
                                <img src="https://cdn-icons-png.flaticon.com/128/16003/16003443.png" alt="European Market">
                                European Market
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/middle-eastern-market">
                                <img src="https://cdn-icons-png.flaticon.com/128/16496/16496144.png" alt="Middle Eastern Market">
                                Middle Eastern Market
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/asian-market">
                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png" alt="Asian Market">
                                Asian Market
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-none" href="<?php echo getBaseUrl(); ?>/trading-view-market">
                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png" alt="Trading View Market">
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
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/stock">
                                <img src="https://cdn-icons-png.flaticon.com/128/12653/12653527.png" alt="Stocks">
                                Stocks
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/forex">
                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png" alt="Forex">
                                Forex
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/metal">
                                <img src="https://cdn-icons-png.flaticon.com/128/16003/16003443.png" alt="Metals">
                                Metals
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/indices">
                                <img src="https://cdn-icons-png.flaticon.com/128/16496/16496144.png" alt="Indices">
                                Indices
                            </a>
                        </li>
                        
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/commodities">
                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png" alt="Commodities">
                                Commodities
                            </a>
                        </li>
                        
                        <li>
                            <a class="dropdown-item" href="<?php echo getBaseUrl(); ?>/crypto">
                                <img src="https://cdn-icons-png.flaticon.com/128/6056/6056781.png" alt="Crypto">
                                Crypto
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Platform Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="platformDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Platforms
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="platformDropdown">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo getBaseUrl(); ?>/platform">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Window Terminal">
                                Windows
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://download.mql5.com/cdn/mobile/mt5/android?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Android App">
                                Android
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://download.mql5.com/cdn/mobile/mt5/ios?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download IOS App">
                                IOS
                            </a>
                        </li>
                        <li class="nav-item d-none">
                            <a class="nav-link" href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Web Trader">
                                Desktop
                            </a>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="openMT5WebTrader">
                                Web Trader
                            </button>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo getBaseUrl(); ?>/tools-resources">
                        Tools & Resources
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo getBaseUrl(); ?>/zed-academy">
                        Zed Academy
                    </a>
                </li>

                <!-- Our Company Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ourCompanyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ourCompanyDropdown">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo getBaseUrl(); ?>/about-us">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo getBaseUrl(); ?>/contact-us">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo getBaseUrl(); ?>/faqs">
                                FAQ's
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        
            <div class="d-flex">
                <div class="li-demo-account-btn">
                <a href="#" class="btn btn-demo demo-account-btn loginLiveAccount" title="Demo Account">
                    Demo Account
                </a>
                </div>
                <div class="li-live-account-btn">
                <a href="#" class="btn btn-live ms-2 live-account-btn loginLiveAccount" title="Live Account">
                    Live Account
                </a>
                </div>
            </div>
        </div>
    </div>
</nav>