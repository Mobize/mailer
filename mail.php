<?php

$to      = 'denis.nerborac@wf3.fr';
$subject = 'Test envoi message depuis Webforce3';
$message = 'Test envoi message depuis Webforce3';
$headers = 'From: denis.nerborac@wf3.fr' . "\r\n" .
    'Reply-To: denis.nerborac@wf3.fr' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);

var_dump($result);