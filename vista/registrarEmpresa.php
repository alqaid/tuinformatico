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

if (isset($_SESSION['eClave']) || isset($_SESSION['iClave'])) {
    header('Location: Error.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TU INFORMÁTICO - NUEVO CONTRATO</title>
        <?php
        require('../vista/head.php');
        ?>
    </head>
    <body>
        <?php
        require('../vista/cabecera.php');
        ?>
        <main class=" col-9 "   >
            <!-- SITIO LIBRE PARA INCLUIR -->


            <script>
                function validate() {

                    var a = document.getElementById("password").value;
                    var b = document.getElementById("confirm_password").value;
                    if (a != b) {
                        alert("Las contraseñas deben ser iguales");
                        return false;
                    }
                }

            </script>


            <FORM onSubmit="return validate()" ACTION="../controlador/resumenRegistroEmpresa.php" METHOD="POST">
                Para realizar el registro debe rellenar la siguiente información sobre la Empresa: <br><br>
                <div class="grid-container">
				<div class="row">
                    <div class="col-sm">
                        <label for="N">Nombre de la empresa</label><br>
                        <input type="text" class="form-control" id="N" size="40" maxlength="64" placeholder="Introduzca el nombre de empresa" NAME="nombre" required /><br><br>
                        <label for="CIF">Código de Identificación Fiscal (CIF)</label><br>
                        <input title="Una Letra y 8 números" class="form-control" type="text" id="CIF" size="40" maxlength="64" placeholder="Introduzca su CIF" pattern="[A-Z]{1}[0-9]{8}" NAME="cif" required /><br><br>
                        <label for="M">Municipio</label><br>
                        <input type="text" id="M" class="form-control" size="40" maxlength="64" placeholder="Introduzca su municipio" NAME="municipio" required /><br><br>
                        <label for="p">Provinvia</label><br>
                        <input type="text" id="p" class="form-control" size="40" maxlength="64" placeholder="Introduzca su provincia" NAME="provincia" required /><br><br>
                        <label for="cp">Codigo postal</label><br>
                        <input type="text" id="cp" class="form-control" required pattern="[0-9]{5}" size="40" maxlength="5" placeholder="Introduzca su codigo postal"  NAME="cp" required /><br><br>
                    </div>
                    <div class="col-sm">
						<label for="pa">Pais</label><br>
                        <input type="text" id="pa" class="form-control" size="40" maxlength="64" placeholder="Introduzca el pais" NAME="pais" required /><br><br>
						<label for="Nacimiento">Fecha de fundacion:</label><br>
                        <input type="date" class="form-control" id="Nacimiento" name="birthday"><br><br>
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" id="Email" size="40" maxlength="64" placeholder="Introduzca el email" NAME="correo" required /><br><br>
                        <label for="password">Contraseña</label><br>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Introduzca su contraseña" size="20" required /><br><br>
                        <label for="confirm_password">Repita su contraseña</label><br>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Repita su contraseña" name="confirm_password" size="20" required/><br><br>
                        <br><br>
                        <input type="submit" class="btn btn-success" value="Continuar" /><br><br>
                    </div>
					</div>
                </div>
            </FORM>


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
                        require('../vista/modalIdentificarse.php');
                        ?>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="registro">
                        <?php
                        require('../vista/modalRegistro.php');
                        ?>
                    </div>
                    </body>
                    </html>