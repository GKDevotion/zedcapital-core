<?php
$seoArr = [
    "title" => "Privacy Policy | Zed Academy - Protecting Your Data & Privacy",
    "description" => "Read Zed Academy's Privacy Policy to understand how we collect, use, and protect your personal data while ensuring transparency and trust in our platform.",
    "keyword" => "privacy policy, data protection, user privacy, Zed Academy data security, trading platform privacy, Zed Academy privacy policy for users, how Zed Academy collects and protects personal data, data protection policy for online trading education, secure user information and privacy guidelines, online trading platform privacy and confidentiality, managing personal data in trading platforms"
];
include_once ('elements/header.php');
?>

<style>
    .policy-header {
      color: var(--zed-primary);
      padding: 80px 0 40px;
      text-align: center;
      margin-top: 120px;
    }
    .policy-header h1 {
      font-weight: 600;
      letter-spacing: 1px;
    }
    .policy-section {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
      padding: 30px;
      margin-bottom: 25px;
    }
    .policy-section h5 {
      color: var(--zed-primary);
      font-weight: 600;
      margin-bottom: 15px;
    }
    footer {
      background-color: #002b5c;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }
    @media (max-width: 768px) {
      .policy-section {
        padding: 20px;
      }
    }
  </style>

<!-- Header -->
  <header class="policy-header" data-aos="fade-down">
    <div class="container">
      <h1>Privacy Policy</h1>
      <p class="mb-0">Effective date: 04 October 2025</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="policy-section" data-aos="fade-up">
      <h5>1. Introduction</h5>
      <p>Zed Capital International Ltd (“Zed Capital”, “we”, “us”, “our”) is licensed and supervised by the Financial Services Commission (FSC), Mauritius. This Privacy Policy explains how we collect, use, disclose, store, and protect personal data when you visit <a href="https://zedcapital.com" target="_blank">zedcapital.com</a> or use our Services.</p>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="100">
      <h5>2. Controller & Contact</h5>
      <ul>
        <li><strong>Controller:</strong> Zed Capital International Ltd</li>
        <li><strong>Registered office:</strong> Level 7, Iconebene, Lot 8441, Rue de l'Institut, Ebene, Mauritius</li>
        <li><strong>Website:</strong> <a href="https://zedcapital.com">https://zedcapital.com</a></li>
        <li><strong>Privacy email:</strong> <a href="mailto:privacy@zedcapital.com">privacy@zedcapital.com</a></li>
        <li><strong>Client support:</strong> <a href="mailto:support@zedcapital.com">support@zedcapital.com</a></li>
        <li><strong>Telephone:</strong> +230 655 5223</li>
      </ul>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
      <h5>3. Lawful Bases</h5>
      <p>We process personal data under contract, legal obligation, legitimate interests, and consent where applicable (e.g., for marketing or non-essential cookies).</p>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="300">
      <h5>4. Information We Collect</h5>
      <p>We may collect and process information such as identity details, contact information, account and suitability data, technical and usage data, communications, and data from public or third-party sources.</p>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="400">
      <h5>5. How We Collect</h5>
      <ul>
        <li>Directly from you via applications, onboarding, or support.</li>
        <li>Automatically via cookies or analytics tools.</li>
        <li>From third-party sources such as KYC/AML providers and payment institutions.</li>
      </ul>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="500">
      <h5>6-18. Other Provisions</h5>
      <p>Includes use of data, cookies, automated decisions, disclosures, retention, security, your rights, communications, third-party links, children’s data, marketing preferences, policy updates, and contact details. Please read the full policy for detailed information.</p>
    </div>

    <div class="policy-section" data-aos="fade-up" data-aos-delay="600">
      <h5>Contact</h5>
      <p>For privacy inquiries: <a href="mailto:privacy@zedcapital.com">privacy@zedcapital.com</a><br>
         Client support: <a href="mailto:support@zedcapital.com">support@zedcapital.com</a><br>
         Address: Level 7, Iconebene, Lot 8441, Rue de l'Institut, Ebene, Mauritius</p>
    </div>
  </main>


<?php
include_once ('elements/footer.php');
?>