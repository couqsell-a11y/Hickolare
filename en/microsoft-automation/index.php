<?php
$pageTitle       = "Microsoft Intune, SCCM & AutoPilot - Hicko IT Dendermonde";
$metaDescription = "Hicko IT manages your business devices with Microsoft Intune, SCCM, AutoPilot and Autopatch. Automated setup, centralized control and continuous updates for your SME.";
$metaKeywords    = "Microsoft Intune Dendermonde, SCCM Belgium, AutoPilot, Autopatch, device management, Microsoft automation, IT management SME";
$ogImage         = "/pics/automation.jpg";
$lang            = "en";
$translationUrl  = "/nl/microsoft-automation/";
$extraCss        = "/css/contact.css";
$formSubject     = "Microsoft Automation";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Smart device management for SMEs</p>
          <h1 class="display-6 fw-bold">Microsoft Intune, SCCM &amp; AutoPilot – Complete Control for Your Business</h1>
          <p class="lead">
            At Hicko IT, we ensure all your devices are efficiently managed and secured. From automated setup of new
            laptops through OOBE to continuous updates with Autopatch – we handle IT management end-to-end.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#Voordelen" class="cta-button">Discover the Benefits</a>
            <a href="#contact" class="cta-button">Request Expert Advice</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/Microsoft_Intune_Logo.png" alt="Microsoft Intune" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- How We Support Section -->
  <section id="why" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>How We Support Your Business</h2>
      </div>
      <p>
        Hicko IT helps you streamline management of desktops, laptops, and mobile devices. With
        <b>Microsoft Intune</b> and <b>SCCM</b>, you can centralize device management, while <b>OOBE</b> enables
        quick and error-free setup of new devices. With <b>Autopatch</b>, all systems stay automatically updated,
        ensuring security and productivity for your team.
      </p>
    </div>
  </section>

  <!-- Benefits Section -->
  <section id="Voordelen" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose Hicko IT?</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Centralized Device Management</h3>
                <p>Manage all devices from one platform, including Windows, Mac, and mobile devices.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Automatic Updates with Autopatch</h3>
                <p>Ensure all systems remain secure and up-to-date without manual intervention.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Fast Deployment via AutoPilot</h3>
                <p>New laptops and devices are ready to use immediately – efficient and error-free.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Software &amp; Application Management</h3>
                <p>Deploy and manage applications across all devices with minimal effort.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Expert Support</h3>
                <p>From implementation to ongoing maintenance, Hicko IT ensures your IT environment runs smoothly.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/automation.jpg" alt="Intune Benefits" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section id="video" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Introductory Video</h2>
      </div>
      <p class="text-center">
        See how Intune, SCCM, and OOBE (AutoPilot) streamline your IT operations and boost security for your
        business (English)
      </p>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.youtube.com/embed/YCjx7ZwTSOA?rel=0"
          title="What is AutoPilot"
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
