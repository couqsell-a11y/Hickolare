<?php
// SEO
$pageTitle       = "About Hicko IT - Your IT Partner";
$metaDescription = "Learn more about Hicko IT, your trusted IT partner. Expert technicians delivering reliable, professional IT services for everyone.";
$metaKeywords    = "about Hicko IT, IT company Dendermonde, IT partner Belgium, IT team, professional IT services";
$ogImage         = "/pics/og-image.jpg"; // optional, defaults to og-image.jpg if not set
// Page settings
$lang            = "en";
$translationUrl = '/nl/over-ons/';
$extraCss        = "/css/contact.css"; // optional, only if page needs it

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

    <!-- end of navbar | start hero section -->
    <section class="hero-neutral">
      <div class="container hero-content">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <p class="text-warning fw-bold small">Welcome to</p>
            <h1 class="display-5 fw-bold">Hicko IT</h1>
            <p class="lead">
              Since 2025, we’ve been helping individuals and SMEs with smart, reliable, and user-friendly IT solutions.
              With our personal approach and strong local presence, we aim to be more than just your IT partner — we’re
              a trusted ally who thinks ahead and grows with you. Together, we build a secure and future-ready digital
              environment.
            </p>
          </div>
          <div class="col-lg-6 text-center">
            <img src="/pics/Logo.png" alt="Contact us" class="img-fluid rounded-3 shadow-sm" />
          </div>
        </div>
      </div>
    </section>
    <!-- Mission & Core Values Section -->
    <section class="content-section bg-lightblue" data-aos="fade-up" date-aos-delay="600">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="/pics/premium_photo-1693671725924-302f7a2c450b.avif" class="img-fluid" alt="Our mission" />
          </div>
          <div class="col-lg-6 text-center">
            <div class="section-title">
              <h2>Mission</h2>
            </div>
            <p>
              At Hicko, we strive to make technology simple, reliable, and accessible. We aim to be your long-term IT
              partner — one that thinks along with you, takes away the hassle, and anticipates your future needs.
              Through smart, scalable solutions, we help your business grow in a stable and secure digital environment.
            </p>
            <div class="section-title">
              <h2>Core Values</h2>
            </div>
            <p>
              💡 <strong>Partnership</strong> – We’re committed to your success.<br /><br />
              🔍 <strong>Transparency</strong> – Clear, honest advice without the jargon.<br /><br />
              ⚙️ <strong>Quality</strong> – Reliable technology and trusted partners.<br /><br />
              🌱 <strong>Sustainability</strong> – Smart solutions built to last.<br /><br />
              🚀 <strong>Customer Focus</strong> – You always come first.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Back to top button -->
    <div id="floating-lang">
      <button class="lang-btn" data-url="#top" onclick="changeLanguage('#top')">↑</button>
    </div>
  <!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
