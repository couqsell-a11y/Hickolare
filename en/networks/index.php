<?php
$pageTitle       = "Professional Network Solutions - Hicko IT Dendermonde";
$metaDescription = "Hicko IT designs and manages wired & wireless networks for businesses and homes in Dendermonde. Secure guest networks, full WiFi coverage, firewall setup and proactive monitoring.";
$metaKeywords    = "network solutions Dendermonde, WiFi installation Belgium, business network, guest network, home WiFi, network security, IT infrastructure";
$ogImage         = "/pics/firewall.jpg";
$lang            = "en";
$translationUrl  = "/nl/netwerken/";
$extraCss        = "/css/contact.css";
$formSubject     = "Network Expansion";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<main id="main">
  <!-- Hero Section -->
  <section class="hero-neutral">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <p class="text-warning fw-bold small">Always connected, at home and at the office</p>
          <h1 class="display-6 fw-bold">Professional Network Solutions <br />That Always Perform</h1>
          <p class="lead">
            In today's digital economy, speed and reliability are critical. Hicko IT delivers stable networks and
            reliable hardware for businesses and private users alike.
          </p>
          <div class="cta-wrapper">
            <a href="#network-b2b" class="cta-button">For Businesses</a>
            <a href="#network-b2c" class="cta-button">For Home</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- B2B Section -->
  <section id="network-b2b" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Wired &amp; Wireless Connectivity</h2>
          </div>
          <p>
            Hicko IT designs network solutions tailored to your organization. Our experts ensure seamless
            integration of <b>wired and wireless infrastructure</b> in your business environment. With our
            configuration and maintenance services, your network remains
            <b>stable, secure, and high-performing</b> day in and day out. We implement advanced
            <a href="/en/cybersecurity/#securityfw">firewalls</a>, VLAN segmentation, and
            <a href="/en/cybersecurity/#monitoring">proactive monitoring</a> for maximum continuity.
          </p>
          <div class="cta-wrapper">
            <a href="#contact" class="cta-button">Request a Network Audit</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/firewall.jpg" alt="Network Solution" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Guest Networks Section -->
  <section id="guest-networks" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="/pics/wifi.jpg" alt="Guest Network" class="img-fluid" />
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Guest Networks with Professional Security</h2>
          </div>
          <p>
            Provide visitors and clients with a <b>secure guest network</b> without risking internal systems. Hicko
            IT implements segregated networks so external devices have no access to your company data. A
            professional guest network improves customer experience while keeping your IT environment
            <b>fully protected</b>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- B2C Section -->
  <section id="network-b2c" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          <div class="section-title">
            <h2>Home Networks &amp; Complete WiFi Coverage</h2>
          </div>
          <p>
            A stable network doesn't stop at your living room.
            <b>Hicko IT</b> ensures your internet is <b>strong and reliable</b> — from the basement to the attic,
            and even in your garden office or outbuilding. We install smart access points, optimize your router, and
            provide <b>professional cabling</b> where needed. Enjoy <b>fast and secure WiFi</b> everywhere at home
            without dead spots or interruptions.
          </p>
          <div class="cta-wrapper mt-4">
            <a href="#contact" class="cta-button">Request a Home WiFi Analysis</a>
          </div>
        </div>
        <div class="col-lg-6 video-box">
          <img src="/pics/backyard.jpg" alt="Home Network" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/contact-form.php'; ?>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
