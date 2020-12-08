 <?php
session_start();
require('../controlador/Acontrolador.php');
$mensaje="";
$pago="";


if (isset($_SESSION['eClave'])) {//if ((isset($_SESSION['rol'])) && ($_SESSION['rol']=='empresa')) { 

	if (isset( $_SESSION["clavePAYPAL"]) && isset($_GET["pagoexitoso"]))   { 
        
        $respuesta=VerificarPagoPAYPAL( $_SESSION["clavePAYPAL"],$_GET["pagoexitoso"]);
        if ($respuesta=="OK"){
            $mensaje.="
			<div class='alert alert-success alert-dismissible'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>!Pago Aceptado!</strong></div>";
            $mensaje.="<p>El proceso de contratación ha concluido,<br>Le hemos enviado un email a UD. y al candidato</p>";
        }else{
            $mensaje.="
			<div class='alert alert-warning alert-dismissible'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>!Pago Rechazado!</strong></div>";
            $mensaje.="<p>El proceso de contratación se ha interrumpido.<br>Vuelva a intentarlo</p>";
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
<?php echo $mensaje; ?>
		

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
                        <?php
							require('Modales.php');
							?>
                            </body>
                            </html>