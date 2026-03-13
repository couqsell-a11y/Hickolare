<?php
$pageTitle       = "Hicko IT - Professionele IT-oplossingen voor Bedrijven & Particulieren";
$metaDescription = "Hicko IT levert betrouwbare IT-oplossingen op maat: netwerkbeheer, cybersecurity, hardware, Microsoft 365 en cloudservices voor KMO's en particulieren in Dendermonde.";
$metaKeywords    = "IT-oplossingen Dendermonde, IT-bedrijf België, netwerkbeheer, cybersecurity, Microsoft 365, IT-support, KMO IT";
$ogImage         = "/pics/Logo.png";
$lang            = "nl";
$translationUrl  = "/en/";
$extraCss        = "/css/contact.css";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<!-- Hero Carousel -->
<section id="heroSection" class="hero-section d-flex align-items-center text-white">
  <div
    id="heroCarousel"
    class="container text-center hero-content-wrapper carousel slide carousel-fade"
    data-bs-ride="carousel"
    data-bs-interval="30000">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          <span class="text-primary">Professionele IT-oplossingen</span> voor iedereen
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          Betrouwbaar advies, hardware- en softwareoplossingen, netwerkinstallaties en onderhouds- of
          ondersteuningsabonnementen.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="/nl/it-advies/#GetStarted" class="btn btn-primary btn-lg me-2">Aan de slag →</a>
          <a href="#Services" class="btn btn-outline-light btn-lg">Onze Diensten</a>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          Uw <span class="text-primary">betrouwbare IT-partner</span> voor bedrijfscontinuïteit
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          Van advies tot volledige IT-ontzorging — wij leveren duurzame oplossingen voor zowel KMO's als
          zelfstandigen.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="#Services" class="btn btn-primary btn-lg me-2">Bekijk diensten</a>
          <a href="/nl/contact/" class="btn btn-outline-light btn-lg">Contacteer ons</a>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          <span class="text-primary">IT-oplossingen</span> op maat van uw bedrijf
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          Wij zorgen dat uw systemen veilig, snel en betrouwbaar blijven — vandaag én morgen.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="/nl/prijzen/" class="btn btn-primary btn-lg me-2">Bekijk prijzen</a>
          <a href="#Services" class="btn btn-outline-light btn-lg">Ontdek meer</a>
        </div>
      </div>
    </div>
    <!-- Controls -->
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

<!-- Services Section -->
<section id="Services" class="services-section" data-aos="fade-up">
  <h2 data-aos="fade-up" data-aos-delay="50">Onze Diensten</h2>
  <p data-aos="fade-up" data-aos-delay="100">Volledige IT-oplossingen, op maat van al uw technologiebehoeften</p>
  <div class="services-grid">
    <a href="/nl/hardware/" class="service-card" data-aos="zoom-in" data-aos-delay="350">
      <div class="icon"><i class="bx bx-laptop"></i></div>
      <h3 class="title">Verkoop van hardware</h3>
      <p class="description">Advies op maat bij de aankoop, installatie en configuratie van jouw nieuwe laptop, server of toebehoren.</p>
    </a>
    <a href="/nl/netwerken/" class="service-card" data-aos="zoom-in" data-aos-delay="400">
      <div class="icon"><i class="bx bx-network-chart"></i></div>
      <h3 class="title">Netwerken</h3>
      <p class="description">Stabiel, snel en toekomstgericht bedrijfsnetwerk. Altijd bereikbaar voor jouw klanten.</p>
    </a>
    <a href="/nl/websites/" class="service-card" data-aos="zoom-in" data-aos-delay="450">
      <div class="icon"><i class="bx bx-globe"></i></div>
      <h3 class="title">Domeinen en hosting</h3>
      <p class="description">We verzorgen de domeinnaam, webruimte en koppeling met jouw mailbox.</p>
    </a>
    <a href="/nl/microsoft365/" class="service-card" data-aos="zoom-in" data-aos-delay="500">
      <div class="icon"><i class="bx bx-cloud"></i></div>
      <h3 class="title">Microsoft 365</h3>
      <p class="description">Omschakeling naar Microsoft 365 voor samenwerking met medewerkers, leveranciers en klanten.</p>
    </a>
    <a href="/nl/back-ups/" class="service-card" data-aos="zoom-in" data-aos-delay="550">
      <div class="icon"><i class="bx bx-folder-open"></i></div>
      <h3 class="title">Backup van gegevens</h3>
      <p class="description">Correct ingeregelde backup van jouw kritische bedrijfsdata. Zo krijgen cybercriminelen geen kans!</p>
    </a>
    <a href="/nl/cyberbeveiliging/" class="service-card" data-aos="zoom-in" data-aos-delay="600">
      <div class="icon"><i class="bx bx-shield-quarter"></i></div>
      <h3 class="title">Cyberbeveiliging</h3>
      <p class="description">Complete beveiliging tegen online cyberaanvallen zodat u zorgeloos kunt ondernemen.</p>
    </a>
    <a href="/nl/it-support/" class="service-card" data-aos="zoom-in" data-aos-delay="650">
      <div class="icon"><i class="bx bx-headphone"></i></div>
      <h3 class="title">IT Ondersteuning</h3>
      <p class="description">Computerproblemen? We staan voor jou paraat en nemen je computer over vanop afstand.</p>
    </a>
    <a href="/nl/it-advies/" class="service-card" data-aos="zoom-in" data-aos-delay="700">
      <div class="icon"><i class="bx bx-help-circle"></i></div>
      <h3 class="title">IT Advies</h3>
      <p class="description">Wij geven IT advies op maat, rekening houdend met jouw noden.</p>
    </a>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
  <div class="container">
    <div class="why-left">
      <div data-aos="fade-right" data-aos-duration="800">
        <h2>Waarom voor ons kiezen?</h2>
        <p>
          Wij zetten ons in om betrouwbare, professionele IT-diensten te leveren die uw bedrijf én persoonlijke
          projecten ondersteunen. Ons team combineert expertise, inzet en persoonlijke service bij elk project.
        </p>
        <ul class="features">
          <li data-aos="fade-up" data-aos-delay="50">✅ Ervaren technici met jarenlange expertise</li>
          <li data-aos="fade-up" data-aos-delay="75">✅ Flexibele ondersteuningsplannen afgestemd op uw behoeften</li>
          <li data-aos="fade-up" data-aos-delay="100">✅ Snelle responstijden en betrouwbare service</li>
          <li data-aos="fade-up" data-aos-delay="125">✅ Concurrerende prijzen en transparante offertes</li>
          <li data-aos="fade-up" data-aos-delay="150">✅ Doorlopende ondersteuning en onderhoud</li>
          <li data-aos="fade-up" data-aos-delay="175">✅ Lokale service met persoonlijke aandacht</li>
        </ul>
      </div>
    </div>
    <div class="why-right">
      <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
        <h3>Klaar om uw IT-infrastructuur te verbeteren?</h3>
        <p>Van eenvoudige thuisnetwerkuitbreidingen tot uitgebreide bedrijfsoplossingen – wij helpen u op weg.</p>
        <ul class="highlights">
          <li data-aos="fade-up" data-aos-delay="350">• Mogelijkheid tot service op dezelfde dag</li>
          <li data-aos="fade-up" data-aos-delay="400">• Gratis eerste consultatie</li>
          <li data-aos="fade-up" data-aos-delay="450">• Tevredenheid gegarandeerd</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
