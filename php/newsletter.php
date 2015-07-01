<?php

$name = $_POST['nlname'];
$email_address = $_POST['nlemail'];
	
$to = 'lindsey.gillespie@doggiesdaycareuk.com'; 

$email_subject = "New newsletter submission!";
$email_body = "You have received a new newsletter submission from $name.\nContact email: $email_address";

$headers = "From: newsletter@doggiesdaycareuk.com";
$headers .= "Reply-To: $email_address";

// Create the email and send the message
$to = 'lindsey.gillespie@doggiesdaycareuk.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Newsletter Subscription:  $name";
$email_body = "You have received a new newsletter subscription.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address";
$headers = "From: newsletter@doggiesdaycareuk.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

return true;	

?>