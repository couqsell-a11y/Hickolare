<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // -----------------------------
    // HONEYPOT FIELD CHECK
    // -----------------------------
    if (!empty($_POST['website'])) { // bots fill hidden field
        exit;
    }

    // -----------------------------
    // TIMING CHECK (prevent instant bot submits)
    // -----------------------------
    if (!isset($_POST['form_start']) || (time() - intval($_POST['form_start'])) < 3) {
        exit("Form submitted too quickly. Are you a bot?");
    }

    // -----------------------------
    // CLEAN INPUT FUNCTION
    // -----------------------------
    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $voornaam = clean($_POST['voornaam']);
    $familienaam = clean($_POST['familienaam']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $bedrijf = clean($_POST['bedrijf']);
    $subject = clean($_POST['subject']);
    $bericht = clean($_POST['bericht']);

    if (!$email) {
        exit("Invalid email");
    }

    // -----------------------------
    // CAPTCHA VERIFICATION
    // -----------------------------
    $secret = "6Lf1IoYsAAAAAKPQBkTrrEBpeNnECqKWAeH8-hHH"; // Replace with your Google reCAPTCHA secret
    $response = $_POST['g-recaptcha-response'] ?? '';

    $verify = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response"
    );
    $captcha_success = json_decode($verify);

    if (!$captcha_success->success) {
        exit("CAPTCHA verification failed.");
    }

    // -----------------------------
    // EMAIL TO YOU
    // -----------------------------
    $to = "info@couquelet.be";
    $message = "Naam: $voornaam $familienaam\n";
    $message .= "Bedrijf: $bedrijf\n";
    $message .= "Email: $email\n\n";
    $message .= "Bericht:\n$bericht\n";

    $headers = "From: Couquelet <info@couquelet.be>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);

    // -----------------------------
    // HTML AUTO-REPLY TO VISITOR
    // -----------------------------
    $auto_subject = "Thank you for contacting Couquelet";

    $auto_message = '
    <html>
    <head>
      <meta charset="UTF-8">
      <title>Thank you for contacting Couquelet</title>
    </head>
    <body style="font-family: Arial, sans-serif; line-height:1.6; color:#333;">
      <div style="max-width:600px; margin:0 auto; padding:20px; border:1px solid #eee; border-radius:8px;">
        <img src="https://couquelet.be/logo.png" alt="Couquelet" style="max-width:150px; margin-bottom:20px;">
        <h2 style="color:#1a73e8;">Hello ' . $voornaam . ',</h2>
        <p>Thank you for reaching out to <strong>Couquelet</strong>. We have received your message and will reply as soon as possible.</p>
        
        <h3 style="border-bottom:1px solid #ddd; padding-bottom:5px;">Your message:</h3>
        <p style="background:#f9f9f9; padding:10px; border-radius:4px; white-space:pre-line;">' . $bericht . '</p>
        
        <p>Kind regards,<br>
        <strong>Couquelet Team</strong><br>
        <a href="https://couquelet.be" style="color:#1a73e8; text-decoration:none;">https://couquelet.be</a></p>
      </div>
    </body>
    </html>
    ';

    $auto_headers = "MIME-Version: 1.0\r\n";
    $auto_headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $auto_headers .= "From: Couquelet <info@couquelet.be>\r\n";

    mail($email, $auto_subject, $auto_message, $auto_headers);

    // -----------------------------
    // REDIRECT TO THANK-YOU PAGE
    // -----------------------------
    header("Location: /thank-you.html");
    exit();
}
?>