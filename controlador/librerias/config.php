<?php
$mail             = new PHPMailer(); // defaults to using php "mail()"

 

$mail->IsSMTP(); // telling the class to use SMTP
 
$mail->SMTPAuth      = true;                  // enable SMTP authentication
$mail->SMTPKeepAlive = true;                   // SMTP connection will not close after each email sent
$mail->Host          = "xxxxx"; // sets the SMTP server
$mail->Port          = 111;                    // set the SMTP port for the GMAIL server
$mail->Username      = "xxxx"; // SMTP account username
$mail->Password      = "xxxx";        // SMTP account password
$mail->SetFrom('xxxxxx');
$mail->AddReplyTo('xxxxxx');
$mail->CharSet = 'UTF-8';
?>