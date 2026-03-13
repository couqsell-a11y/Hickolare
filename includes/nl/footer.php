<!-- Language switcher + scroll to top -->
<div id="floating-lang">
  <a href="<?php echo htmlspecialchars($translationUrl ?? '/en/'); ?>" class="lang-btn">EN</a>
  <a href="#" class="lang-btn current">NL</a>
  <button id="scrollTopBtn" class="lang-btn">↑</button>
</div>

<!-- Start Footer -->
<footer class="footer">
  <div class="footer-quote" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <h2><span class="quote">Betrouwbare IT-ondersteuning nodig?</span></h2>
    <p><strong>Werk samen met Hicko-IT — jouw vertrouwde IT-partner voor groei en continuïteit.</strong></p>
  </div>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Infrastructuur &amp; Cloud</h3>
      <ul>
        <li><a href="/nl/hardware/">Hardware</a></li>
        <li><a href="/nl/netwerken/">Netwerken</a></li>
        <li><a href="/nl/websites/">Domeinen en hosting</a></li>
        <li><a href="/nl/microsoft365/">Microsoft 365</a></li>
        <li><a href="/nl/microsoft-automation/">Microsoft Automatisatie</a></li>
        <li><a href="/nl/telefonie/">VOIP Telefonie</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Beveiliging &amp; Ondersteuning</h3>
      <ul>
        <li><a href="/nl/back-ups/">Backup van gegevens</a></li>
        <li><a href="/nl/cyberbeveiliging/">Cyberbeveiliging</a></li>
        <li><a href="/nl/herstellingen/">IT Herstellingen</a></li>
        <li><a href="/nl/it-support/">IT Ondersteuning</a></li>
        <li><a href="/nl/it-advies/">IT Advies</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Contact Info</h3>
      <p>Phone: 0123 45 67 89</p>
      <p>Email: <a href="mailto:info@hicko.be">info@hicko.be</a></p>
      <p>Location: Dendermonde</p>
      <p>BTW BE 0101010101010101</p>
      <div class="social-links mt-3">
        <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>
  <hr />
  <div class="footer-bottom">
    <p>© 2025<?php if (date('Y') > 2025) echo '-' . date('Y'); ?> Hicko IT - Alle rechten voorbehouden</p>
  </div>
  <hr />
</footer>
<!-- End Footer -->
