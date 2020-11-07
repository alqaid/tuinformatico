<?php
session_start();

// QUITAR CUANDO EXISTA AUTENTICACIÓN
$_SESSION['autenticado']  = 'autenticado';

if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']!='') {
	if (isset($_POST['empresa']) && $_POST['empresa'] && isset($_POST['asunto']) && $_POST['asunto']) {
		if (($_POST['salario']>=300)) {	 
			try{
				$conexPDO=new PDO("mysql:host=localhost;dbname=tuinformatico;charset=utf8","root","");
				$conexPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
				//----OK conexión --- PREPARAR SENTENCIA
				$sql='INSERT INTO servicios (seClaveEmpresa,sAsunto,sDescripcion,sSalario,sFechaPublicacion,sfechafinpublicacion) values (?,?,?,?,?,?)';
				$stmt=$conexPDO->prepare($sql);
				$stmt->execute(array($_POST['empresa'],$_POST['asunto'],$_POST['descripcion'],$_POST['salario'],$_POST['fechapublicacion'],$_POST['fechafinpublicacion']));
				//-----cerrar todo 
				$stmt=null;
				$conexPDO=null;
				//echo 'Insercción Correcta';
			
				echo '{"success":"1","respuesta":"Introducido correctamente: ' .  $_POST['asunto'] .'"}';
			}catch(Exception $e){
				die('Error:'.$e->GetMessage());
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