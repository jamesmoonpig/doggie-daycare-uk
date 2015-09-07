<?php

$firstName = $_POST['firstName'];
$Surname = $_POST['surname'];
$message = $_POST['contactQuery'];

$to      = 'info@doggiesdaycareuk.com';
$subject = "New contact from $firstName $Surname";
$body = "New message recieved: \n \n $message";
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);
?>