<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form ='https://github.com/Bepractical1/practical.github.io';

$email_subject ='New Form Submission';


$email_body ="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n".
 $to ='dadimasram@gmail.com';
 
 $headers ="From: $emaili_from \r\n";

 $headers .="Reply0-To: $visitor_email \r\n";


 mail($to,$email_subject,$email_body,$header);

header("location: contact.html");



?>