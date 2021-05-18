<?php
$name= $_post['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from="info@university-of-engineering.netlify.app";


$email_subject="Query from Website";


$email_body="User Name: $name.\n".
            "User Name: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";



$to='ateef.shareef000@gmail.com';

$headers="From: $email_from \r\n";

$headers .= "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>






