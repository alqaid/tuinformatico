<?php
session_start();
$mensaje="  ---  ";
if ((isset($_SESSION['rol'])) && ($_SESSION['rol']=='empresa')) {
	$mensaje="  --- Bienvenido " .  $_SESSION["eNombre"];
}elseif(isset($_SESSION['rol']) && ($_SESSION['rol']=='informatico')) {
	$mensaje="  --- Bienvenido " .  $_SESSION["iNombre"];
	
	if(isset($_SESSION['iClave']) && isset($_GET['metodo'])   && isset($_GET['clave']) &&  ($_GET['metodo']=='unirse') ) {
		// se ha llamado al metodo UNIRSE por un INFORMÁTICO AUTENTICADO Y A UN SERVICIO CONCRETO.
		//$mensaje .= "<br> existe todo metodo:" . $_GET['metodo'] . " -id: " . $_GET['id'];
		
		require('../controlador/Acontrolador.php');
		$asunto='';
		if(isset($_GET['asunto'])) $asunto=$_GET['asunto'];  // no se hace nada, no hace falta comprobar

		$respuesta = contr_unirse($_GET['clave'],$_SESSION['iClave']);
		if ($respuesta=="OK"){
			$mensaje=" Estimado " .  $_SESSION["iNombre"] . "<br> Se ha unido correctamente a la oferta: ";
			$mensaje .= $asunto ;
		}else{
			$mensaje=" Estimado " .  $_SESSION["iNombre"] . "<br> ha ocurrido un error al unirse a la oferta: ";
			$mensaje .= $respuesta;
		}
	}
}	 
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TU INFORMÁTICO - NUEVO CONTRATO</title>
<?php
	require('head.php');
?>
</head>
<body>
<?php
	require('cabecera.php');
?>
<main class=" col-9 "   >
<!--  SITIO LIBRE PARA INCLUIR  -->

<?php
	echo $mensaje;
	 
?>



<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" -->
	<aside class=" col-3 "   > <!-- BANNER -->
		<h2>Compartenos en tus redes sociales<h2><br>
		<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
		<img   src="images/logo_facebook.png" alt=""  width="75px" height="75px">
		</a>
		<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
		<img   src="images/logo_twitter.jpg" alt=""  width="75px" height="75px">
		</a>
		<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
		<img   src="images/logo_whatsapp.png" alt=""  width="75px" height="75px">
		</a>
	</aside> <!-- FIN BANNER -->
 <?php
	require('pie.php');
?>
                                        <!-- The Modal -->
					    <div class="modal fade" id="identificacion">
                        <?php
							require('modalIdentificarse.php');
							?>
                        </div>
					
					<!-- The Modal -->
                        <div class="modal fade" id="registro">
						<?php
							require('modalRegistro.php');
							?>
                        </div>
                            </body>
                            </html>