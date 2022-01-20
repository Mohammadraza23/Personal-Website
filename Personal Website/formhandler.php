<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_rec = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User email: $visitor_email.\n".
              "User Message: $message .\n";



$to = 'razamohammad517@gmail.com';


$headers = "From: $email_rec \r\n";

$headers = "Reply to: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);
header("Location: Contact.html");





?>