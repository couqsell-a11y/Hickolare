<?php
$pageTitle       = "Microsoft 365 for Business - Hicko IT Dendermonde";
$metaDescription = "Hicko IT sets up and manages Microsoft 365 for your business in Dendermonde. Word, Excel, Teams, OneDrive and more — always up to date, secure and accessible anywhere.";
$metaKeywords    = "Microsoft 365 Dendermonde, Office 365 Belgium, Teams, OneDrive, SharePoint, Microsoft 365 SME, cloud productivity";
$ogImage         = "/pics/microsoft365.jpg";
$lang            = "en";
$translationUrl  = "/nl/microsoft365/";
$extraCss        = "/css/contact.css";
$formSubject     = "Microsoft 365";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning small">Collaborate on documents with your team on a single platform</p>
          <h1 class="display-6 fw-bold">Microsoft 365: The Modern Workplace for Your Business</h1>
          <p class="lead">
            From shared contracts to online meetings with suppliers, Microsoft 365 makes collaboration easy, secure,
            and accessible anywhere.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#pakket" class="cta-button">View Plans</a>
            <a href="#contact" class="cta-button">Request a Quote</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/microsoft365.jpg" alt="Microsoft 365" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- What is M365 -->
  <section id="about" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>What is Microsoft 365?</h2>
      </div>
      <p>
        Microsoft 365 is a <strong>cloud-based productivity platform</strong>. A subscription provides access to the
        latest Office apps on desktop, tablet, or mobile, including 1 TB of cloud storage and built-in security
        features.
      </p>
    </div>
  </section>

  <!-- Included Apps -->
  <section id="apps" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Included Apps</h2>
          </div>
          <p>
            Microsoft 365 for business provides a comprehensive set of
            <strong>productivity and communication tools</strong>. The most popular plan,
            <strong>Business Standard</strong>, includes: Word, Excel, PowerPoint, Outlook, Teams, OneDrive, and
            SharePoint. Updates are automatic so your team always works with the latest version.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/365apps.jpg" alt="Microsoft 365 Apps" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits -->
  <section id="benefits" class="section-bg" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Benefits for Your Business</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <img src="/pics/365benefit.jpg" alt="Microsoft 365 Benefits" class="img-fluid" />
        </div>
        <div class="col-lg-6 p-5">
          <p>Our cloud solutions help companies and freelancers work more efficiently. With Microsoft 365 you enjoy:</p>
          <ul>
            <li><i class="bi bi-check2-circle me-3 text-success"></i> Access your files anytime, anywhere</li>
            <li><i class="bi bi-check2-circle me-3 text-success"></i> Scalable to your business needs</li>
            <li><i class="bi bi-check2-circle me-3 text-success"></i> Affordable monthly pricing</li>
            <li><i class="bi bi-check2-circle me-3 text-success"></i> Sync across all devices</li>
          </ul>
          <p>
            Not all applications can be moved to the cloud immediately? No problem: we provide expert guidance for
            tailored solutions.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Plans -->
  <section id="pakket" class="services" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Microsoft 365 Offers 3 Options for Your SME</h2>
      </div>
      <div class="text-center mb-5">
        <a href="/en/microsoft-automation/" class="cta-button">Automation Options</a>
        <p>
          <br />
          Microsoft 365 can be fully <b>customized</b> to fit your business needs.<br />
          Below is an overview of the three available plans.<br />
          <a href="#contact">Contact us for the latest pricing!</a>
        </p>
      </div>
      <div class="row">
        <!-- Business Basic -->
        <div class="col-md-4 d-flex align-items-stretch mb-4">
          <div class="icon-box icon-box-cyan section-bg">
            <h4 class="title">Microsoft 365 Business Basic</h4>
            <p class="description"><i>Light web and mobile apps to kickstart your business</i></p>
            <ul class="package-features">
              <li>Identity and access management for up to 300 users</li>
              <li>Web and mobile versions of Word, Excel, PowerPoint, and Outlook</li>
              <li>Chat, call, and video meetings with Microsoft Teams</li>
              <li>1 TB cloud storage per user</li>
              <li>Over 10 additional apps (Booker, Planner, Forms)</li>
              <li>AI chat experience with writing assistance and data analysis</li>
              <li>Automatic filtering against spam and malware</li>
              <li>24/7 support via phone and online</li>
            </ul>
          </div>
        </div>
        <!-- Business Standard -->
        <div class="col-md-4 d-flex align-items-stretch mb-4">
          <div class="icon-box icon-box-cyan section-bg">
            <h4 class="title">Microsoft 365 Business Standard</h4>
            <p class="description"><i>Everything in Business Basic, plus:</i></p>
            <ul class="package-features">
              <li>Desktop, web, and mobile versions of Word, Excel, PowerPoint, Outlook, and other apps</li>
              <li>Webinars with participant registration and reporting</li>
              <li>Collaborative workspaces with Microsoft Loop</li>
              <li>Video editing and design tools with Microsoft Clipchamp</li>
            </ul>
          </div>
        </div>
        <!-- Business Premium -->
        <div class="col-md-4 d-flex align-items-stretch mb-4">
          <div class="icon-box icon-box-cyan section-bg">
            <h4 class="title">Microsoft 365 Business Premium</h4>
            <p class="description"><i>Everything in Business Standard, plus:</i></p>
            <ul class="package-features">
              <li>Advanced security and device management (Defender, Intune, etc.)</li>
              <li>Defender for Office 365</li>
              <li>Extra compliance and security features</li>
            </ul>
          </div>
        </div>
        <a href="https://www.microsoft.com/nl-be/microsoft-365/business/microsoft-365-plans-and-pricing" target="_blank">
          - Microsoft Subscriptions -
        </a>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section id="video" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Microsoft 365 in Action</h2>
      </div>
      <p class="text-center">Watch this short video to see how Microsoft 365 can transform your business. (English)</p>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.youtube.com/embed/6ole5xROcQw?rel=0"
          title="Microsoft 365 Video"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/contact-form.php'; ?>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
