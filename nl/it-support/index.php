<?php
$pageTitle       = "IT Ondersteuning voor Bedrijven & Particulieren - Hicko IT Dendermonde";
$metaDescription = "Hicko IT biedt snelle IT-ondersteuning op afstand en ter plaatse voor bedrijven en particulieren. Storingen, foutmeldingen, netwerkproblemen — wij lossen het snel op.";
$metaKeywords    = "IT-ondersteuning Dendermonde, IT-support bedrijf België, hulp op afstand, netwerkprobleem oplossen, IT-storing KMO";
$ogImage         = "/pics/itsupport.jpg";
$lang            = "nl";
$translationUrl  = "/en/it-support/";
$extraCss        = "/css/contact.css";
$formSubject     = "IT-Support";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Snelle IT-ondersteuning voor bedrijven en particulieren</p>
          <h1 class="display-6 fw-bold">Betrouwbare IT-ondersteuning voor jouw bedrijf en privébehoeften</h1>
          <p class="lead">
            IT-problemen komen vaak op het slechtst mogelijke moment... Bij <strong>Hicko IT</strong> begrijpen we
            dat en staan we klaar om je direct te helpen. Of het nu gaat om storingen, foutmeldingen of
            verbindingsproblemen, met onze <b>hulp op afstand</b> lossen we deze snel op, zodat jij zonder
            tijdverlies weer verder kunt werken.
          </p>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Vraag nu IT support aan!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Snelle hulp Section -->
  <section id="snellehulp" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Snelle hulp bij IT-problemen</h2>
          </div>
          <p>
            Als ondernemer wil je altijd efficiënt kunnen werken. Een <b>IT-storing of netwerkprobleem</b> komt dan
            ook altijd ongelegen. Of het nu gaat om een trage internetverbinding, een niet-werkende printer of een
            vastgelopen mailbox — wij zorgen ervoor dat je snel weer aan de slag kunt. Onze IT-specialisten bieden
            <b>ondersteuning op afstand</b> of komen ter plaatse, zodat jij je kunt focussen op wat echt telt: jouw
            klanten.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/itsupport.jpg" alt="IT Support" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Onderhoud Section -->
  <section id="supportonderhoud" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/backupmonitoring.jpg" alt="Preventief onderhoud" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Voorkomen is beter dan genezen</h2>
          </div>
          <p>
            Een goed functionerend IT-systeem heeft regelmatig <b>onderhoud en updates</b> nodig. Door jouw
            infrastructuur continu te monitoren en preventief te optimaliseren, voorkomen we storingen en
            beveiligingsproblemen. Zo blijft jouw netwerk stabiel, veilig en up-to-date — zonder dat jij je zorgen
            hoeft te maken over de technische kant.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/contact-form.php'; ?>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
