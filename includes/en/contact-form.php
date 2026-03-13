<div id="contact" class="page-wrapper">
  <main class="form-wrapper">
    <form action="/contact-versturen.php" method="post" novalidate>
      <div class="section-title">
        <h2>Connect with Our Experts</h2>
      </div>
      <!-- Company name -->
      <div class="mb-4">
        <label for="bedrijf">Company Name</label>
        <input type="text" id="bedrijf" name="bedrijf" placeholder="Company Name" />
      </div>
      <!-- First and last name -->
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
      <!-- Email + Phone -->
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
      <!-- Subject -->
      <div class="row g-3 mb-4">
        <div class="col-12">
          <label for="onderwerp">Subject</label>
          <?php if (!empty($formSubject)): ?>
            <!-- Forced subject for service pages -->
            <select id="onderwerp" name="subject_display" class="form-select" disabled>
              <option selected><?php echo htmlspecialchars($formSubject); ?></option>
            </select>
            <input type="hidden" name="subject" value="<?php echo htmlspecialchars($formSubject); ?>" />
          <?php else: ?>
            <!-- Full dropdown for main/contact page -->
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
          <?php endif; ?>
        </div>
      </div>
      <!-- Message -->
      <div class="mb-4">
        <label for="bericht">Your Message <span class="required">(Required)</span></label>
        <textarea id="bericht" name="bericht" rows="6" placeholder="How can we assist you?" required></textarea>
      </div>
      <!-- Hidden fields -->
      <input type="hidden" name="lang" value="<?php echo htmlspecialchars($lang ?? 'en'); ?>" />
      <input type="text" name="website" style="display: none" />
      <input type="hidden" name="form_start" value="<?php echo time(); ?>" />
      <!-- reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6LfMPIYsAAAAAL1z1GsBU_BvCOfojj6aHHIvCHBP"></div>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <!-- Submit -->
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </main>
</div>
