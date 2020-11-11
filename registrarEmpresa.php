<!DOCTYPE html>
<?php
	require('cookie.php');
?>
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

<?php echo  $mensaje;?>
<FORM onSubmit="return validate()" ACTION="resumenRegistroEmpresa.php" METHOD="POST">
Para realizar el registro debe rellenar la siguiente información sobre la Empresa: <br><br>
<div class="grid-container">
	<div>
		Nombre de la empresa:<br>
		<input type="text" size="40" maxlength="64" NAME="nombre" required/><br><br>
		Código de Identificación Fiscal (CIF) de la empresa:<br>
		<input type="number" size="40" maxlength="64" NAME="cif" required/><br><br>
		Municipio:<br>
		<input type="text" size="40" maxlength="64" NAME="municipio" required/><br><br>
		Provincia:<br>
		<input type="text" size="40" maxlength="64" NAME="provincia" required/><br><br>
		Código Postal:<br>
		<input type="number" size="40" maxlength="5"  NAME="cp" required/><br><br>
		País:<br>
		<input type="text" size="40" maxlength="64" NAME="pais" required/><br><br>
	</div>
	<div>
		Correo electrónico:<br>
		<input type="email" size="40" maxlength="64" NAME="correo" required/><br><br>
		Por favor, introduzca su contraseña<br>
		<input type="password" id="password" name="password" size="20" required/><br><br>
		Confirme su contraseña<br>
		<input type="password" id="confirm_password" placeholder="Repita su contraseña" name="confirm_password" size="20" required/><br><br>
		<br><br>
		<input type="submit" class="btn btn-success" value="Continuar" /><br><br>
		<input type="reset" class="btn btn-success" value="Borrar" />
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