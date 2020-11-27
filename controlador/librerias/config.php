<?php
$mail             = new PHPMailer(); // defaults to using php "mail()"

 

$mail->IsSMTP(); // telling the class to use SMTP
 
$mail->SMTPAuth      = true;                  // enable SMTP authentication
<<<<<<< HEAD
$mail->SMTPKeepAlive = true;                   // SMTP connection will not close after each email sent
$mail->Host          = "xxxxx"; // sets the SMTP server
$mail->Port          = 111;                    // set the SMTP port for the GMAIL server
$mail->Username      = "xxxx"; // SMTP account username
$mail->Password      = "xxxx";        // SMTP account password
$mail->SetFrom('xxxxxx'); 
$mail->AddReplyTo('xxxxxx');
=======
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Host          = "smtp.ionos.es"; // sets the SMTP server
$mail->Port          = 587;                    // set the SMTP port for the GMAIL server
$mail->Username      = "envios@alcaide.info"; // SMTP account username
$mail->Password      = "fwe_asRRW321qwer$";        // SMTP account password
$mail->SetFrom('envios@alcaide.info');
$mail->AddReplyTo('envios@alcaide.info');
>>>>>>> ANGEL
$mail->CharSet = 'UTF-8';
?>