<?php
$pageTitle       = "Prijzen & Abonnementen - Hicko IT Dendermonde";
$metaDescription = "Bekijk de transparante IT-pakketten van Hicko IT: Basis, Professional en Enterprise. Flexibele maandelijkse formules zonder verrassingen voor KMO's en particulieren.";
$metaKeywords    = "IT-prijzen Dendermonde, IT-abonnement KMO België, IT-ondersteuning formule, maandelijks IT-pakket, transparante IT-tarieven";
$ogImage         = "/pics/Logo.png";
$lang            = "nl";
$translationUrl  = "/en/pricing/";
$extraCss        = "/css/contact.css";
$formSubject     = "Abonnementen";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<!-- Hero Carousel Section -->
<section id="heroSection" class="hero-section d-flex align-items-center text-white">
  <div
    id="heroCarousel"
    class="container text-center hero-content-wrapper carousel slide carousel-fade"
    data-bs-ride="carousel"
    data-bs-interval="30000">
    <div class="carousel-item active">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading">
          Transparante <span class="text-primary">IT-prijzen</span> zonder verrassingen
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph">
          Betaal enkel voor wat je écht nodig hebt — onze pakketten groeien mee met jouw bedrijf.
        </p>
        <div class="hero-buttons">
          <a href="#Pricing" class="btn btn-primary btn-lg me-2">Bekijk onze formules →</a>
          <a href="#contact" class="btn btn-outline-light btn-lg">Vraag een offerte</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading">
          <span class="text-primary">Eerlijke tarieven</span> voor duurzame IT-oplossingen
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph">
          Van onderhoud tot cloudbeheer — onze prijsstructuur is duidelijk, transparant en op maat van jouw bedrijf.
        </p>
        <div class="hero-buttons">
          <a href="#Pricing" class="btn btn-primary btn-lg me-2">Ontdek onze pakketten</a>
          <a href="/nl/over-ons/" class="btn btn-outline-light btn-lg">Waarom Hicko?</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading">
          IT-oplossingen die <span class="text-primary">waarde</span> toevoegen, niet kosten
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph">
          Flexibele abonnementen en duidelijke servicepakketten — zonder kleine lettertjes.
        </p>
        <div class="hero-buttons">
          <a href="#Pricing" class="btn btn-primary btn-lg me-2">Bekijk prijzen</a>
          <a href="/nl/contact/" class="btn btn-outline-light btn-lg">Plan een gesprek</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Vorige</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Volgende</span>
    </button>
  </div>
</section>

<!-- Prijzen Section -->
<section id="Pricing" class="pricing-section py-5">
  <div class="container">
    <div class="row">
      <!-- Basis -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 border-primary">
          <div class="card-header bg-primary text-white text-center">
            <h4 class="my-0">Basis Ondersteuning</h4>
          </div>
          <div class="card-body text-center">
            <h1 class="card-title pricing-card-title">€49<small class="text-muted">/maand</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Remote IT-ondersteuning</li>
              <li>Software-updates</li>
              <li>Basis beveiligingsmonitoring</li>
              <li>Emailondersteuning</li>
              <li>Telefoonondersteuning (kantooruren)</li>
            </ul>
            <a href="#contact" class="btn btn-primary btn-lg">Aan de slag</a>
          </div>
        </div>
      </div>
      <!-- Professional -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 border-success">
          <div class="card-header bg-success text-white text-center">
            <h4 class="my-0">Professional</h4>
          </div>
          <div class="card-body text-center">
            <h1 class="card-title pricing-card-title">€99<small class="text-muted">/maand</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>On-site ondersteuning</li>
              <li>Netwerkopzet &amp; onderhoud</li>
              <li>Geavanceerde beveiliging</li>
              <li>Hardware reparaties</li>
              <li>24/7 noodondersteuning</li>
              <li>Prioritaire reactie</li>
            </ul>
            <a href="#contact" class="btn btn-success btn-lg">Meest populair</a>
          </div>
        </div>
      </div>
      <!-- Enterprise -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 border-warning">
          <div class="card-header bg-warning text-dark text-center">
            <h4 class="my-0">Enterprise</h4>
          </div>
          <div class="card-body text-center">
            <h1 class="card-title pricing-card-title">€199<small class="text-muted">/maand</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Toegewijde IT-manager</li>
              <li>Volledig infrastructuurbeheer</li>
              <li>Cloudmigratie &amp; back-up</li>
              <li>Aangepaste softwareontwikkeling</li>
              <li>Compliance &amp; beveiligingsaudits</li>
              <li>24/7 oproepbare ondersteuning</li>
            </ul>
            <a href="#contact" class="btn btn-warning btn-lg">Contacteer sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Waarom voor ons kiezen -->
<section class="why-choose-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <h2>Waarom voor ons kiezen?</h2>
        <p>
          Wij zijn toegewijd aan het leveren van betrouwbare, professionele IT-diensten die jouw bedrijf helpen te
          groeien. Ons team combineert expertise, toewijding en een persoonlijke benadering om het succes van elk
          project te waarborgen.
        </p>
        <ul class="features">
          <li>✅ <strong>Ervaren technici</strong> met jarenlange expertise</li>
          <li>✅ <strong>Aangepaste ondersteuningsplannen</strong> die aansluiten bij jouw specifieke behoeften</li>
          <li>✅ <strong>Snelle reactietijden</strong> en betrouwbare service</li>
          <li>✅ <strong>Transparante prijzen</strong> met concurrerende tarieven</li>
          <li>✅ <strong>Doorlopende ondersteuning</strong> en onderhoudsopties</li>
          <li>✅ <strong>Lokale aanwezigheid</strong> voor persoonlijke zorg</li>
        </ul>
      </div>
      <div class="col-lg-6 mb-4">
        <h3>Klaar om jouw IT-infrastructuur te upgraden?</h3>
        <p>
          Of het nu gaat om het uitbreiden van je thuisnetwerk of het implementeren van uitgebreide IT-oplossingen
          voor je bedrijf, wij hebben alles in huis om je te ondersteunen.
        </p>
        <ul class="highlights">
          <li>• <strong>Zelfde dag service</strong> beschikbaar</li>
          <li>• <strong>Gratis eerste consult</strong></li>
          <li>• <strong>Tevredenheid gegarandeerd</strong></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/contact-form.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
