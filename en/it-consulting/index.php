<?php
$pageTitle       = "IT Consulting for Businesses & Individuals - Hicko IT Dendermonde";
$metaDescription = "Hicko IT provides expert, tailor-made IT consulting for businesses and individuals in Dendermonde. From infrastructure analysis to cloud advice and cybersecurity compliance.";
$metaKeywords    = "IT consulting Dendermonde, IT advice Belgium, IT strategy SME, cloud advice, cybersecurity compliance, IT consultancy";
$ogImage         = "/pics/b2badvice.jpg";
$lang            = "en";
$translationUrl  = "/nl/it-advies/";
$extraCss        = "/css/contact.css";
$formSubject     = "IT Consulting";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Practical IT advice for businesses and SMEs</p>
          <h1 class="display-6 fw-bold">IT Consulting for Businesses and Individuals</h1>
          <p class="lead">We provide clear, tailor-made IT solutions aligned with your needs and budget.</p>
          <div class="cta-wrapper">
            <a href="#b2b" class="cta-button">For Businesses</a>
            <a href="#b2c" class="cta-button">For Individuals</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- B2B Section -->
  <section id="b2b" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/b2badvice.jpg" alt="IT Consulting for Businesses" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Consulting for Businesses</h2>
          </div>
          <p>As a company, you want your IT to run smoothly. We support SMEs and larger organizations with:</p>
          <ul>
            <li>• Analysis of existing IT infrastructure</li>
            <li>• Advice on hardware, software, and cloud solutions</li>
            <li>• Implementation of secure and scalable systems</li>
            <li>• Ongoing support and maintenance after setup</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Request Advice</a>
          </div>
          <div class="cta-wrapper">
            <a href="/en/cybersecurity/" class="cta-button">Cyber Security Compliance</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- B2C Section -->
  <section id="b2c" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Consulting for Individuals</h2>
          </div>
          <p>Private clients can also count on us for IT help and advice:</p>
          <ul>
            <li>• Guidance for purchasing or upgrading computers and laptops</li>
            <li>• Safe use of the internet, cloud, and backups</li>
            <li>• Installation and configuration of software and devices</li>
            <li>• Problem solving and preventive maintenance</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Contact Us</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/idee.jpg" alt="IT advice for individuals" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Our Approach Section -->
  <section id="adviesww" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Our Approach</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/advice.jpg" alt="Our IT consulting process" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Analysis</h3>
                <p>We thoroughly examine your question or issue and assess its impact on your organization.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Advice</h3>
                <p>We provide practical recommendations and a transparent quote — fully tailored to your business.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Implementation</h3>
                <p>Once approved, our experts execute the required improvements to ensure everything runs smoothly.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Support</h3>
                <p>We continue providing support until everything works perfectly — and you're fully satisfied.</p>
              </div>
            </li>
          </ul>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
