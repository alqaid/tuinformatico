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
						window.location.href="exito.php";
						</script>';
					} else {
						//echo "Error: " . $sql . "<br>" . $mysqli->error;
						echo("Lamento informarle de que no se ha podido crear el registro<br><br>");
						echo ("Seguramente sea porque el correo que ha empleado ya está registrado, pruebe a poner un correo diferente por favor.<br><br>");
					}
					$mysqli->close();
?>