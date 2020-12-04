<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['eClave']) && isset($_COOKIE['eClave'])) {
    $_SESSION['eClave'] = $_COOKIE['eClave'];
    $_SESSION['eNombre'] = $_COOKIE['eNombre'];
} else if (!isset($_SESSION['iClave']) && isset($_COOKIE['iClave'])) {
    $_SESSION['iClave'] = $_COOKIE['iClave'];
    $_SESSION['iNombre'] = $_COOKIE['iNombre'];
}
?>

<!DOCTYPE html>
<?php

	require('../controlador/cookieVisitas.php');
 
?>
<html lang="en">
<head>
<title>TU INFORM√ÅTICO - NUEVO CONTRATO</title>
<?php
	require('head.php');
?>
</head>
<body>
<?php
	require('cabecera.php');
?>
<main class=" col-9 "   >
<!-- SITIO LIBRE PARA INCLUIR -->


<div id="resultadobusqueda">
	
</div>

                  


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
			<h6>Ronaldo no para de comer el pollo m·s rico del mundo, descubre las mejores ofertas para el pollo m·s crujiente</h6>
			<img src="images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el cÛdigo cr7 puedes conseguir un 50% de descuento en nuestro nuevo men˙: CrujienteR7. °No esperes m·s!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">°Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
	</aside> <!-- FIN BANNER -->
	<aside class=" col-3 "   >
	<br><br>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje; ?></a><br><br>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje2; ?></a>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje3; ?></a><br><br>
		</aside>
 <?php
	require('pie.php');
	//require('../controlador/pieConCookieVisitas.php');
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

<script>
  addEventListener('load',inicio,false);
 
   function inicio()
  {
	// --------- --------- --------- --------- 
	// JAVASCRIPT EVENTOS LOAD
    // --------- --------- --------- --------- 
	
      
	//BUSQUEDA INFORM√?TICOS PARA EL COMBO
	
	 
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("resultadobusqueda").innerHTML = this.responseText;
	  }
	};
	xmlhttp.open("POST", "../controlador/buscar_informaticos.php", true);
	xmlhttp.send();
	

   
	
}
 
 
</script> 

<script>	
	document.getElementById("menu_cabecera_home").className  = "nuestromenus_activado";				
</script>
						
                            </body>
                            </html>