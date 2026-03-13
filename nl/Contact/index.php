<?php
$pageTitle       = "Contact - Hicko IT Dendermonde";
$metaDescription = "Neem contact op met Hicko IT in Dendermonde. Contacteer ons voor IT-support, advies, herstellingen of een vrijblijvende offerte. Wij helpen u graag verder.";
$metaKeywords    = "contact Hicko IT, IT-support Dendermonde, IT hulp België, offerte aanvragen, IT-vraag";
$ogImage         = "/pics/contactus.jpg";
$lang            = "nl";
$translationUrl  = "/en/contact/";
$extraCss        = "/css/contact.css";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-neutral">
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <p class="text-warning fw-bold small">CONTACTGEGEVENS</p>
        <h1 class="display-5 fw-bold">Neem contact op</h1>
        <p class="lead">
          Bent u op zoek naar een betrouwbare IT-partner om uw KMO te laten groeien? Wilt u uw volgende project met
          ons bespreken, of heeft u een nieuwe computer nodig? Neem contact op met Hicko IT voor een eerste
          vrijblijvend consult!
        </p>
        <a href="#contact" class="text-primary fw-semibold">Ga naar het formulier →</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/pics/contactus.jpg" alt="Contact us" class="img-fluid rounded-3 shadow-sm" />
      </div>
    </div>
  </div>
</section>

<!-- Contact Form (volledige dropdown — geen $formSubject ingesteld) -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/contact-form.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
