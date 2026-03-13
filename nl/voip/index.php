<?php
$pageTitle       = "VOIP Telefonie voor Bedrijven - Hicko IT Dendermonde";
$metaDescription = "Hicko IT installeert en beheert VOIP-telefonie voor bedrijven. Altijd bereikbaar via internet, lagere kosten en eenvoudig beheer voor KMO's in Dendermonde.";
$metaKeywords    = "VOIP telefonie Dendermonde, VoIP bedrijf België, digitale telefonie KMO, cloudtelefonie, zakelijk bellen internet";
$ogImage         = "/pics/voipintro.jpg";
$lang            = "nl";
$translationUrl  = "/en/voip/";
$extraCss        = "/css/contact.css";
$formSubject     = "Telefonie";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">VOIP Telefonie voor bedrijven</p>
          <h1 class="display-6 fw-bold">Altijd Bereikbaar, Overal</h1>
          <p class="lead">
            Met digitale VOIP telefonie is jouw bedrijf altijd bereikbaar. Wij begeleiden je bij installatie,
            configuratie en onderhoud zodat jij zorgeloos kunt bellen, waar je ook bent.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#voordelen" class="cta-button">Bekijk de voordelen</a>
            <a href="#contact" class="cta-button">Vraag direct advies</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/voipintro.jpg" alt="VOIP Telefonie" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Wat is VOIP -->
  <section id="about" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Wat is VOIP?</h2>
      </div>
      <p>
        <strong>Voice over IP (VOIP)</strong> vervangt traditionele telefonie door bellen via internet. Dit betekent
        hoge gesprekskwaliteit, flexibiliteit en lagere kosten. Je kunt bellen en gebeld worden via vaste lijnen,
        computers, smartphones of softphones, overal waar je internet hebt.
      </p>
    </div>
  </section>

  <!-- Slim & Flexibel -->
  <section id="voip" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Slim en Flexibel Communiceren</h2>
          </div>
          <p>
            Al je telefoondiensten worden via de cloud gecentraliseerd. Nummers zijn niet gebonden aan een locatie,
            waardoor medewerkers altijd bereikbaar zijn op hun interne nummer, of ze nu op kantoor, thuis of
            onderweg zijn. Dit bespaart kosten en versnelt de interne communicatie.
          </p>
          <blockquote class="blockquote text-center">
            <p class="mb-0">"Onze gesprekskwaliteit is aanzienlijk beter dan bij traditionele telefonie."</p>
          </blockquote>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Vraag direct advies</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/voipcomms.jpg" alt="VOIP communicatie" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Voordelen Section -->
  <section id="voordelen" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Voordelen van VOIP voor jouw bedrijf</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Tot 80% kostenbesparing</h3>
                <p>Geen dure infrastructuur of onderhoudskosten.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Geen traditioneel telefooncontract</h3>
                <p>Alles draait via de cloud met flexibele tarieven.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Eenvoudig beheer</h3>
                <p>Configureer alle functies via één intuïtief platform.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Veilig en betrouwbaar</h3>
                <p>Een up-to-date platform met gegarandeerde beschikbaarheid.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Werkt op elk apparaat</h3>
                <p>Smartphone, tablet, computer of vaste lijn — altijd verbonden.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/voipsols.jpg" alt="VOIP voordelen" class="img-fluid" />
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
