<?php

// -----------------------------------------------------
//  URL GITHUB https://github.com/KyleAMathews/phpmailer
// 

function enviaremail($email,$asunto){
require_once('../controlador/librerias/class.phpmailer.php');
require('../controlador/librerias/config.php');


/*
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
*/


$address = "alqaid@gmail.com";
$mail->AddAddress($email, "Angel Alcaide");  // SE ENVIA A LA CUENTA DEL GRUPO
//$mail->AddAddress($copiaEmail,$copiaNombre);   // UNA COPIA AL QUE ENVIO EL MENSAJE


$mail->Subject    =$asunto;
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($asunto);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  $mensaje_Devolucion='¡ERROR EN EL ENVÍO!. <BR>' . $mail->ErrorInfo;
} else {
   $mensaje_Devolucion='¡Mensaje enviado correctamente!. En breve recibirá una respuesta';
}
echo $mensaje_Devolucion;
}



enviaremail("alqaid@gmail.com","prueba");
?>