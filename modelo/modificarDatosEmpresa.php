<?php
//Conectamos a la Base de Datos
					echo "<!----conetando-->";
					require('../modelo/conexion_mysql.php');
					//Intentamos meterlo en la base de datos
					$sql = "UPDATE empresas SET eCP='$cp', ePass='$password_hash', eEmail='$email', eNombre='$nombre', eFundacion='$F', eCIF='$cif', ePais='$pais', eMunicipio='$municipio', eProvincia='$provincia' WHERE eClave='".$_SESSION['eClave']."'";
					//Devolvemos una retroalimentación
					if ($mysqli->query($sql) === TRUE) {
						echo'<script type="text/javascript">
						alert("Usuario actualizado");
						window.location.href="index.php";
						</script>';
					} else {
						//echo "Error: " . $sql . "<br>" . $mysqli->error;
						echo("Lamento informarle de que no se ha podido modificar los datos<br><br>");
						echo("<br><br>Pero no se preocupe, puede volver a intentarlo cuantas veces quiera.<br><br>");
					}
					$mysqli->close();
?>