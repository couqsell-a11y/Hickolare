<?php
$pageTitle       = "IT Support for Businesses & Individuals - Hicko IT Dendermonde";
$metaDescription = "Hicko IT offers fast, professional IT support for businesses and individuals in Dendermonde. Remote assistance, on-site service, and proactive system maintenance.";
$metaKeywords    = "IT support Dendermonde, IT help Belgium, remote IT support, computer help, network support, business IT support";
$ogImage         = "/pics/itsupport.jpg";
$lang            = "en";
$translationUrl  = "/nl/it-support/";
$extraCss        = "/css/contact.css";
$formSubject     = "IT Support";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Fast IT support for businesses and individuals</p>
          <h1 class="display-6 fw-bold">Reliable IT support for your business and personal needs</h1>
          <p class="lead">
            IT issues tend to appear at the worst possible moment… At <strong>Hicko IT</strong>, we
            understand that and are ready to help you right away. Whether you're facing system
            crashes, error messages, or connectivity problems, our <b>remote assistance</b> allows
            us to solve them quickly — so you can keep working without losing valuable time.
          </p>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Request IT support now!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Help Section -->
  <section id="quickhelp" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Quick help with IT problems</h2>
          </div>
          <p>
            As a business owner, you want to work efficiently at all times. An
            <b>IT failure or network issue</b> always comes at the wrong time. Whether it's a slow
            internet connection, a printer that won't work, or a frozen mailbox — we'll make sure
            you're back up and running quickly. Our IT specialists provide
            <b>remote support</b> or on-site service, so you can stay focused on what really
            matters: your clients.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/itsupport.jpg" alt="IT Support" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Maintenance Section -->
  <section id="supportmaintenance" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/backupmonitoring.jpg" alt="Monitoring" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Prevention is better than cure</h2>
          </div>
          <p>
            A well-functioning IT system requires regular <b>maintenance and updates</b>. By
            continuously monitoring and optimizing your infrastructure, we prevent outages and
            security issues. This keeps your network stable, secure, and up to date — without you
            having to worry about the technical side.
          </p>
        </div>
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
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
