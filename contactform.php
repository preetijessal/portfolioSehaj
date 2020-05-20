<?php>
    
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
       $email_from = 'Styles Restaurant';
$email_subject = 'New message';
  $email_body = "Name:$name.\n".
      "Email: $email.\n".
      "Message: $message.\n";
$to = "836474@pdsb.net";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

    ?>