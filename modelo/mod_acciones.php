<?php
 
function conexion(){

	try {
		$mysqli = @new mysqli('localhost',  'root',  '',  'tuinformatico');
		$mysqli->set_charset("utf8");
		if ($mysqli->connect_errno) {
			die('Connect Error: ' . $mysqli->connect_errno);
		}else{
			 
		}
		return $mysqli;
	   
	} catch (Exception $e) {
	  die('Error de conexión: ' . $e->errorMessage());
	}
} 

function insert_tabla_candidatos($claveServicio,$claveInformatico){
   
	$mensaje='-msg-001.-';
 
			 $sql = "INSERT INTO  candidatos (csClaveServicio ,ciClaveInformaticos  ) VALUES ($claveServicio,$claveInformatico)";
			 
			$mysqli=conexion();
			 
			if ($mysqli->query($sql) === TRUE) {
			  $mensaje ="OK";
			} else {
			  $mensaje .="Error al Insertar";
			}
			$mysqli->close();
	
	 return $mensaje;
	 
}