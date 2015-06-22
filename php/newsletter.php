<?php

$name = $_POST['nlname'];
$email_address = $_POST['nlemail'];
	
$to = 'lindsey.gillespie@doggiesdaycareuk.com'; 

$email_subject = "New newsletter submission!";
$email_body = "You have received a new newsletter submission from $name.\nContact email: $email_address";

$headers = "From: newsletter@doggiesdaycareuk.com";
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

return true;	

?>