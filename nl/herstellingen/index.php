<?php
$pageTitle       = "IT Herstellingen voor Bedrijven & Particulieren - Hicko IT Dendermonde";
$metaDescription = "Hicko IT herstelt defecte laptops, pc's, servers en randapparatuur. Snelle diagnose, dataherstel en vervanging van onderdelen voor bedrijven en particulieren in Dendermonde.";
$metaKeywords    = "IT herstellingen Dendermonde, laptop reparatie België, server herstelling, dataherstel, hardware reparatie KMO";
$ogImage         = "/pics/maintenance.jpg";
$lang            = "nl";
$translationUrl  = "/en/repairs/";
$extraCss        = "/css/contact.css";
$formSubject     = "Herstellingen";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Specialist in IT-hardware reparaties &amp; onderhoud</p>
          <h1 class="display-6 fw-bold">Professionele hardware service voor bedrijven en particulieren</h1>
          <p class="lead">
            Wanneer hardware uitvalt, kan dat werk of dagelijkse activiteiten volledig stilleggen. Bij
            <strong>Hicko IT</strong> zorgen we voor snelle en deskundige hulp bij defecte laptops, pc's, servers,
            netwerkapparatuur en randapparatuur. Met onze
            <b>reparaties op locatie en efficiënte diagnose op afstand</b> brengen we jouw systemen weer snel in
            topconditie, zodat je zonder onderbrekingen verder kunt.
          </p>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Vraag nu IT support aan!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Herstelling Section -->
  <section id="Herstelling" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Herstelling en vervanging van hardware</h2>
        <p>
          Loopt je computer, laptop of server niet meer zoals het hoort? Wij zorgen voor een snelle
          <b>diagnose en herstelling</b> van jouw hardwareproblemen. Van defecte harde schijven tot trage
          netwerkswitches of kapotte laptops — wij herstellen of vervangen de onderdelen met kwalitatieve,
          betrouwbare componenten.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Dataherstel</h3>
                <p>Hardwarefalen of schijfproblemen</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Vervanging van defecte onderdelen</h3>
                <p>Desktop, Laptop, Server, Randapparatuur, enz.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Herstel van defecte onderdelen</h3>
                <p>Desktop, Laptop, Server, Randapparatuur, enz.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Installatie en configuratie</h3>
                <p><a href="/nl/microsoft-automation/">Geautomatiseerd</a> of manueel</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Veiliger mailverkeer</h3>
                <p>Correct ingestelde domeinen voorkomen dat e-mails in spam terechtkomen.</p>
              </div>
            </li>
          </ul>
          <p>
            Dankzij onze directe samenwerking met leveranciers kunnen we <b>snel onderdelen leveren</b> en jouw
            systemen weer operationeel maken met minimale downtime. Zo blijft je team productief, zonder weken te
            moeten wachten op technische oplossingen.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/maintenance.jpg" alt="IT Herstelling" class="img-fluid" />
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
