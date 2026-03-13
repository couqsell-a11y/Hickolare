<?php
$pageTitle       = "Data Backup Solutions - Hicko IT Dendermonde";
$metaDescription = "Protect your critical business data with reliable backup solutions from Hicko IT. Keep cybercriminals out and ensure business continuity in Dendermonde.";
$metaKeywords    = "data backup Dendermonde, business backup Belgium, cloud backup, data protection, backup solutions";
$ogImage         = "/pics/backupintro.jpg";
$lang            = "en";
$translationUrl  = "/nl/back-ups/";
$extraCss        = "/css/contact.css";
$formSubject     = "Backup Solutions";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<!-- Hero Section -->
<main id="main">
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Professional Protection for Your Business Data</p>
          <h1 class="display-6 fw-bold">Secure. Reliable. Always Recoverable.</h1>
          <p class="lead">
            Your data is the lifeblood of your organization. Whether you manage a small business or a large
            enterprise, ensuring data resilience is critical. <br />
            Hicko-IT delivers tailored, compliant, and continuously monitored backup solutions — on-premises or in
            the cloud — to keep your operations running without interruption.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#lokaalofcloud" class="cta-button">Discover Our Backup Solutions</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/backupintro.jpg" alt="Backup Introduction" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Why Backups Section -->
  <section id="waarom" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Why Reliable Backups Matter</h2>
      </div>
      <p>
        In an increasingly digital world, business continuity depends on secure and accessible data. From cyber
        incidents to accidental deletions, downtime can quickly become costly.
        <strong>Strategic data protection and intelligent backup management</strong> safeguard your organization's
        most valuable asset — your information — and ensure fast recovery when it matters most.
      </p>
    </div>
  </section>

  <!-- Local or Cloud -->
  <section id="lokaalofcloud" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Local or Cloud-Based Backups?</h2>
          </div>
          <p>
            Every business is unique. That's why Hicko-IT works with you to build a backup strategy that aligns with
            your goals, compliance needs, and infrastructure. <br /><br />
            A <strong>local backup</strong> ensures fast access and immediate recovery on-site. <br /><br />
            For maximum resilience, our <strong>cloud backup</strong> options offer secure, encrypted offsite
            storage — isolated from your internal network — guaranteeing accessibility anywhere, anytime.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/backup.jpg" alt="Backup" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Monitoring -->
  <section id="monitoring" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/backupmonitoring.jpg" alt="Backup Monitoring" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Proactive Monitoring & Assurance</h2>
          </div>
          <p>
            Backups are only valuable when they're reliable. Through
            <strong>real-time monitoring and proactive maintenance</strong>, our systems continuously verify backup
            integrity and alert our team at the first sign of an issue. We ensure that every backup is validated,
            verified, and ready for recovery — so your business stays operational no matter what happens.
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
