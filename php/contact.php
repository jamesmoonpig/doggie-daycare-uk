<?php

$name = $_POST['iname'];
$email_address = $_POST['iemail'];
$phone = $_POST['iphone'];
$message = $_POST['imessage'];
	
// Create the email and send the message
$to = 'lindsey.gillespie@doggiesdaycareuk.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: contactform@doggiesdaycareuk.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;	

?>