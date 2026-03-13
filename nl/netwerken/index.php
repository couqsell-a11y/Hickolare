<?php
$pageTitle       = "Professionele Netwerkoplossingen voor Bedrijven & Particulieren - Hicko IT Dendermonde";
$metaDescription = "Hicko IT installeert en beheert bekabelde en draadloze netwerken voor bedrijven en particulieren. Wifi-dekking, gastnetwerken, firewall en proactieve monitoring in Dendermonde.";
$metaKeywords    = "netwerkoplossingen Dendermonde, wifi installatie bedrijf België, gastnetwerk, bekabeld netwerk, thuisnetwerk, netwerkbeheer KMO";
$ogImage         = "/pics/firewall.jpg";
$lang            = "nl";
$translationUrl  = "/en/networks/";
$extraCss        = "/css/contact.css";
$formSubject     = "Netwerk Uitbreiding";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nl/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Altijd verbonden, thuis én op kantoor</p>
          <h1 class="display-6 fw-bold">Professionele netwerkoplossingen<br />die altijd presteren</h1>
          <p class="lead">
            In een digitale economie draait alles om betrouwbaarheid en snelheid.<br />
            Hicko IT levert stabiele netwerken en betrouwbare hardware — voor bedrijven én particulieren.
          </p>
          <div class="cta-wrapper">
            <a href="#netwerk-b2b" class="cta-button">Voor bedrijven</a>
            <a href="#netwerk-b2c" class="cta-button">Voor particulieren</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bekabeld & Draadloos -->
  <section id="netwerk-b2b" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Bekabeld én draadloos verbonden</h2>
          </div>
          <p>
            Hicko IT ontwikkelt netwerkoplossingen op maat van jouw organisatie. Onze experts zorgen voor een
            feilloze integratie van <b>bekabelde en draadloze infrastructuur</b> in jouw bedrijfsomgeving. Dankzij
            onze configuratie en onderhoudsdiensten blijft jouw netwerk <b>stabiel, veilig en performant</b>, dag in
            dag uit. We voorzien geavanceerde <a href="/nl/cyberbeveiliging/#securityfw">firewalls</a>,
            VLAN-segmentatie en <a href="/nl/cyberbeveiliging/#monitoring">proactieve monitoring</a> voor maximale
            continuïteit.
          </p>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Vraag een netwerk-audit aan</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/firewall.jpg" alt="Netwerkoplossing" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Gastnetwerken -->
  <section id="guestnetworks" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/wifi.jpg" alt="Wifi gastnetwerk" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Gastnetwerken met professionele beveiliging</h2>
          </div>
          <p>
            Bied bezoekers en klanten een <b>veilig gastnetwerk</b> zonder risico's voor je interne systemen. Hicko
            IT implementeert gescheiden netwerken zodat externe apparaten geen toegang hebben tot jouw bedrijfsdata.
            Een professioneel gastnetwerk verbetert de klantervaring en verhoogt de betrouwbaarheid van jouw merk —
            terwijl jouw IT-omgeving <b>volledig beschermd</b> blijft.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Thuisnetwerk -->
  <section id="netwerk-b2c" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Thuisnetwerk en<br />volledige wifi-dekking</h2>
          </div>
          <p>
            Een stabiel netwerk stopt niet bij je woonkamer.
            <b>Hicko IT</b> zorgt ervoor dat jouw internet <b>sterk en betrouwbaar</b> blijft – van de kelder tot op
            zolder, en zelfs tot in je tuinhuis of buitenkantoor. We plaatsen slimme access points, optimaliseren je
            router en voorzien <b>professionele bekabeling</b> waar nodig. Zo geniet je overal in en rond je woning
            van <b>snelle en veilige wifi</b>, zonder haperingen of dode zones.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#contact" class="cta-button">Vraag je wifi-analyse aan</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/backyard.jpg" alt="Thuisnetwerk wifi-dekking" class="img-fluid" />
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
