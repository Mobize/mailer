<?php
require __DIR__.'/vendor/autoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->Debugoutput = 'html';

$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.live.com';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@gmail.com';                 // SMTP username
// getenv refers to "SetEnv SMTP_PASSWORD XXX" defined in Apache httpd.conf
$mail->Password = getenv('SMTP_PASSWORD');                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('contact@monsite.fr', 'Expediteur');
$mail->addReplyTo('contact@monsite.fr', 'Expediteur');

$mail->addAddress('client@mail.com', 'Destinataire');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}