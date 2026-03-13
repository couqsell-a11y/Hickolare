<?php
$currentPath = strtok($_SERVER['REQUEST_URI'], '?');

function isActive(string $path): string {
    global $currentPath;
    return $currentPath === $path ? ' active' : '';
}

function isDropdownActive(array $paths): string {
    global $currentPath;
    foreach ($paths as $path) {
        if (str_starts_with($currentPath, $path)) return ' active';
    }
    return '';
}

$dienstenPaths = [
    '/en/hardware/', '/en/networks/', '/en/websites/',
    '/en/microsoft365/', '/en/microsoft-automation/', '/en/voip/',
    '/en/back-ups/', '/en/cybersecurity/',
    '/en/repairs/', '/en/it-support/', '/en/it-consulting/'
];
?>

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light fixed-top px-4">
  <a class="navbar-brand" href="/en/">
    <img src="/pics/Logo.png" alt="Logo" width="150" height="50" />
  </a>
  <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
    <ul class="navbar-nav text-center ms-auto">
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/en/'); ?>" href="/en/">Home</a>
      </li>
      <!-- Services dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle<?php echo isDropdownActive($dienstenPaths); ?>"
          href="#"
          id="dienstenDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Services
        </a>
        <ul class="dropdown-menu dropdown-menu-end p-3 shadow-lg border-0 rounded-3" aria-labelledby="dienstenDropdown" style="min-width: 250px">
          <li>
            <div class="fw-bold text-primary mb-2">Infrastructure</div>
            <a class="dropdown-item<?php echo isActive('/en/hardware/'); ?>" href="/en/hardware/">Hardware</a>
            <a class="dropdown-item<?php echo isActive('/en/networks/'); ?>" href="/en/networks/">Networking</a>
            <a class="dropdown-item<?php echo isActive('/en/websites/'); ?>" href="/en/websites/">Domains &amp; Hosting</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Cloud</div>
            <a class="dropdown-item<?php echo isActive('/en/microsoft365/'); ?>" href="/en/microsoft365/">Microsoft 365</a>
            <a class="dropdown-item<?php echo isActive('/en/microsoft-automation/'); ?>" href="/en/microsoft-automation/">Microsoft Automation</a>
            <a class="dropdown-item<?php echo isActive('/en/voip/'); ?>" href="/en/voip/">VOIP Telephony</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Security</div>
            <a class="dropdown-item<?php echo isActive('/en/back-ups/'); ?>" href="/en/back-ups/">Data Backup</a>
            <a class="dropdown-item<?php echo isActive('/en/cybersecurity/'); ?>" href="/en/cybersecurity/">Cybersecurity</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Support</div>
            <a class="dropdown-item<?php echo isActive('/en/repairs/'); ?>" href="/en/repairs/">IT Repairs</a>
            <a class="dropdown-item<?php echo isActive('/en/it-support/'); ?>" href="/en/it-support/">IT Support</a>
            <a class="dropdown-item<?php echo isActive('/en/it-consulting/'); ?>" href="/en/it-consulting/">IT Consulting</a>
          </li>
        </ul>
      </li>
      <!-- End dropdown -->
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/en/about-us/'); ?>" href="/en/about-us/">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/en/pricing/'); ?>" href="/en/pricing/">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/en/contact/'); ?>" href="/en/contact/">Contact</a>
      </li>
      <li class="nav-item ms-lg-3">
        <a href="/en/it-support/" class="btn btn-yellow-navbar">Support</a>
      </li>
    </ul>
  </div>
</nav>
