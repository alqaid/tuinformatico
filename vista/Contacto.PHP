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
<?php
	// RESPUESTA DEL ENVÍO DEL CORREO.
	// SI EXISTE LA VARIABLE GET[MENSAJE] MOSTRAMOS UN ALERT   
	if (isset($_GET["mensaje"]) &&  !empty($_GET["mensaje"])) {		
		echo "<script type='text/javascript'>alert('" . $_GET["mensaje"] . "'); window.location.href='Contacto.PHP'; </script>";
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
<!-- SITIO LIBRE PARA INCLUIR -->


<h2 text-align="center">Contacta con nosotros</h2>
<br>
<br>
 <div class="card col "   >
      <h4 class="card-title ">Ángel Francisco Alcaide Romero</h4>
	  <h6 class="card-title ">Correo Electrónico</h6>
      <p class="card-text">tuinformatico_jefe1@gmail.com</p>
	  <h6 class="card-title ">Teléfono</h6>
	  <p class="card-text">800000001</p>
  </div>
  <br>
  <div class="card col "   >
      <h4 class="card-title ">José Ángel González Martínez</h4>
      <h6 class="card-title ">Correo Electrónico</h6>
      <p class="card-text">tuinformatico_jefe2@gmail.com</p>
	  <h6 class="card-title ">Teléfono</h6>
	  <p class="card-text">800000002</p>
  </div>
  <br>
  <div class="card col "   >
      <h4 class="card-title ">Damián Escobar Blázquez</h4>
      <h6 class="card-title ">Correo Electrónico</h6>
      <p class="card-text">tuinformatico_jefe3@gmail.com</p>
	  <h6 class="card-title ">Teléfono</h6>
	  <p class="card-text">800000003</p>
  </div>
  <br>
  
  
  <div class="p-3 border bg-light">
  <h2>Contactar</h2>
  <form class="form-horizontal" action="../controlador/contacto.php" method="POST">
   <div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre (<span style="color:red;">*</span>):</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="nombre" placeholder="Indique su nombre o razón social" name="nombre" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email (<span style="color:red;">*</span>):</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Su eMail" name="email" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefono" placeholder="Su teléfono" name="telefono" pattern="[0-9]{9}" title="9 dígitos">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="asunto">Asunto (<span style="color:red;">*</span>):</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="asunto" placeholder="Indique un asunto breve" name="asunto" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
      <div class="col-sm-10">
		<textarea rows="4" cols="50" name="descripcion" class="form-control" placeholder="Indique una descripción detallada" required></textarea>	  
         
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="politica" required  value="Acepto">(<span style="color:red;">*</span>) Acepta al política de privacidad de datos</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </form>
</div>
   <br> <br>

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