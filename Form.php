<?php
$name = $_POST['name'];
$VISITOR_Email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = '';   /*Domain Name */
$email_subject = 'New Form Submission';
$email_body = "user name:$name.\n".
               "user name:$VISITOR_Email .\n".
               "user name:$subject.\n".
               "user name:$message.\n";
$to = 'habbas@neibenefits.org';
$headers = "form :$email_from \r\n";

$headers . = "Replay to :$VISITOR_Email \r\n";

mail($to,$email_subject,$email_body ,$headers );
header("location : ContactUs.html");
 ?>
