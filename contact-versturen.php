<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // -----------------------------
    // DETECT LANGUAGE
    // -----------------------------
    $lang = $_POST['lang'] ?? 'en';

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
    $telefoon = clean($_POST['telefoon']);
    $subject = clean($_POST['subject']);
    $bericht = clean($_POST['bericht']);

    if (!$email) {
        exit("Invalid email");
    }

    // -----------------------------
    // CAPTCHA VERIFICATION
    // -----------------------------
    $secret = "6LfMPIYsAAAAACkvXJpPcYduhtgcI-9XM9tma-e8"; // Replace with your reCAPTCHA secret
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
    $full_message = "Naam: $voornaam $familienaam\n";
    $full_message .= "Bedrijf: $bedrijf\n";
    $full_message .= "Email: $email\n";
    $full_message .= "Telefoon: $telefoon\n\n";
    $full_message .= "Bericht:\n$bericht\n";

    $headers = "From: Couquelet Website <info@couquelet.be>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mail_success = mail($to, "Nieuwe contactbericht: $subject", $full_message, $headers, "-fwebsite@couquelet.be");

    // -----------------------------
    // HTML AUTO-REPLY TO VISITOR
    // -----------------------------
    if ($mail_success) {

        $auto_subject = ($lang === 'nl') ? "Bedankt voor uw bericht" : "Thank you for contacting Couquelet";

        $auto_message = '
        <html>
        <head>
          <meta charset="UTF-8">
          <title>'.$auto_subject.'</title>
        </head>
        <body style="font-family: Arial, sans-serif; line-height:1.6; color:#333;">
          <div style="max-width:600px; margin:0 auto; padding:20px; border:1px solid #eee; border-radius:8px;">
            <img src="https://couquelet.be/pics/Logo.png" alt="Couquelet" style="max-width:150px; margin-bottom:20px;">
            <h2 style="color:#1a73e8;">'.(($lang==='nl') ? "Hallo $voornaam," : "Hello $voornaam,").'</h2>
            <p>'.(($lang==='nl') ? "Dank u voor het contacteren van Hicko IT. We hebben uw bericht goed ontvangen en zullen u zo snel mogelijk antwoorden." : "Thank you for reaching out to Hicko IT. We have received your message and will reply as soon as possible.").'</p>
            
            <h3 style="border-bottom:1px solid #ddd; padding-bottom:5px;">'.(($lang==='nl') ? "Uw bericht:" : "Your message:").'</h3>
            <p style="background:#f9f9f9; padding:10px; border-radius:4px; white-space:pre-line;">'.$bericht.'</p>
            
            <p>'.(($lang==='nl') ? "Met vriendelijke groet," : "Kind regards,").'<br>
            <strong>Hicko IT Team</strong><br>
            <a href="https://couquelet.be" style="color:#1a73e8; text-decoration:none;">https://couquelet.be</a></p>
          </div>
        </body>
        </html>
        ';

        $auto_headers = "MIME-Version: 1.0\r\n";
        $auto_headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $auto_headers .= "From: Hicko IT <info@couquelet.be>\r\n";

        mail($email, $auto_subject, $auto_message, $auto_headers);

        // -----------------------------
        // LANGUAGE-BASED REDIRECT
        // -----------------------------
        if ($lang === 'nl') {
            header("Location: /nl/contact/danku/");
        } else {
            header("Location: /en/contact/thanks/");
        }
        exit();

    } else {
        echo ($lang==='nl') ? "Er ging iets mis." : "Something went wrong.";
    }
}
?>