<?php
include_once ('elements/header.php');
?>

<style>
    
    header {
      /* color: #fff; */
      margin-top: 140px;
      padding: 30px 0;
      text-align: center;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
    }
    header h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }
    .policy-section {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.08);
      padding: 40px;
      margin-bottom: 30px;
    }
    .policy-section h2 {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 15px;
    }
    .policy-section p, .policy-section li {
      line-height: 1.7;
      font-size: 15px;
    }
    footer {
      background: #0d6efd;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }
    .list-style {
      list-style: none;
      padding-left: 0;
    }
    .list-style li::before {
      content: "✔";
      color: #0d6efd;
      font-weight: bold;
      margin-right: 8px;
    }
  </style>

  <!-- Header -->
  <header data-aos="fade-down">
    <div class="container">
      <h1>Privacy Policy</h1>
      <p>Effective date: 04 October 2025</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container py-5">
    
    <!-- Section -->
    <div class="policy-section" data-aos="fade-up">
      <h2>1. Introduction</h2>
      <p>Zed Capital International Ltd is licensed and supervised by the Financial Services Commission (FSC), Mauritius. This Privacy Policy explains how we collect, use, disclose, store, and protect personal data when you visit zedcapital.com or use our Services.</p>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="100">
      <h2>2. Controller & Contact</h2>
      <ul class="list-style">
        <li>Controller: Zed Capital International Ltd</li>
        <li>Registered office: Level 7, Iconebene, Lot 8441, Rue de l'Institut, Ebene, Mauritius.</li>
        <li>Website: <a href="https://zedcapital.com" target="_blank">zedcapital.com</a></li>
        <li>Privacy email: privacy@zedcapital.com</li>
        <li>Client support: support@zedcapital.com</li>
        <li>Telephone: +971 4572 7859</li>
      </ul>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
      <h2>3. Lawful Bases</h2>
      <p>We process personal data under contract, legal obligation, legitimate interests, and consent where required.</p>
    </div>

    <!-- Example of more sections -->
    <div class="policy-section" data-aos="fade-up" data-aos-delay="300">
      <h2>4. Information We Collect</h2>
      <ul class="list-style">
        <li>Identity & KYC details</li>
        <li>Contact information</li>
        <li>Account and suitability data</li>
        <li>Technical & usage information</li>
        <li>Communications & call recordings</li>
        <li>Public/third-party sources for verification</li>
      </ul>
    </div>

    <!-- Add the rest of the sections similarly (5–18) -->

    <div class="policy-section" data-aos="fade-up" data-aos-delay="400">
      <h2>18. How to Contact Us</h2>
      <p>Email: <a href="mailto:privacy@zedcapital.com">privacy@zedcapital.com</a> | <a href="mailto:support@zedcapital.com">support@zedcapital.com</a></p>
      <p>Postal: Level 7, Iconebene, Lot 8441, Rue de l'Institut, Ebene, Mauritius</p>
    </div>
  </main>

<?php
include_once ('elements/footer.php');
?>