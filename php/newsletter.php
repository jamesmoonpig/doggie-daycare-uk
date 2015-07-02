<?php 
    $first_name = $_POST['nlname'];
    $email_from = $_POST['nlemail'];

    $email_to = "lindsey.gillespie@doggiesdaycareuk.com";
    $email_subject = "Newsletter Subscription";
    $email_message = "A newsletter subscription has been submitted.\n\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";

    $headers = "From: $email_from.\n".
    $headers .= "Reply-To: $email_from.";

    @mail($email_to, $email_subject, $email_message, $headers);  

    function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
    }
?>