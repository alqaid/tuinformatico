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
        <title>TU INFORMÁ?TICO - NUEVO CONTRATO</title>
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
			<?php
			$query = $conexPDO->prepare("SELECT * FROM empresas WHERE eClave='" . $_SESSION['eClave'] . "'");
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
			?>
			
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


            <FORM onSubmit="return validate()" ACTION="../controlador/resumenCambioE.php" METHOD="POST">
                Para realizar el registro debe rellenar la siguiente información sobre la Empresa: <br><br>
                <div class="grid-container">
				<div class="row">
                    <div class="col-sm">
                        <label for="N">Nombre de la empresa</label><br>
                        <input type="text" class="form-control" id="N" size="40" maxlength="64" value=<?php echo $result['eNombre']?> NAME="nombre" required /><br><br>
                        <label for="CIF">Código de Identificación Fiscal (CIF)</label><br>
                        <input title="Una Letra y 8 n´úmeros" class="form-control" type="text" id="CIF" size="40" maxlength="64" value=<?php echo $result['eCIF']?> pattern="[A-Z]{1}[0-9]{8}" NAME="cif" required /><br><br>
                        <label for="M">Municipio</label><br>
                        <input type="text" id="M" class="form-control" size="40" maxlength="64" value=<?php echo $result['eMunicipio']?> NAME="municipio" required /><br><br>
                        <label for="p">Provinvia</label><br>
                        <input type="text" id="p" class="form-control" size="40" maxlength="64" value=<?php echo $result['eProvincia']?> NAME="provincia" required /><br><br>
                        <label for="cp">Codigo postal</label><br>
                        <input type="text" id="cp" class="form-control" required pattern="[0-9]{5}" size="40" maxlength="5" value=<?php echo $result['eCP']?>  NAME="cp" required /><br><br>
                    </div>
                    <div class="col-sm">
						<label for="pa">Pais</label><br>
                        <input type="text" id="pa" class="form-control" size="40" maxlength="64" value=<?php echo $result['ePais']?> NAME="pais" required /><br><br>
						<label for="Nacimiento">Fecha de fundacion:</label><br>
                        <input type="date" class="form-control" value=<?php echo $result['eFundacion']?> id="Nacimiento" name="birthday"><br><br>
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" id="Email" size="40" maxlength="64" value=<?php echo $result['eEmail']?> NAME="correo" required /><br><br>
                        <label for="password">Contraseña</label><br>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Introduzca nueva contrasela para cambiarla o pon la actual" size="20" required /><br><br>
                        <label for="confirm_password">Repita su contrasea</label><br>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Repita su contraseña nueva para cambiarla o pon la actual" name="confirm_password" size="20" required/><br><br>
                        <br><br>
                        <input type="submit" class="btn btn-success" value="Continuar" /><br><br>
                    </div>
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