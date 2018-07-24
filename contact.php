<?php
$to      = 'escutonklein@gmail.com';
$subject = $_POST['contact_subject'];
$message = $_POST['contact_message'];
$headers = 'From: '.$_POST['contact_name']. "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>