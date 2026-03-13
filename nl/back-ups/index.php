<?php
$pageTitle       = "Veilige Back-upoplossingen voor Bedrijven - Hicko IT Dendermonde";
$metaDescription = "Bescherm je bedrijfsdata met betrouwbare back-upoplossingen van Hicko IT. Lokaal of in de cloud, met proactieve monitoring voor maximale zekerheid in Dendermonde.";
$metaKeywords    = "backup oplossingen Dendermonde, data bescherming België, cloudbackup, lokale backup, bedrijfscontinuïteit, data herstel";
$ogImage         = "/pics/backupintro.jpg";
$lang            = "nl";
$translationUrl  = "/en/back-ups/";
$extraCss        = "/css/contact.css";
$formSubject     = "Back-up Oplossing";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Bescherm je bedrijfsgegevens professioneel</p>
          <h1 class="display-6 fw-bold">Betrouwbare Backup-oplossingen</h1>
          <p class="lead">
            Een betrouwbare backup is cruciaal voor ieder bedrijf.<br />
            Bescherm je data tegen ransomware, menselijke fouten of hardwareproblemen.<br />
            Wij leveren oplossingen op maat, lokaal of in de cloud, voor optimale zekerheid.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#lokaalofcloud" class="cta-button">Ontdek onze backup-opties</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="/pics/backupintro.jpg" alt="Back-up intro" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Waarom Section -->
  <section id="waarom" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Waarom een backup essentieel is</h2>
      </div>
      <p>
        In een digitale bedrijfsomgeving is je data één van je meest waardevolle assets. Onvoorziene gebeurtenissen
        zoals cyberaanvallen, hardwarestoringen of menselijke fouten kunnen je bedrijfsvoering ernstig verstoren.
        <strong>Een goed beheerde backup biedt zekerheid</strong> en vormt een belangrijk onderdeel van je
        bedrijfscontinuïteit.
      </p>
    </div>
  </section>

  <!-- Lokaal of Cloud Section -->
  <section id="lokaalofcloud" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Lokaal of cloud?</h2>
          </div>
          <p>
            Samen evalueren we de beste strategie voor jouw bedrijf.<br /><br />
            Een <strong>lokale backup</strong> biedt snelle toegang tot gegevens op je netwerkschijf of externe
            opslag.<br /><br />
            Voor maximale veiligheid bieden we ook <strong>cloudbackups</strong> die periodiek worden opgeslagen,
            volledig afgeschermd van je interne netwerk. Zo is herstel altijd mogelijk, waar en wanneer nodig.
          </p>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/backup.jpg" alt="Backup" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Monitoring Section -->
  <section id="monitoring" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/backupmonitoring.jpg" alt="Backup monitoring" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Proactieve monitoring</h2>
          </div>
          <p>
            Backups zijn alleen waardevol als ze correct functioneren. Met
            <strong>actieve monitoring</strong> houden we elke backup continu in de gaten. Eventuele problemen
            worden direct gedetecteerd en opgelost, zodat je bedrijfsdata altijd beschermd is.
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
