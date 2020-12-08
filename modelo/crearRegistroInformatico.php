<?php
//Conectamos a la Base de Datos
					echo "<!----conetando-->";
					require('../modelo/conexion_mysql.php');
					//Intentamos meterlo en la base de datos
					$sql = "INSERT INTO informaticos (iCP, iDescripcion, iDescripcionCorta, iDNI, iEmail, iMunicipio, iNombre, iPais, iPass, iProvincia, iTelefono, iNacimiento, iApellidos) 
						VALUES ('$CP','$DG','$Dp','$DNI','$E','$M','$N','$Pais','$password_hash','$provincia','$T', '$F', '$A')";
					//Devolvemos una retroalimentación
					if ($mysqli->query($sql) === TRUE) {
						echo'<script type="text/javascript">
						alert("Registro Creado");
						window.location.href="index.php";
						</script>';
					} else {
						echo("Lamento informarle de que no se ha podido crear el registro, los motivos son los siguientes:<br><br>");
						echo "Error: " . $sql . "<br>" . $mysqli->error;
						echo("<br><br>Pero no se preocupe, puede volver a intentarlo cuantas veces quiera.<br><br>");
					}
					$mysqli->close();
?>