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
						echo("Lamento informarle de que no se ha podido crear el registro, los motivos son los siguientes:<br><br>");
						echo "Error: " . $sql . "<br>" . $mysqli->error;
						echo("<br><br>Pero no se preocupe, puede volver a intentarlo cuantas veces quiera.<br><br>");
					}
					$mysqli->close();
?>