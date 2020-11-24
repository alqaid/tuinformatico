<?php
$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->setIndentString('	'); 
$xml->startDocument('1.0', 'UTF-8');

// CABECERA ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  
$xml->startElement('servicios'); //elemento servicios

$mensaje='ningun servicio con esa clave';
$clave=0;
$devolucion=false;
if (isset($_GET['clave'])){ 	
	if(is_numeric($_GET['clave'])) {
		$clave=$_GET['clave'];
		
	try{

		require('../modelo/conexion_mysql.php');  // devuelve $mysqli
	
		$consultaSQL="SELECT eNombre,sAsunto,sDescripcion,sFechaPublicacion,sFechaFinPublicacion,sSalario from empresas,servicios where eClave=seClaveEmpresa and sClave=$clave";
				
			
		if ($resultado = $mysqli->query($consultaSQL)) {
		while($fila = $resultado->fetch_assoc()){
			$eNombre='';
			$sAsunto='';
			$sDescripcion='';
			$sFechaPublicacion='';
			$sFechaFinPublicacion='';
			$sSalario='';
			
			if (!($fila["eNombre"] == 'null')){ $eNombre=$fila["eNombre"];}
			if (!($fila["sAsunto"] == 'null')) $sAsunto=$fila["sAsunto"];
			if (!($fila["sDescripcion"] == 'null')) $sDescripcion=$fila["sDescripcion"];
			if (!($fila["sFechaPublicacion"] == 'null')){ 
			    $date = date_create($fila["sFechaPublicacion"]);
				$sFechaPublicacion=date_format($date, 'd-m-Y');			
				}
			if (!($fila["sFechaFinPublicacion"] == 'null')){ 
			    $date = date_create($fila["sFechaFinPublicacion"]);
				$sFechaFinPublicacion=date_format($date, 'd-m-Y');			
				}
			if (!($fila["sSalario"] == 'null')) $sSalario=$fila["sSalario"];
			
			//$candidatos=f_numero_candidatos($clave);
				$candidatos=0;
				$consultaSQL2="SELECT count(csClaveServicio) FROM candidatos where csClaveServicio=$clave";
				if ($resultado = $mysqli->query($consultaSQL2)) {
				/* obtener el array de objetos */
					while ($fila = $resultado->fetch_row()) {
						$candidatos= $fila[0];
					}
					/* liberar el conjunto de resultados */
				$resultado->close();
				}


			
				$xml->startElement("empresa"); 
				 	$xml->writeElement('nombre_empresa',  $eNombre);
					$xml->writeElement('asunto',  $sAsunto); 
					$xml->writeElement('descripcion',  $sDescripcion); 
					$xml->writeElement('fecha_inicio',  $sFechaPublicacion); 
					$xml->writeElement('fecha_fin',  $sFechaFinPublicacion); 
					$xml->writeElement('salario',  $sSalario); 
					$xml->writeElement('candidatos',  $candidatos); 
				$xml->endElement();
				$devolucion=true;
				
				}
		} 
		$mysqli->close();
		$resultado=null;
		$mysqli=null;
	}catch(Exception $e){
		die('Error:'.$e->GetMessage());
	}
}else{$mensaje='clave formato no válido';}
}else{$mensaje='No existe clave';}

if (!$devolucion){
$xml->startElement("empresa"); 
 	$xml->writeElement('nombre_empresa',$mensaje);
	$xml->writeElement('asunto', '- -');
	$xml->writeElement('descripcion', '- -');
	$xml->writeElement('fecha_inicio', '- -');
	$xml->writeElement('fecha_fin', '- -');
	$xml->writeElement('salario', '- -');
	$xml->writeElement('candidatos',0);
$xml->endElement();
}
	 
$xml->endElement(); //fin elemento servicios
// PIE ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  ---------- 

$content = $xml->outputMemory();
ob_end_clean();
ob_start();
header('Content-Type: application/xml; charset=UTF-8');
header('Content-Encoding: UTF-8');
header("Content-Disposition: attachment;filename=ejemplo.xml");
header('Expires: 0');
header('Pragma: cache');
header('Cache-Control: private');
echo $content; 

?>
