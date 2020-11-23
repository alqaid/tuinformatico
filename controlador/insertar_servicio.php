<?php


require('funciones.php');

session_start();

// QUITAR CUANDO EXISTA AUTENTICACIÓN
$_SESSION['autenticado']  = 'autenticado';




if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']!='') {
	if (isset($_POST['empresa']) && $_POST['empresa'] && isset($_POST['asunto']) && $_POST['asunto']  && isset($_POST['fechapublicacion'])  && isset($_POST['fechafinpublicacion']) ) {
		if (($_POST['salario']>=300)) {	
			
			// fvalidarFecha  devuelve true o false, está incluida en funciones.php
			if( fvalidarFecha($_POST['fechafinpublicacion'])){ 
			if( fvalidarFecha($_POST['fechapublicacion'])){  
			if($_POST['fechafinpublicacion']>$_POST['fechapublicacion']){
	 			try{
						 /*	$connection=new PDO("mysql:host=localhost;dbname=tuinformatico;charset=utf8","root","");
							$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						 	*/	
						 	require('../modelo/config.php');  // devuelve $connection=new PDO ()
							
							//----OK conexión --- PREPARAR SENTENCIA
							$sql='INSERT INTO servicios (seClaveEmpresa,sAsunto,sDescripcion,sSalario,sFechaPublicacion,sfechafinpublicacion) values (?,?,?,?,?,?)';
							$stmt=$conexPDO->prepare($sql);
							$res = $stmt->execute(array($_POST['empresa'],$_POST['asunto'],$_POST['descripcion'],$_POST['salario'],$_POST['fechapublicacion'],$_POST['fechafinpublicacion']));
							//-----cerrar todo 
							if (!$res){
								echo '{"success":"0","respuesta":"slq no válida"}';
							}
								
							$stmt=null;
							$conexPDO=null;
							//echo 'Insercción Correcta';
						
							echo '{"success":"1","respuesta":"Introducido correctamente: ' .  $_POST['asunto'] .'"}';
						}catch(Exception $e){
							die('Error:'.$e->GetMessage());
					} 	
			}else {
				 echo '{"success":"0","respuesta":"fecha inicio publicacion debe ser inferior a fecha fin publicación"}';
			}
			}else {
				 echo '{"success":"0","respuesta":"fecha inicio publicacion no válida"}';
			}
			}else {
				 echo '{"success":"0","respuesta":"fecha fin publicacion no válida"}';
			}
		}else{
			 echo '{"success":"0","respuesta":"Salario debe ser al menos de 300€"}';
		}
	}else{
		 //echo "Campos requeridos";
		 echo '{"success":"0","respuesta":"Campos requeridos"}';
	}
}else{
		//$statusCode='500';
		//header('Location: ../index.php');
		//echo "No autenticado";
		echo '{"success":"0","respuesta":"No autenticado"}';
	}

 
?>