<?php
// SEO
$pageTitle       = "Hicko-IT - Professional IT Solutions";
$metaDescription = "Hicko IT offers professional IT solutions for businesses and home users. From hardware and networking to cybersecurity and IT support.";
$metaKeywords    = "IT solutions Dendermonde, IT support Belgium, hardware, networking, cybersecurity, Microsoft 365, IT consulting";
$ogImage         = "/pics/og-image.jpg"; // optional, defaults to og-image.jpg if not set
// Page settings
$lang            = "en";
$translationUrl = '/nl/';
$extraCss        = "/css/contact.css"; // optional, only if page needs it

include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/navbar.php';
?>

<!-- start of hero content -->
<section id="heroSection" class="hero-section d-flex align-items-center text-white">
  <div
    id="heroCarousel"
    class="container text-center hero-content-wrapper carousel slide carousel-fade"
    data-bs-ride="carousel"
    data-bs-interval="8000">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          <span class="text-primary">Professional IT-Solutions</span> for everyone
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          Reliable advice, hardware and software solutions, network installations, and maintenance or support
          subscriptions.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="#contact" class="btn btn-primary btn-lg me-2">Get started →</a>
          <a href="#Services" class="btn btn-outline-light btn-lg">Our Services</a>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          Your <span class="text-primary">trusted IT-partner</span> for business continuity
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          From consultancy to complete IT management — we provide sustainable solutions for both SMEs and
          self-employed professionals.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="#Services" class="btn btn-primary btn-lg me-2">Our Services</a>
          <a href="#contact" class="btn btn-outline-light btn-lg">Get started →</a>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="hero-slide">
        <h1 class="display-4 fw-bold hero-heading animate__animated animate__fadeInDown">
          <span class="text-primary">IT-solutions</span> tailored to your business
        </h1>
        <p class="lead mt-3 mb-4 hero-paragraph animate__animated animate__fadeInUp">
          We ensure your systems remain secure, fast, and reliable — today and tomorrow.
        </p>
        <div class="hero-buttons animate__animated animate__fadeInUp">
          <a href="/en/pricing/" class="btn btn-primary btn-lg me-2">Check Pricing</a>
          <a href="#Services" class="btn btn-outline-light btn-lg">Discover more</a>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Services Section -->
<section id="Services" class="services-section" data-aos="fade-up">
  <h2 data-aos="fade-up" data-aos-delay="50">Our Services</h2>
  <p data-aos="fade-up" data-aos-delay="100">Comprehensive IT solutions, tailored to all your technology needs</p>
  <div class="services-grid">
    <a href="/en/hardware/" class="service-card" data-aos="zoom-in" data-aos-delay="350">
      <div class="icon"><i class="bx bx-laptop"></i></div>
      <h3 class="title">Hardware</h3>
      <p class="description">Tailored advice for the purchase, installation, and configuration of your new laptop, server, or accessories.</p>
    </a>
    <a href="/en/networks/" class="service-card" data-aos="zoom-in" data-aos-delay="400">
      <div class="icon"><i class="bx bx-network-chart"></i></div>
      <h3 class="title">Networking</h3>
      <p class="description">Stable, fast, and future-proof business networks. Always accessible for your customers.</p>
    </a>
    <a href="/en/websites/" class="service-card" data-aos="zoom-in" data-aos-delay="450">
      <div class="icon"><i class="bx bx-globe"></i></div>
      <h3 class="title">Domains and Hosting</h3>
      <p class="description">We handle your domain name, web hosting, and email integration.</p>
    </a>
    <a href="/en/microsoft365/" class="service-card" data-aos="zoom-in" data-aos-delay="500">
      <div class="icon"><i class="bx bx-cloud"></i></div>
      <h3 class="title">Microsoft 365</h3>
      <p class="description">Transition to Microsoft 365 for seamless collaboration with employees, suppliers, and customers.</p>
    </a>
    <a href="/en/back-ups/" class="service-card" data-aos="zoom-in" data-aos-delay="550">
      <div class="icon"><i class="bx bx-folder-open"></i></div>
      <h3 class="title">Data Backup</h3>
      <p class="description">Properly configured backups of your critical business data — keeping cybercriminals out!</p>
    </a>
    <a href="/en/cybersecurity/" class="service-card" data-aos="zoom-in" data-aos-delay="600">
      <div class="icon"><i class="bx bx-shield-quarter"></i></div>
      <h3 class="title">Cybersecurity</h3>
      <p class="description">Comprehensive protection against cyberattacks, allowing you to do business with peace of mind.</p>
    </a>
    <a href="/en/it-support/" class="service-card" data-aos="zoom-in" data-aos-delay="650">
      <div class="icon"><i class="bx bx-headphone"></i></div>
      <h3 class="title">IT Support</h3>
      <p class="description">Computer issues? We're here to help and can take control of your system remotely.</p>
    </a>
    <a href="/en/it-consulting/" class="service-card" data-aos="zoom-in" data-aos-delay="700">
      <div class="icon"><i class="bx bx-help-circle"></i></div>
      <h3 class="title">IT Consulting</h3>
      <p class="description">We provide tailored IT advice, carefully aligned with your business needs.</p>
    </a>
  </div>
