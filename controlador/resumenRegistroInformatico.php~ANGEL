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
    header('Location: ../vista/Error.php');
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

<?php	
			echo "<!----conetando-->";
			require('../modelo/conexion_mysql.php');
			$E = $_POST["Email"];
			$c = $_POST["Contraseña"];
			$password_hash = password_hash($c, PASSWORD_DEFAULT);
			$N = $_POST["Nombre"];
			$DNI = $_POST["dni"];
			$T = $_POST["Telefono"];
			$Pais = $_POST["pais"];
			$M = $_POST["municipio"];
			$provincia = $_POST["provincia"];
			$CP = $_POST["cp"];
			$Dp = $_POST["descripcionP"];
			$DG = $_POST["descripcionG"];
			 $sql = "INSERT INTO informaticos (iCP, iDescripcion, iDescripcionCorta, iDNI, iEmail, iMunicipio, iNombre, iPais, iPass, iProvincia, iTelefono) 
						VALUES ('$CP','$DG','$Dp','$DNI','$E','$M','$N','$Pais','$password_hash','$provincia','$T')";
			if ($mysqli->query($sql) === TRUE) {
			  echo "Nuevo Registro Creado";
			} else {
			  echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
			$mysqli->close();
?>
<br>
Su cuenta <?php echo $_POST['Nombre'] ?> ya está registrada en tuinformatico.com <br>
Recuerde que su correo <?php echo $_POST['Email'] ?>  será utilizado como usuario para autenficarse <br><br>
Le recuerdo su información introducida: <br><br>

Nombre y apellidos: <?php echo $_POST['Nombre'] ?> <br>
DNI: <?php echo $_POST['dni'] ?> <br>
Telefono: <?php echo $_POST['Telefono'] ?> <br>
Municipio: <?php echo $_POST['municipio'] ?> <br>
Provincia: <?php echo $_POST['provincia'] ?> <br>
Código postal: <?php echo $_POST['cp'] ?> <br>
País: <?php echo $_POST['pais'] ?> <br><br>

Para salir pulse en terminar: <br>
<form action="../vista/index.php">
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
	require('../vista/pie.php');
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