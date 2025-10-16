<?php
$seoArr = [
    "title" => "Contact Us | Zed Academy - Get in Touch with Our Team",
    "description" => "Get in touch with Zed Academy for support, inquiries, or partnership opportunities. Our team is here to assist you with trading, account, and educational questions.",
    "keyword" => "contact Zed Academy, customer support, trading support, reach Zed Academy, Zed Academy inquiries, how to contact Zed Academy for support, Zed Academy customer support and assistance, contact form for trading account queries, reach Zed Academy team for partnership inquiries, get help with Zed Academy account and trading issues, Zed Academy contact information for global clients, support for Zed Academy platform users and traders"
];
include_once('elements/header.php');
?>

<style>

    .section-title h1{
        color: var(--zed-primary);
        text-transform: capitalize;
    }

    .section-title{
        margin-top: 90px;
        padding: 30px 0;
    }
    .content {
        padding: 2rem 0;
    }

    .contact-wrap .form h3 {
        color: #35477d;
        font-size: 20px;
        margin-bottom: 30px;
    }

    .contact-wrap {
        -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
    }

    .contact-wrap .form {
        background: #fff;
    }

    #form-message-success {
        color: #55A44E;
        font-size: 18px;
        font-weight: bold;
    }

    #form-message-warning, #form-message-success {
        display: none;
    }

    .contact-wrap .col-form-label {
        font-size: 14px;
        color: #b3b3b3;
        display: inline-block;
        padding: 0;
    }

    .form-control, .custom-select {
        height: 45px;
    }
    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        padding-left: 0;
        padding-right: 0;
        border-radius: 0;
        background: none;
    }

    .contact-wrap .contact-info {
        background: #35477d;
    }
    .contact-wrap .contact-info {
        color: #fff;
    }

</style>

<div class="content">

    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1 class="mb-0">Contact Us</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-8 px-5 pt-4">
                        <div class="form h-75">
                            <h3>Send us a message</h3>
                            <form class="mb-5" method="post" id="contact_us">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12 form-group mb-5">
                                        <label for="message" class="col-form-label">Message *</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group text-center">
                                        <input type="submit" value="Send Message" class="btn btn-danger rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
        
                            <div id="responseMsg" class="text-center"></div>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row contact-info py-5">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <i class="fa fa-map"></i>
                                    <h3>
                                        Registered &amp; Physical Address
                                    </h3>
                                    <p class="text-left">
                                        Level 7, Iconebene, Lot B441, Rue de l'Institut, Ebene, Mauritius.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="info-box text-center">
                                    <i class="fa fa-envelope"></i>
                                    <h3>
                                        Email Us
                                    </h3>
                                    <p class="">
                                        support@zedcapital.com
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="info-box text-center">
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
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include_once('elements/footer.php');
?>