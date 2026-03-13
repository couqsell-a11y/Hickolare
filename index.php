<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'nl', 0, 2);
$target = ($lang === 'en') ? '/en/' : '/nl/';
header('Location: ' . $target, true, 302);
exit;
?>
