<!-- Language switcher + scroll to top -->
<div id="floating-lang">
  <a href="#" class="lang-btn current">EN</a>
  <a href="<?php echo htmlspecialchars($translationUrl ?? '/nl/'); ?>" class="lang-btn">NL</a>
  <button id="scrollTopBtn" class="lang-btn">↑</button>
</div>

<!-- Start Footer -->
<footer class="footer">
  <div class="footer-quote" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <h2><span class="quote">Need reliable IT support?</span></h2>
    <p><strong>Partner with Hicko-IT — your trusted IT partner for growth and continuity.</strong></p>
  </div>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Infrastructure &amp; Cloud</h3>
      <ul>
        <li><a href="/en/hardware/">Hardware</a></li>
        <li><a href="/en/networks/">Networking</a></li>
        <li><a href="/en/websites/">Domains &amp; Hosting</a></li>
        <li><a href="/en/microsoft365/">Microsoft 365</a></li>
        <li><a href="/en/microsoft-automation/">Microsoft Automation</a></li>
        <li><a href="/en/voip/">VOIP Telephony</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Security &amp; Support</h3>
      <ul>
        <li><a href="/en/back-ups/">Data Backup</a></li>
        <li><a href="/en/cybersecurity/">Cybersecurity</a></li>
        <li><a href="/en/repairs/">IT Repairs</a></li>
        <li><a href="/en/it-support/">IT Support</a></li>
        <li><a href="/en/it-consulting/">IT Consultancy</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Contact Information</h3>
      <p>Phone: 0123 45 67 89</p>
      <p>Email: <a href="mailto:info@hicko.be">info@hicko.be</a></p>
      <p>Location: Dendermonde</p>
      <p>VAT BE 0101010101010101</p>
      <div class="social-links mt-3">
        <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>
  <hr />
  <div class="footer-bottom">
    <p>© 2025<?php if (date('Y') > 2025) echo '-' . date('Y'); ?> Hicko-IT — All Rights Reserved</p>
  </div>
  <hr />
</footer>
<!-- End Footer -->
