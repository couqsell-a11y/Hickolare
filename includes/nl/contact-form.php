<div id="contact" class="page-wrapper">
  <main class="form-wrapper">
    <form action="/contact-versturen.php" method="post" novalidate>
      <div class="section-title">
        <h2>Neem contact op</h2>
      </div>
      <!-- Bedrijfsnaam -->
      <div class="mb-4">
        <label for="bedrijf">Bedrijfsnaam</label>
        <input type="text" id="bedrijf" name="bedrijf" placeholder="Bedrijfsnaam" />
      </div>
      <!-- Voornaam + Familienaam -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="voornaam">Voornaam <span class="required">(Verplicht)</span></label>
          <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required />
        </div>
        <div class="col-md-6">
          <label for="familienaam">Familienaam <span class="required">(Verplicht)</span></label>
          <input type="text" id="familienaam" name="familienaam" placeholder="Familienaam" required />
        </div>
      </div>
      <!-- Straat + Nr + Bus -->
      <div class="row g-3 mb-3 align-items-end">
        <div class="col-12 col-md-8">
          <label for="straat">Adres <span class="required">(Verplicht)</span></label>
          <input type="text" id="straat" name="straat" placeholder="Straat" required />
        </div>
        <div class="col-5 col-md-2 number-input">
          <label for="nummer" class="visually-hidden">Nr</label>
          <input type="text" id="nummer" name="nummer" placeholder="Nr" />
        </div>
        <div class="col-5 col-md-2 number-input">
          <label for="bus" class="visually-hidden">Bus</label>
          <input type="text" id="bus" name="bus" placeholder="Bus" />
        </div>
      </div>
      <!-- Postcode + Gemeente -->
      <div class="row g-3 mb-4 align-items-end">
        <div class="col-5 col-md-6">
          <label for="postcode">Postcode <span class="required">(Verplicht)</span></label>
          <input type="text" id="postcode" name="postcode" placeholder="Postcode" required />
        </div>
        <div class="col-6 col-md-6">
          <label for="gemeente" class="visually-hidden">Gemeente</label>
          <input type="text" id="gemeente" name="gemeente" placeholder="Gemeente" required />
        </div>
      </div>
      <!-- E-mail + Telefoon -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="email">E-mail <span class="required">(Verplicht)</span></label>
          <input type="email" id="email" name="email" placeholder="E-mailadres" required />
        </div>
        <div class="col-md-6">
          <label for="telefoon">Telefoon</label>
          <input type="tel" id="telefoon" name="telefoon" placeholder="Telefoon" pattern="[0-9]{10}" />
        </div>
      </div>
      <!-- Onderwerp -->
      <div class="row g-3 mb-4">
        <div class="col-12">
          <label for="onderwerp">Onderwerp</label>
          <?php if (!empty($formSubject)): ?>
            <!-- Vast onderwerp voor dienstenpagina's -->
            <select id="onderwerp" name="subject_display" class="form-select" disabled>
              <option selected><?php echo htmlspecialchars($formSubject); ?></option>
            </select>
            <input type="hidden" name="subject" value="<?php echo htmlspecialchars($formSubject); ?>" />
          <?php else: ?>
            <!-- Volledige dropdown voor contact/hoofdpagina -->
            <select id="onderwerp" name="subject" class="form-select" required>
              <option value="" disabled selected>Kies...</option>
              <option>Back-up Oplossing</option>
              <option>Hardware</option>
              <option>Netwerk</option>
              <option>Website</option>
              <option>Microsoft 365</option>
              <option>Microsoft Automatisatie</option>
              <option>Telefonie</option>
              <option>Cybersecurity</option>
              <option>Herstellingen</option>
              <option>Support</option>
              <option>Advies</option>
              <option>Andere</option>
            </select>
          <?php endif; ?>
        </div>
      </div>
      <!-- Bericht -->
      <div class="mb-4">
        <label for="bericht">Jouw bericht <span class="required">(Verplicht)</span></label>
        <textarea id="bericht" name="bericht" rows="6" placeholder="Je bericht" required></textarea>
      </div>
      <!-- Verborgen velden -->
      <input type="hidden" name="lang" value="nl" />
      <input type="text" name="website" style="display: none" />
      <input type="hidden" name="form_start" value="<?php echo time(); ?>" />
      <!-- Google reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6LfMPIYsAAAAAL1z1GsBU_BvCOfojj6aHHIvCHBP"></div>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <!-- Verzendknop -->
      <button type="submit" class="submit-btn">Verzenden</button>
    </form>
  </main>
</div>
