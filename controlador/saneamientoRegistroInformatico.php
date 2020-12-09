<?php
			$cif = $cp = $email = $municipio = $nombre = $F = $pais = $password = $password_hash = $provincia = "";
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					//Saneamos los datos
					$E = limpiarCaracteres($_POST["Email"]);
					$c = limpiarCaracteres($_POST["Contraseña"]);
					$password_hash = password_hash($c, PASSWORD_DEFAULT);
					$N = limpiarCaracteres($_POST["Nombre"]);
					$A = limpiarCaracteres($_POST["Apellido"]);
					$F = limpiarCaracteres($_POST["birthday"]);
					$DNI = limpiarCaracteres($_POST["dni"]);
					$T = limpiarCaracteres($_POST["Telefono"]);
					$Pais = limpiarCaracteres($_POST["pais"]);
					$M = limpiarCaracteres($_POST["municipio"]);
					$provincia = limpiarCaracteres($_POST["provincia"]);
					$CP = limpiarCaracteres($_POST["cp"]);
					$Dp = limpiarCaracteres($_POST["descripcionP"]);
					$DG = limpiarCaracteres($_POST["descripcionG"]);
					//Insertamos el registro en la Base de Datos si no existe ya
					require('../modelo/crearRegistroInformatico.php');
					
				}
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