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
                    <DIV ALIGN=center>
                        <div class="modal fade" id="identificacion">

                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Identificarse</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form method="post"
                                            <label for="e">Email:</label><br>
                                            <input type="text" id="e" name="email"><br>
                                            <label for="p">Contraseña:</label><br>
                                            <input type="password" id="p" name="contraseña"><br>
                                            <a href="https://www.w3schools.com">¿Olvido su contraseña?</a><br><br>
                                            <label><input type="checkbox"> Recordadme</label><br>
                                            <button type="submit" class="btn btn-success">Iniciar sesion</button>
                                        </form>
                                        <a href="" data-dismiss="modal" data-toggle="modal" data-target="#registro">¡Registrate!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </DIV>
					
					<!-- The Modal -->
                    <DIV ALIGN=center>
                        <div class="modal fade" id="registro">

                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">¿Usted es?</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="registrarEmpresa.php">
											<button type="submit" class="btn btn-success">Empresa</button>
										</form>	<br>
										<label>o</label><br>
										<form action="RegistroIformatico.html">
											<button type="submit" class="btn btn-success">Informatico</button>
										</form>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </DIV>
                            </body>
                            </html>