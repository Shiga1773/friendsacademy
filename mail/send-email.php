<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . 'phpmailer/src/Exception.php';
require_once __DIR__ . 'phpmailer/src/PHPMailer.php';
require_once __DIR__ . 'phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'prawira0@gmail.com'; // YOUR gmail email
    $mail->Password = 'hisakata12'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('prawira0@gmail.com', 'Prawira');
    $mail->addAddress('hyorinmaru.uzumaki@gmail.com', 'hyorin');
    $mail->addReplyTo('akiyoshi.shiga@gmail.com', 'akiyoshi'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Tes kirim";
    $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>
