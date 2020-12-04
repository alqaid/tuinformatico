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
			$E = limpiarCaracteres($_POST["Email"]);
			$c = limpiarCaracteres($_POST["Contraseña"]);
			$password_hash = password_hash($c, PASSWORD_DEFAULT);
			$N = limpiarCaracteres($_POST["Nombre"]);
			$A = limpiarCaracteres($_POST["Apellido"]);
			$F = $_POST["birthday"];
			$DNI = limpiarCaracteres($_POST["dni"]);
			$T = limpiarCaracteres($_POST["Telefono"]);
			$Pais = limpiarCaracteres($_POST["pais"]);
			$M = limpiarCaracteres($_POST["municipio"]);
			$provincia = limpiarCaracteres($_POST["provincia"]);
			$CP = limpiarCaracteres($_POST["cp"]);
			$Dp = limpiarCaracteres($_POST["descripcionP"]);
			$DG = limpiarCaracteres($_POST["descripcionG"]);
			 $sql = "INSERT INTO informaticos (iCP, iDescripcion, iDescripcionCorta, iDNI, iEmail, iMunicipio, iNombre, iPais, iPass, iProvincia, iTelefono, iNacimiento, iApellidos) 
						VALUES ('$CP','$DG','$Dp','$DNI','$E','$M','$N','$Pais','$password_hash','$provincia','$T', '$F', '$A')";
			if ($mysqli->query($sql) === TRUE) {
			  echo "Nuevo Registro Creado";
			} else {
			  echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
			$mysqli->close();
			
//Para prevenir inyecciones de codigo html o javascript
function limpiarCaracteres($string){
    $respuesta='';
    $respuesta=strip_tags($string);
    $respuesta=trim($respuesta);
    $respuesta=stripcslashes($respuesta);
    $respuesta=htmlspecialchars($respuesta);
    $respuesta=htmlentities($respuesta);
    return $respuesta;
}
?>
<br>
Su cuenta <?php echo $_POST['Nombre'] ?> ya está registrada en tuinformatico.com <br>
Recuerde que su correo <?php echo $_POST['Email'] ?>  será utilizado como usuario para autenficarse <br><br>
Le recuerdo su información introducida: <br><br>

Nombre: <?php echo $_POST['Nombre'] ?> <br>
Apellidos: <?php echo $_POST['Apellido'] ?> <br>
Nacimiento: <?php echo $_POST['birthday'] ?> <br>
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
		<h2>Compartenos en tus redes sociales<h2><br>
		<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
		<img   src="../vista/images/logo_facebook.png" alt=""  width="75px" height="75px">
		</a>
		<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
		<img   src="../vista/images/logo_twitter.jpg" alt=""  width="75px" height="75px">
		</a>
		<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
		<img   src="../vista/images/logo_whatsapp.png" alt=""  width="75px" height="75px">
		</a><br><br><br>
			<img src="../vista/images/PublicidadRonaldo.jpg" width="100%" height="50%" usemap="#kfc">
			<h6>Ronaldo no para de comer el pollo más rico del mundo, descubre las mejores ofertas para el pollo más crujiente</h6>
			<img src="../vista/images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el código cr7 puedes conseguir un 50% de descuento en nuestro nuevo menú: CrujienteR7. ¡No esperes más!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">¡Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
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