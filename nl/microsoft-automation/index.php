<?php
$pageTitle       = "Microsoft Automatisatie: Intune, SCCM & AutoPilot - Hicko IT Dendermonde";
$metaDescription = "Hicko IT beheert en beveiligt al jouw apparaten met Microsoft Intune, SCCM en AutoPilot. Automatische updates, snelle inrichting en centraal beheer voor KMO's in Dendermonde.";
$metaKeywords    = "Microsoft Intune Dendermonde, SCCM, AutoPilot, Autopatch, apparaatbeheer KMO België, Microsoft automatisatie, device management";
$ogImage         = "/pics/automation.jpg";
$lang            = "nl";
$translationUrl  = "/en/microsoft-automation/";
$extraCss        = "/css/contact.css";
$formSubject     = "Microsoft Automations";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Slim apparaatbeheer voor jouw KMO</p>
          <h1 class="display-6 fw-bold">Microsoft Intune, SCCM &amp; AutoPilot – volledig onder controle</h1>
          <p class="lead">
            Bij Hicko IT zorgen we ervoor dat al jouw apparaten efficiënt beheerd en beveiligd worden. Van het
            automatisch instellen van nieuwe laptops via OOBE tot voortdurende updates met Autopatch – wij nemen het
            volledige beheer uit handen.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#Voordelen" class="cta-button">Ontdek de voordelen</a>
            <a href="#contact" class="cta-button">Vraag direct advies</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/Microsoft_Intune_Logo.png" alt="Microsoft Intune" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Wat doen wij Section -->
  <section id="why" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Wat doen wij voor jou?</h2>
      </div>
      <p>
        Hicko IT helpt je om het beheer van werkstations, laptops en mobiele apparaten volledig te stroomlijnen. Met
        <b>Microsoft Intune</b> en <b>SCCM</b> centraliseer je het beheer van al je apparaten, terwijl
        <b>OOBE</b> zorgt voor een snelle, foutloze inrichting van nieuwe toestellen. Dankzij
        <b>Autopatch</b> worden al je systemen automatisch bijgewerkt, zodat je altijd veilig en productief blijft werken.
      </p>
    </div>
  </section>

  <!-- Voordelen Section -->
  <section id="Voordelen" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Waarom kiezen voor Hicko IT?</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Volledig centraal beheer</h3>
                <p>Beheer al je apparaten vanuit één overzichtelijk platform, inclusief Windows, Mac en mobiele devices.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Automatische updates met Autopatch</h3>
                <p>Zekerheid dat alle systemen up-to-date en beveiligd zijn, zonder dat je er omkijken naar hebt.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Snelle inrichting via AutoPilot</h3>
                <p>Nieuwe laptops en devices zijn direct klaar voor gebruik – foutloos en efficiënt.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Software en applicatiebeheer</h3>
                <p>Applicaties uitrollen en beheren over alle apparaten met minimale inspanning.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Ondersteuning door experts</h3>
                <p>Hicko IT begeleidt je van implementatie tot onderhoud, zodat jouw IT altijd optimaal werkt.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/automation.jpg" alt="Microsoft Automatisatie voordelen" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section id="video" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Introductievideo</h2>
      </div>
      <p class="text-center">Bekijk hoe Intune, SCCM en OOBE (AutoPilot) jouw bedrijf efficiënter en veiliger maken. (Engels)</p>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.youtube.com/embed/YCjx7ZwTSOA?rel=0"
          title="What is AutoPilot"
          allowfullscreen></iframe>
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
