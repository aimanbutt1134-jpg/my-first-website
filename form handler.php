<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$email_from = info@gmail.com;

$emai_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";
$to ='aimanbutt1134@gmail.com';
$headers = "From:$email_from \r\n";
$headers = "Reply_To:$visito_email \r\n";
mail($to,$emai_subject,$email_body,$headers);
header("location:contact.html");

?>