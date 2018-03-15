<?php

// Get POSTS
$email_to = $_POST['to'];
$email_subject = "Method: Relay";
$comments = $_POST['comments'];

// Check
if(strlen($email_to) < 2) {
  echo "ERROR: It seems you haven't entered any e-mail address. Please try agian.<br /> ";
  die();
}

// Build
$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}   

$email_message .= "Comments: ".clean_string($comments)."\n";

// Create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

// Send
//@mail($email_to, $email_subject, $email_message, $headers);  
@mail($email_to, $email_subject, $email_message);  
?> 

Email sent successfully!

<?php

//}
?>
