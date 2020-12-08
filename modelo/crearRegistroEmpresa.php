<?php
//Conectamos a la Base de Datos
					echo "<!----conetando-->";
					require('../modelo/conexion_mysql.php');
					//Intentamos meterlo en la base de datos
					$sql = "INSERT INTO empresas (eCIF, eCP, eEmail, eMunicipio, eNombre, ePais, ePass, eProvincia, eFundacion) 
						VALUES ('$cif','$cp','$email','$municipio','$nombre','$pais','$password_hash','$provincia', '$F')";
					//Devolvemos una retroalimentación
					if ($mysqli->query($sql) === TRUE) {
						echo'<script type="text/javascript">
						alert("Registro Creado");
						window.location.href="index.php";
						</script>';
					} else {
						//echo "Error: " . $sql . "<br>" . $mysqli->error;
						echo("Lamento informarle de que no se ha podido crear el registro<br><br>");
						echo ("Seguramente sea porque el correo que ha empleado ya está registrado, pruebe a poner un correo diferente por favor.<br><br>");
					}
					$mysqli->close();
?>