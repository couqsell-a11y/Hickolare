<?php
$pageTitle       = "Contact Hicko IT - Dendermonde, Belgium";
$metaDescription = "Get in touch with Hicko IT in Dendermonde. Contact us for IT support, advice, repairs or a free quote. We're here to help businesses and home users.";
$metaKeywords    = "contact Hicko IT, IT support contact Dendermonde, IT help Belgium, get a quote, IT inquiry";
$ogImage         = "/pics/contactus.jpg";
$lang            = "en";
$translationUrl  = "/nl/contact/";
$extraCss        = "/css/contact.css";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-neutral">
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <p class="text-warning fw-bold small">CONTACT INFORMATION</p>
        <h1 class="display-5 fw-bold">Get in Touch</h1>
        <p class="lead">
          Looking for a reliable IT partner to grow your SME? Want to discuss your next project with us, or need a
          new computer? Contact Hicko IT for a first free consultation!
        </p>
        <a href="#contact" class="text-primary fw-semibold">Go to the form →</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/pics/contactus.jpg" alt="Contact us" class="img-fluid rounded-3 shadow-sm" />
      </div>
    </div>
  </div>
</section>

<!-- Contact Form (full dropdown — no $formSubject set) -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/contact-form.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
