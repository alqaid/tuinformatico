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

if(isset($_SESSION['eClave']) || isset($_SESSION['iClave'])){
    header('Location: Error.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TU INFORM�?TICO - NUEVO CONTRATO</title>
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

<?php	
			echo "<!----conetando-->";
				require('../modelo/conexion_mysql.php');
			$cif = $_POST["cif"];
			$cp = $_POST["cp"];
			$email = $_POST["correo"];
			$municipio = $_POST["municipio"];
			$nombre = $_POST["nombre"];
			$pais = $_POST["pais"];
			$password = $_POST["password"];
			$password_hash = password_hash($password, PASSWORD_DEFAULT);
			$provincia = $_POST["provincia"];
			 $sql = "INSERT INTO empresas (eCIF, eCP, eEmail, eMunicipio, eNombre, ePais, ePass, eProvincia) 
						VALUES ('$cif','$cp','$email','$municipio','$nombre','$pais','$password_hash','$provincia')";
			if ($mysqli->query($sql) === TRUE) {
			  echo "Nuevo Registro Creado";
			} else {
			  echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
			$mysqli->close();
?>
<br>
La empresa <?php echo $_POST['nombre'] ?> ya está registrada en tuinformatico.com <br>
Recuerde que su correo <?php echo $_POST['correo'] ?>  será utilizado como usuario para autenficarse <br><br>
Le recuerdo su información introducida: <br><br>

CIF: <?php echo $_POST['cif'] ?> <br>
Municipio: <?php echo $_POST['municipio'] ?> <br>
Provincia: <?php echo $_POST['provincia'] ?> <br>
Código postal: <?php echo $_POST['cp'] ?> <br>
País: <?php echo $_POST['pais'] ?> <br><br>

Para salir pulse en terminar: <br>
<form action="index.php">
	<button type="submit" class="btn btn-success">Terminar</button>
</form>	

<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" -->
	<aside class=" col-3 "   > <!-- BANNER -->
		<h2>Compartenos en tus redes sociales<h2>
		<a href="https://twitter.com/?lang=es">
		<img   src="../vista/images/twitter.png" alt=""  width="100%" height="520px">
		</a>
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