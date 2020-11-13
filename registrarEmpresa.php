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


<script>
	function validate(){

        var a = document.getElementById("password").value;
	    var b = document.getElementById("confirm_password").value;
	    if (a!=b) {
		    alert("Las contraseñas deben ser iguales");
			return false;
        }
    }

       </script>


<FORM onSubmit="return validate()" ACTION="resumenRegistroEmpresa.php" METHOD="POST">
Para realizar el registro debe rellenar la siguiente información sobre la Empresa: <br><br>
<div class="grid-container">
	<div>
		<label for="N">Nombre de la empresa</label><br>
		<input type="text" id="N" size="40" maxlength="64" placeholder="Introduzca el nombre de empresa" NAME="nombre" required/><br><br>
		<label for="CIF">Código de Identificación Fiscal (CIF)</label><br>
		<input type="text" id="CIF" size="40" maxlength="64" placeholder="Introduzca su CIF" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" NAME="cif" required/><br><br>
		<label for="M">Municipio</label><br>
		<input type="text" id="M" size="40" maxlength="64" placeholder="Introduzca su municipio" NAME="municipio" required/><br><br>
		<label for="p">Provinvia</label><br>
		<input type="text" id="p" size="40" maxlength="64" placeholder="Introduzca su provincia" NAME="provincia" required/><br><br>
		<label for="cp">Codigo postal</label><br>
		<input type="text" id="cp" required pattern="[0-9]{5}" size="40" maxlength="5" placeholder="Introduzca su codigo postal"  NAME="cp" required/><br><br>
		<label for="pa">Pais</label><br>
		<input type="text" id="pa" size="40" maxlength="64" placeholder="Introduzca el pais" NAME="pais" required/><br><br>
	</div>
	<div>
		<label for="E">Email</label><br>
		<input type="email" id="E" size="40" maxlength="64" placeholder="Introduzca el email" NAME="correo" required/><br><br>
		<label for="password">Contraseña</label><br>
		<input type="password" id="password" name="password" placeholder="Introduzca su contraseña" size="20" required/><br><br>
		<label for="confirm_password">Repita su contraseña</label><br>
		<input type="password" id="confirm_password" placeholder="Repita su contraseña" name="confirm_password" size="20" required/><br><br>
		<br><br>
		<input type="submit" class="btn btn-success" value="Continuar" /><br><br>
	</div>
</div>
</FORM>


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