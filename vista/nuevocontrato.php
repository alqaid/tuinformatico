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

if (!isset($_SESSION['eClave']) || isset($_SESSION['iClave'])) {
    header('Location: Error.php');
    exit;
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
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<!-- SITIO LIBRE PARA INCLUIR -->
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<br><br>
<h4>Ofertar un nuevo servicio</h4>
<div class="col "  ><div class="p-3 border bg-light">
<div id="formularioanimado">
	 <form  id="form1" method="POST" action="../controlador/insertar_servicio.php">
		 <div class="form-group">
			  <label for="empresa">Selecciona una empresa</label>
			  <select class="form-control" id="empresa" name="empresa">
					
			  </select>
		</div>
		<div class="form-group">
			<label for="asunto">Asunto:</label> 
			<input type="text" class="form-control" id="asunto" name="asunto" required>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción de la tarea a realizar:</label>
			<textarea   id="descripcion" class="form-control" rows="5" name="descripcion" required ></textarea>
		</div>
		<div class="form-group">
			<label for="fechainicio">Fecha Inicio Publicación:</label>
			<input type="date" id="fechainicio" name="fechapublicacion" value="2021-01-01">
		</div>
		<div class="form-group">
			<label for="fechafin">Fecha Fin Publicación:</label>
			<input type="date" id="fechafin" name="fechafinpublicacion" value="2021-01-01">
		</div>
		
		<div class="form-group">		
			<label for="salario">Salario:</label>
			<input type="number" id="salario" name="salario" min="1" max="10000" step="1" required>€
		</div>
		<div class="form-group">
			<button  type="submit" id="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>	
	</div>
	 
	<div id="caja_success" class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>!Aceptado!</strong> <spam id="respuestaok"><spam>
	</div>
	<div id="caja_warning" class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Atención!</strong> <spam id="respuestaerror"><spam>
	</div>
</div></div>
<br><br>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<!-- FIN SITIO LIBRE PARA INCLUIR -->
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
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
					
<script type="text/javascript" src="../vista/js/nuevocontrato.js"></script>						
                                                        </body>
                                                        </html>