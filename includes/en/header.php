<?php
$lang = $lang ?? 'en';
echo '<!doctype html>';
echo '<html lang="' . htmlspecialchars($lang) . '">';
?>
<head>
  <!-- Charset first -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover" />
  <meta name="author" content="Hicko IT" />

  <!-- Title & Meta -->
  <title><?php echo !empty($pageTitle) ? htmlspecialchars($pageTitle) : 'Hicko IT'; ?></title>
  <?php if (!empty($metaDescription)) echo '<meta name="description" content="' . htmlspecialchars($metaDescription) . '" />'; ?>
  <?php if (!empty($metaKeywords)) echo '<meta name="keywords" content="' . htmlspecialchars($metaKeywords) . '" />'; ?>

  <!-- Canonical URL -->
  <link rel="canonical" href="https://couquelet.be<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />

  <!-- Hreflang -->
  <link rel="alternate" hreflang="en" href="https://couquelet.be/en/" />
  <link rel="alternate" hreflang="nl" href="https://couquelet.be/nl/" />

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle ?? 'Hicko IT'); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription ?? ''); ?>" />
  <meta property="og:image" content="https://couquelet.be<?php echo htmlspecialchars($ogImage ?? '/pics/Logo.png'); ?>" />
  <meta property="og:url" content="https://couquelet.be<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hicko IT" />

  <!-- Favicon -->
  <link rel="icon" href="/pics/favicon.ico" type="image/x-icon" />

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />

  <!-- Animate on Scroll -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/maine.css" />
  <?php if (!empty($extraCss)) echo '<link rel="stylesheet" href="' . htmlspecialchars($extraCss) . '" />'; ?>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EE3BZE5NDL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-EE3BZE5NDL');
  </script>

</head>
<body>
