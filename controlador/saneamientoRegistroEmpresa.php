<?php
			$cif = $cp = $email = $municipio = $nombre = $F = $pais = $password = $password_hash = $provincia = "";
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					//Saneamos los datos
					$cif = limpiarCaracteres($_POST["cif"]);
					$cp = limpiarCaracteres($_POST["cp"]);
					$email = limpiarCaracteres($_POST["correo"]);
					$municipio = limpiarCaracteres($_POST["municipio"]);
					$nombre = limpiarCaracteres($_POST["nombre"]);
					$F = limpiarCaracteres($_POST["birthday"]);
					$pais = limpiarCaracteres($_POST["pais"]);
					$password = limpiarCaracteres($_POST["password"]);
					$password_hash = password_hash($password, PASSWORD_DEFAULT);
					$provincia = limpiarCaracteres($_POST["provincia"]);
					//Insertamos el registro en la Base de Datos si no existe ya
					require('../modelo/crearRegistroEmpresa.php');
					
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