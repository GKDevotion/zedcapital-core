<?php
$seoArr = [
    "title" => "Cookies Policy | Zed Academy - Privacy & Website Cookie Usage",
    "description" => "Read Zed Academy's Cookies Policy to understand how cookies are used, stored and managed on our website to enhance your experience while ensuring privacy.",
    "keyword" => "Zed Academy cookies policy and data usage, how Zed Academy uses cookies and tracking tools, managing website cookies and user preferences, online cookies policy for educational and trading websites, privacy practices and cookie usage for Zed Academy, website cookie management and user experience optimization, understanding cookies for trading and educational platforms"
];
include_once ('elements/header.php');
?>

<style>
    .policy-header {
      padding: 40px 0;
      margin-top: 120px;
      text-align: center;
    }
    .policy-header h1 {
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--zed-primary);
    }
    .policy-section {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      padding: 40px;
      margin-bottom: 40px;
    }
    .policy-section h2 {
      font-size: 1.6rem;
      font-weight: 600;
      margin-bottom: 20px;
      color: var(--zed-primary);
    }
    .policy-section ul {
      list-style: none;
      padding-left: 0;
    }
    .policy-section ul li::before {
      content: "›";
      color: #0d6efd;
      font-weight: bold;
      margin-right: 8px;
    }
  </style>

  <!-- Header -->
  <header class="policy-header" data-aos="fade-down">
    <h1>Cookies Policy</h1>
    <p class="mt-3">Last updated: October 04, 2025</p>
  </header>

  <!-- Main Content -->
  <main class="container py-5">

    <section class="policy-section" data-aos="fade-up">
      <p>
        This Cookies Policy explains what cookies are, how and why we use them on our Website, 
        and the choices available to you. Please read this Policy alongside our Privacy Policy 
        to understand how we process personal data in connection with cookies.
      </p>
      <p><strong>We do not store sensitive personal information</strong> (such as mailing addresses or account passwords) in the cookies we use.</p>
    </section>

    <!-- Interpretation and Definitions -->
    <section class="policy-section" data-aos="fade-right">
      <h2>1) Interpretation and Definitions</h2>
      <p><strong>Interpretation:</strong> Words with an initial capital letter have meanings defined below. The following definitions apply whether they appear in singular or plural.</p>
      <ul>
        <li><strong>Company</strong> means ZED CAPITAL INTERNATIONAL LIMITED, Ebene, Mauritius.</li>
        <li><strong>Cookies</strong> are small text files placed on your device by a website to store preferences or past actions.</li>
        <li><strong>Website</strong> refers to Zed Capital, accessible at <a href="https://zedcapital.com/">https://zedcapital.com/</a>.</li>
        <li><strong>You</strong> means the individual accessing or using the Website, or the company/legal entity they represent.</li>
      </ul>
    </section>

    <!-- How We Use Cookies -->
    <section class="policy-section" data-aos="fade-left">
      <h2>2) How We Use Cookies</h2>
      <p>Cookies help us provide, protect and improve the Website by enabling core functionality, remembering preferences and analyzing usage.</p>
      <ul>
        <li><strong>Strictly Necessary Cookies</strong> – essential for site operation (secure login, fraud prevention).</li>
        <li><strong>Functionality Cookies</strong> – remember choices like language or login details.</li>
        <li><strong>Performance / Analytics Cookies</strong> – track site usage and improve performance.</li>
        <li><strong>Advertising / Targeting Cookies</strong> – help show relevant ads via third parties.</li>
      </ul>
    </section>

    <!-- Third-Party Cookies -->
    <section class="policy-section" data-aos="fade-up">
      <h2>3) Third-Party Cookies</h2>
      <p>Some cookies are set by third-party providers (analytics, advertising, social media). We do not control these cookies; please review their policies.</p>
    </section>

    <!-- Choices -->
    <section class="policy-section" data-aos="fade-up">
      <h2>4) Your Choices and Cookie Management</h2>
      <p>You can manage cookies via browser settings or cookie banners. Links to help pages:</p>
      <ul>
        <li><a href="https://support.google.com/accounts/answer/32050" target="_blank">Chrome</a></li>
        <li><a href="http://support.microsoft.com/kb/278835" target="_blank">Internet Explorer</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" target="_blank">Firefox</a></li>
        <li><a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank">Safari</a></li>
      </ul>
    </section>

    <!-- Retention -->
    <section class="policy-section" data-aos="fade-right">
      <h2>5) Retention</h2>
      <p>Session cookies expire when you close your browser. Persistent cookies remain until expiry or manual deletion.</p>
    </section>

    <!-- DNT -->
    <section class="policy-section" data-aos="fade-left">
      <h2>6) Do Not Track</h2>
      <p>Our Website does not currently respond to DNT signals, as no standard has been adopted yet.</p>
    </section>

    <!-- Updates -->
    <section class="policy-section" data-aos="fade-up">
      <h2>7) Updates to This Policy</h2>
      <p>We may update this Policy as technology, laws, or practices change. The “Last updated” date will always be revised.</p>
    </section>

    <!-- Contact -->
    <section class="policy-section" data-aos="zoom-in">
      <h2>8) Contact Us</h2>
      <ul>
        <li>Email: <a href="mailto:support@zedcapital.com">support@zedcapital.com</a></li>
        <li>Website: <a href="https://zedcapital.com/cookie-policy">https://zedcapital.com/cookie-policy</a></li>
        <li>Phone: +230 655 5223</li>
        <li>Address: ZED CAPITAL INTERNATIONAL LIMITED, Level 7, Iconebene, Lot B441, Rue de l'Institut, Ebene, Mauritius</li>
      </ul>
    </section>

  </main>

<?php
include_once ('elements/footer.php');
?>