<?php
//Conectamos a la Base de Datos
					echo "<!----conetando-->";
					require('../modelo/conexion_mysql.php');
					//Intentamos meterlo en la base de datos
					$sql = "UPDATE informaticos SET iCP='$CP', iPass='$password_hash', iEmail='$E', iNombre='$N', iApellidos='$A', iNacimiento='$F', iDNI='$DNI', iTelefono='$T', iPais='$Pais', iMunicipio='$M', iProvincia='$provincia', iDescripcionCorta='$Dp', iDescripcion='$DG' WHERE iClave='".$_SESSION['iClave']."'";
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