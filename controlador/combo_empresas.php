<?php
session_start();

// QUITAR CUANDO EXISTA AUTENTICACIÓN
$_SESSION['autenticado']  = 'sssi';

if(isset($_SESSION['autenticado'])) {
	
	$mysqli = @new mysqli('localhost', 'root', '', 'tuinformatico');
	$mysqli->set_charset("utf8");
	
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}else{
		echo "<!----conexion ok -->";
	}
	
	//require('../modelo/config.php');  
$consultaSQL= "select eClave,eNombre from empresas order by eNombre asc";
		 
if ($resultado = $mysqli->query($consultaSQL)) {
while($fila = $resultado->fetch_assoc()){

//BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
     
	echo  '<option value="'.  $fila["eClave"] . '">' . $fila["eNombre"] . '</option>';
 
//   FIN BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
}}
$mysqli->close();

	
}
	
?>