</section>

<!-- Why-choose-us section -->
<section class="why-choose-us">
  <div class="container">
    <div class="why-left">
      <div data-aos="fade-right" data-aos-duration="800">
        <h2>Why Choose Us?</h2>
        <p>We are committed to delivering reliable, professional IT services that support both your business and personal projects. Our team combines expertise, dedication, and personalized service in every project we undertake.</p>
        <ul class="features">
          <li data-aos="fade-up" data-aos-delay="50">✅ Experienced technicians with years of expertise</li>
          <li data-aos="fade-up" data-aos-delay="75">✅ Flexible support plans tailored to your needs</li>
          <li data-aos="fade-up" data-aos-delay="100">✅ Fast response times and dependable service</li>
          <li data-aos="fade-up" data-aos-delay="125">✅ Competitive pricing and transparent quotes</li>
          <li data-aos="fade-up" data-aos-delay="150">✅ Ongoing support and maintenance</li>
          <li data-aos="fade-up" data-aos-delay="175">✅ Local service with a personal touch</li>
        </ul>
      </div>
    </div>
    <div class="why-right">
      <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
        <h3>Ready to improve your IT infrastructure?</h3>
        <p>From simple home network upgrades to comprehensive business solutions — we're here to help you every step of the way.</p>
        <ul class="highlights">
          <li data-aos="fade-up" data-aos-delay="350">• Same-day service available</li>
          <li data-aos="fade-up" data-aos-delay="400">• Free initial consultation</li>
          <li data-aos="fade-up" data-aos-delay="450">• Satisfaction guaranteed</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Language selector 
<div id="floating-lang">
  <button class="lang-btn" data-url="/en/" onclick="changeLanguage('/en/')">EN</button>
  <button class="lang-btn" data-url="/nl/" onclick="changeLanguage('/nl/')">NL</button>
  <button class="lang-btn" data-url="#top" onclick="changeLanguage('#top')">↑</button>
</div>-->

<!-- Contact Section -->
<div id="contact" class="page-wrapper">
  <main class="form-wrapper">
    <form action="/contact-versturen.php" method="post" novalidate>
      <div class="mb-4">
        <label for="bedrijf">Company Name</label>
        <input type="text" id="bedrijf" name="bedrijf" placeholder="Company Name" />
      </div>
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="voornaam">First Name <span class="required">(Required)</span></label>
          <input type="text" id="voornaam" name="voornaam" placeholder="First Name" required />
        </div>
        <div class="col-md-6">
          <label for="familienaam">Last Name <span class="required">(Required)</span></label>
          <input type="text" id="familienaam" name="familienaam" placeholder="Last Name" required />
        </div>
      </div>
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="email">Email <span class="required">(Required)</span></label>
          <input type="email" id="email" name="email" placeholder="Email Address" required />
        </div>
        <div class="col-md-6">
          <label for="telefoon">Phone</label>
          <input type="tel" id="telefoon" name="telefoon" placeholder="Phone" pattern="[0-9]{10}" />
        </div>
      </div>
      <div class="row g-3 mb-4">
        <div class="col-12">
          <label for="onderwerp">Subject</label>
          <select id="onderwerp" name="subject" class="form-select" required>
            <option value="" disabled selected>Choose...</option>
            <option>Back-ups</option>
            <option>Hardware Purchase</option>
            <option>Network Expansion</option>
            <option>Websites</option>
            <option>Microsoft 365</option>
            <option>Telephony</option>
            <option>Cybersecurity</option>
            <option>Repairs</option>
            <option>Consulting</option>
            <option>Support</option>
            <option>Request a Quote</option>
            <option>Other</option>
          </select>
        </div>
      </div>
      <div class="mb-4">
        <label for="bericht">Your Message <span class="required">(Required)</span></label>
        <textarea id="bericht" name="bericht" rows="6" placeholder="Your message" required></textarea>
      </div>
      <input type="hidden" name="lang" value="en" />
      <input type="text" name="website" style="display: none" />
      <input type="hidden" name="form_start" value="<?php echo time(); ?>" />
      <div class="g-recaptcha" data-sitekey="6LfMPIYsAAAAAL1z1GsBU_BvCOfojj6aHHIvCHBP"></div>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <button type="submit" class="submit-btn">Send</button>
    </form>
  </main>
</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="/js/Contact.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="/js/AOS.js"></script>
