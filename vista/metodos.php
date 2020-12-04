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
		</a><br><br><br>
			<img src="images/PublicidadRonaldo.jpg" width="100%" height="50%" usemap="#kfc">
			<h6>Ronaldo no para de comer el pollo más rico del mundo, descubre las mejores ofertas para el pollo más crujiente</h6>
			<img src="images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el código cr7 puedes conseguir un 50% de descuento en nuestro nuevo menú: CrujienteR7. ¡No esperes más!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">¡Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
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