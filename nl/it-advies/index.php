<?php
$pageTitle       = "IT Advies voor Bedrijven & Particulieren - Hicko IT Dendermonde";
$metaDescription = "Hicko IT biedt deskundig IT-advies op maat voor KMO's en particulieren. Analyse, strategie, implementatie en ondersteuning — begrijpbaar en afgestemd op jouw budget.";
$metaKeywords    = "IT-advies Dendermonde, IT-strategie KMO België, IT-consultancy, cloudadvies, hardware advies, IT-ondersteuning";
$ogImage         = "/pics/b2badvice.jpg";
$lang            = "nl";
$translationUrl  = "/en/it-consulting/";
$extraCss        = "/css/contact.css";
$formSubject     = "IT-Advies";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Praktisch advies voor bedrijven en KMO's</p>
          <h1 class="display-6 fw-bold">IT Advies voor bedrijven en particulieren</h1>
          <p class="lead">Wij bieden begrijpbare IT-oplossingen op maat, afgestemd op jouw noden en budget.</p>
          <div class="cta-wrapper">
            <a href="#b2b" class="cta-button">Voor bedrijven</a>
            <a href="#b2c" class="cta-button">Voor particulieren</a>
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
          <img src="/pics/b2badvice.jpg" alt="IT Advies voor bedrijven" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Advies voor bedrijven</h2>
          </div>
          <p>Als bedrijf wil je dat je IT vlekkeloos werkt. Wij helpen KMO's en grotere bedrijven met:</p>
          <ul>
            <li>• Analyse van bestaande IT-infrastructuur</li>
            <li>• Advies over hardware, software en cloudoplossingen</li>
            <li>• Implementatie van veilige en schaalbare systemen</li>
            <li>• Ondersteuning en onderhoud na installatie</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Vraag advies</a>
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
            <h2>Advies voor particulieren</h2>
          </div>
          <p>Ook particulieren kunnen bij ons terecht voor IT-hulp en advies:</p>
          <ul>
            <li>• Advies bij aankoop of upgrade van computers en laptops</li>
            <li>• Veilig gebruik van internet, cloud en back-ups</li>
            <li>• Installatie en configuratie van software en apparaten</li>
            <li>• Herstel van problemen en preventief onderhoud</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Neem contact op</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/idee.jpg" alt="IT Advies voor particulieren" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Onze Aanpak Section -->
  <section id="adviesww" class="checklist" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Onze aanpak</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/advice.jpg" alt="Onze aanpak" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <ul>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Analyse</h3>
                <p>We onderzoeken jouw vraag of probleem grondig en bekijken de impact op je organisatie.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Advies</h3>
                <p>We geven concreet, praktisch advies en een duidelijke offerte, volledig op maat van jouw bedrijf.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Uitvoering</h3>
                <p>Na goedkeuring voeren onze experts de benodigde aanpassingen uit, zodat alles vlot verloopt.</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-check2-circle me-3 text-success" style="font-size: 1.5rem"></i>
              <div>
                <h3 class="mb-1">Ondersteuning</h3>
                <p>We blijven ondersteunen tot alles perfect werkt en jij tevreden bent.</p>
              </div>
            </li>
          </ul>
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
