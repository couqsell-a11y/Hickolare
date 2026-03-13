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
    '/nl/hardware/', '/nl/netwerken/', '/nl/websites/',
    '/nl/microsoft365/', '/nl/microsoft-automation/', '/nl/telefonie/',
    '/nl/back-ups/', '/nl/cyberbeveiliging/',
    '/nl/herstellingen/', '/nl/it-support/', '/nl/it-advies/'
];
?>

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light fixed-top px-4">
  <a class="navbar-brand" href="/nl/">
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
        <a class="nav-link<?php echo isActive('/nl/'); ?>" href="/nl/">Home</a>
      </li>
      <!-- Diensten dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle<?php echo isDropdownActive($dienstenPaths); ?>"
          href="#"
          id="dienstenDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Diensten
        </a>
        <ul class="dropdown-menu dropdown-menu-end p-3 shadow-lg border-0 rounded-3" aria-labelledby="dienstenDropdown" style="min-width: 250px">
          <li>
            <div class="fw-bold text-primary mb-2">Infrastructuur</div>
            <a class="dropdown-item<?php echo isActive('/nl/hardware/'); ?>" href="/nl/hardware/">Hardware</a>
            <a class="dropdown-item<?php echo isActive('/nl/netwerken/'); ?>" href="/nl/netwerken/">Netwerken</a>
            <a class="dropdown-item<?php echo isActive('/nl/websites/'); ?>" href="/nl/websites/">Domeinen en hosting</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Cloud</div>
            <a class="dropdown-item<?php echo isActive('/nl/microsoft365/'); ?>" href="/nl/microsoft365/">Microsoft 365</a>
            <a class="dropdown-item<?php echo isActive('/nl/microsoft-automation/'); ?>" href="/nl/microsoft-automation/">Microsoft automation</a>
            <a class="dropdown-item<?php echo isActive('/nl/telefonie/'); ?>" href="/nl/telefonie/">VOIP Telefonie</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Beveiliging</div>
            <a class="dropdown-item<?php echo isActive('/nl/back-ups/'); ?>" href="/nl/back-ups/">Backup van gegevens</a>
            <a class="dropdown-item<?php echo isActive('/nl/cyberbeveiliging/'); ?>" href="/nl/cyberbeveiliging/">Cyberbeveiliging</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <div class="fw-bold text-primary mb-2">Ondersteuning</div>
            <a class="dropdown-item<?php echo isActive('/nl/herstellingen/'); ?>" href="/nl/herstellingen/">IT Herstellingen</a>
            <a class="dropdown-item<?php echo isActive('/nl/it-support/'); ?>" href="/nl/it-support/">IT Ondersteuning</a>
            <a class="dropdown-item<?php echo isActive('/nl/it-advies/'); ?>" href="/nl/it-advies/">IT Advies</a>
          </li>
        </ul>
      </li>
      <!-- End dropdown -->
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/nl/over-ons/'); ?>" href="/nl/over-ons/">Over ons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/nl/prijzen/'); ?>" href="/nl/prijzen/">Prijzen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo isActive('/nl/contact/'); ?>" href="/nl/contact/">Contact</a>
      </li>
      <li class="nav-item ms-lg-3">
        <a href="/nl/support/" class="btn btn-yellow-navbar">Support</a>
      </li>
    </ul>
  </div>
</nav>
