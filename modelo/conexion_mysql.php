<?php
 
try {
	$mysqli = @new mysqli('localhost',  'root',  '',  'tuinformatico');
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}else{
		 
	}
	
   
} catch (Exception $e) {
  die('Error de conexión: ' . $e->errorMessage());
}
?>
