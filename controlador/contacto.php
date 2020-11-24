<?php
$mensaje_Devolucion='';
	if (isset($_POST['asunto']) && isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['politica']) && isset( $_POST['descripcion']) ) {
		
		
		if ($_POST['politica']=="Acepto"){
			$politica="Sí";
		}
		
		$descripcion    ="<h3>" . $_POST['asunto'] . "</h3>";
		$descripcion= $descripcion . "<br><b>Nombre contacto:</b> " .  $_POST['nombre']  ;
		$descripcion= $descripcion . "<br><b>Email contacto:</b> " .  $_POST['email'] ;
		if (isset( $_POST['telefono'])){
			$descripcion=$descripcion . "<br><b>Teléfono:</b> " .  $_POST['telefono'];
		}
		$descripcion=$descripcion . "<br>" . $_POST['descripcion'];
	    $descripcion= $descripcion . "<br><b>Acepta política tratamiento de datos:</b> " .  $politica ;
		// -----------------------------------------------------
		$copiaNombre      = $_POST['nombre'];
		$copiaEmail      = $_POST['email'];
		
		$body   =$descripcion;		
	
		// -----------------------------------------------------
			// -----------------------------------------------------
				// -----------------------------------------------------
					// -----------------------------------------------------
						// -----------------------------------------------------
						
					


// -----------------------------------------------------
//  URL GITHUB https://github.com/KyleAMathews/phpmailer
// -----------------------------------------------------
		
require_once('../controlador/librerias/class.phpmailer.php');
require('../controlador/librerias/config.php');


/*
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
*/


$address = "alqaid@gmail.com";
$mail->AddAddress($address, "Angel Alcaide");  // SE ENVIA A LA CUENTA DEL GRUPO
$mail->AddAddress($copiaEmail,$copiaNombre);   // UNA COPIA AL QUE ENVIO EL MENSAJE


$mail->Subject    ="Correo enviado desde Tuinformatico.com" ;
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
 $mensaje_Devolucion='¡ERROR EN EL ENVÍO!. ' . $mail->ErrorInfo;
} else {
  $mensaje_Devolucion='¡Mensaje enviado correctamente!. En breve recibirá una respuesta';
}

					
						
						
		// -----------------------------------------------------
			// -----------------------------------------------------
				// -----------------------------------------------------
					// -----------------------------------------------------
						// -----------------------------------------------------						
						
						
		
	}else{
		$mensaje_Devolucion='Faltan campos requeridos';
	}
	
	header("Location: ../vista/contacto.php?mensaje=$mensaje_Devolucion");
?>