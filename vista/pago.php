<?php
session_start();
require('../controlador/Acontrolador.php');
$mensaje="";
$pago="";
if (isset($_SESSION['eClave'])) {

	if ((isset($_GET['iClave'])) && (isset($_GET['sClave']))) { 

		$ARRAY = contr_listar('contratarinformatico',$_GET['iClave'],$_GET['sClave']);	
        //iNombre,iTelefono,iEmail,iDescripcionCorta,sSalario,sClave,iClave
      
        if (isset($ARRAY)){
           // $mensaje.='lanzado';
            foreach ($ARRAY as $REGISTRO ){           
					$pago='OK';  
					$iClave=$REGISTRO['iClave'];
                    $sClave=$REGISTRO['sClave'];
					$_SESSION['clavePAYPAL']  =  $sClave;

					$concepto='Pago Comisión Contratación: ' . $REGISTRO['iNombre'] . ' con DNI: ' .  $REGISTRO['iDNI']; 
					
					$mensaje="<h6>" .  $_SESSION["eNombre"] . "</h6>";
					$mensaje.="<p>Se va a proceder a realizar la contratación con ";
					$mensaje.=$REGISTRO['iNombre'] . ' con DNI: ' .  $REGISTRO['iDNI'] . "</p>"; 
					$mensaje.="<p>El importe de dicha contratación es " . $REGISTRO['sSalario'] . '€</p>';
					$importe=$REGISTRO['sSalario'] * 0.1;   
					$mensaje.="<p>Deberá abonar el 10% como comisión para proseguir: <b>" . $importe . ' € </b>';
                }
        }

	}

}

if ($pago==''){

	header('Location: ../vista/index.php');

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
		<form name="formTPV" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
			
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="business" value="sb-nl7tc3911639@business.example.com">
			<input type="hidden" name="item_name_1" value="<?php echo $concepto; ?>">
			<input type="hidden" name="item_number_1" value="<?php echo $sClave; ?>">
			<input type="hidden" name="amount_1" value="<?php echo $importe; ?>">
			<input type="hidden" name="quantity_1" value="1">
			<!--<input type="hidden" name="item_name_2" value="Articulo 2222">
			<input type="hidden" name="item_number_2" value="2222">
			<input type="hidden" name="amount_2" value="22.22">
			<input type="hidden" name="quantity_2" value="12">	-->			
			<input type="hidden" name="return" value="https://tuinformatico.com/vista/pagoconexito.php?pagoexitoso=<?php echo $sClave; ?>">
			<input type="hidden" name="cancel_return" value="https://tuinformatico.com/vista/pagocancelado.php">
			<input type="hidden" name="no_note" value="1">
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="first_name" value="TUINFORMATICO.COM">
			<input type="hidden" name="last_name" value="Angel Alcaide">
			<input type="hidden" name="address1" value="Avda. España Nº 1">
			<input type="hidden" name="city" value="Albacete">
			<input type="hidden" name="zip" value="02005">
			<input type="hidden" name="lc" value="es">
			<input type="hidden" name="tax_1" value="0">
			<!--<input type="hidden" name="tax_2" value="4">-->
			<input type="hidden" name="country" value="ES">
			<input type="image" src="../vista/images/paypal.png" name="submit" alt="Pagos con PayPal: Rápido, gratis y seguro">
		</form>

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