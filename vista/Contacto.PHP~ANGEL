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
		<h2>Compartenos en tus redes sociales<h2>
		<a href="https://twitter.com/?lang=es">
		<img   src="images/twitter.png" alt=""  width="100%" height="520px">
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