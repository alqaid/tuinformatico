<?php
session_start();

// QUITAR CUANDO EXISTA AUTENTICACIÓN
$_SESSION['autenticado']  = 'sssi';

if(isset($_SESSION['autenticado'])) {
	if (isset($_POST["empresa"]) && isset($_POST["param2"]) ) {	
		$grabar='SI';
		$sql='INSERT INTO servicios (seClaveEmpresa,sAsunto,sDescripcion,sFechaPublicacion,sFechaFinPublicacion,sSalario) values (';
		
		if(is_numeric($_POST["empresa"])){
			$sql += $_POST["empresa"];
		}else{
			$grabar='NO';
		}
		
		if(is_numeric($_POST["empresa"])){
			$sql += $_POST["empresa"];
		}else{
			$grabar='NO';
		}
		
		if(is_numeric($_POST["empresa"])){
			$sql += $_POST["empresa"];
		}else{
			$grabar='NO';
		}
		
		if(is_numeric($_POST["empresa"])){
			$sql += $_POST["empresa"];
		}else{
			$grabar='NO';
		}
		
		if(is_numeric($_POST["empresa"])){
			$sql += $_POST["empresa"];
		}else{
			$grabar='NO';
		}
		
	}
}
?>