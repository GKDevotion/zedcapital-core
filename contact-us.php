<?php
include_once ('elements/header.php');
?>

<style>
    .section-title h1{
        color: var(--zed-primary);
        text-transform: capitalize;
    }

    .section-title{
        margin-top: 120px;
        padding: 40px 0;
    }

    .box-shadow {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 20px;
    }

    .section-bg {
        background: url("https://www.zedcapital.mu/public/zcapital/images/contact-bg.png") center;
    }

    .contact .info-box {
        color: #0e2e47;
        text-align: center;
        box-shadow: 0 0 20px rgba(214, 215, 216, 0.8);
        padding: 20px;
        margin-bottom: 8px;
        background-color: #fff;
        opacity: 0.85;
    }

    .contact .php-email-form {
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
        padding: 30px;
        background-color: #fff;
        opacity: 0.85;
    }

    .contact .php-email-form input {
        height: 45px;
    }

    .contact .php-email-form input, .contact .php-email-form textarea {
        border-radius: 5px;
        box-shadow: none;
        font-size: 14px;
        padding: 10px;
    }

    .contact .form-control {
        display: block;
        width: 100%;
        font-weight: 400;
        line-height: 1.5;
        color: var(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .contact .php-email-form button[type="submit"] {
        background: #e71516;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
        border-radius: 5px;
    }
</style>

<section class="contact section-bg p-4">

    <div id="contact" class="container">

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1 class="mb-0">Contact Us</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12 fadeInUp" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="info-box fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <i class="fa fa-map"></i>
                            <h3>
                                Registered & Physical Address
                            </h3>
                            <p class="text-left">
                                <i class="fa fa-map-marker" style="font-size: 18px;"></i>
                                Level 7, Iconebene, Lot B441, Rue de l'Institut, Ebene, Mauritius.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 fadeInUp" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="info-box mt-5 fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <i class="fa fa-envelope"></i>
                            <h3>
                                Email Us
                            </h3>
                            <p class="">
                                support@zedcapital.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 fadeInUp" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="info-box mt-5 fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <i class="fa fa-phone"></i>
                            <h3>
                                Call Us
                            </h3>
                            <p class="">
                                +230 655 5223
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-md-0 fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <form id="contact_us" role="form" class="php-email-form">
                    <input type="hidden" name="country_code" value="" class="country_code">
                    <div class="row">
                        <div id="ajax-form" class="col-md-6 form-group fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name">
                            <span id="name-error" class="text-danger"></span>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0 fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <input type="text" class="form-control mobile-number-with-country-flag" name="phone"
                                id="phone" placeholder="Your Phone">
                            <span id="phone-error" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div id="ajax-form" class="col-md-6 form-group fadeIn d-none" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject">
                            <span id="subject-error" class="text-danger"></span>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0 fadeIn" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email">
                            <span id="email-error" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="form-group mt-3 fadeIn" data-wow-delay="100ms"
                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <span id="message-error" class="text-danger"></span>
                    </div>

                    <div class="my-3">
                        <div class="sent-message"></div>
                    </div>

                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<?php
include_once ('elements/footer.php');
?>