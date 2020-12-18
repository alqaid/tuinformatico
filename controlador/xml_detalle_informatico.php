<?php
$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->setIndentString('	'); 
$xml->startDocument('1.0', 'UTF-8');

// CABECERA ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  
$xml->startElement('servicios'); //elemento servicios

$mensaje='ningun profesional con esa clave';
$clave=0;
$devolucion=false;
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_GET['clave']) && isset($_SESSION['eClave']) ){ 	
	if(is_numeric($_GET['clave'])) {
		$clave=$_GET['clave'];
		
	try{
		$mensaje="clave $clave";
		require('../modelo/conexion_mysql.php');  // devuelve $mysqli
	
		$consultaSQL="SELECT iNombre,iMunicipio, iProvincia ,iDescripcionCorta,iDescripcion from informaticos where iClave=$clave";
				
		//$mensaje="clave $consultaSQL";	
		if ($resultado = $mysqli->query($consultaSQL)) {
		while($fila = $resultado->fetch_assoc()){
			$iNombre='';
			$iMunicipio='';
			$iProvincia='';
			$iDescripcionCorta='';
			$iDescripcion='';
		 
			
			if (!($fila["iNombre"] == 'null')){ $iNombre=$fila["iNombre"];}
			if (!($fila["iMunicipio"] == 'null')) $iMunicipio=$fila["iMunicipio"];
			if (!($fila["iProvincia"] == 'null')) $iProvincia=$fila["iProvincia"];
			if (!($fila["iDescripcionCorta"] == 'null')) $iDescripcionCorta=$fila["iDescripcionCorta"];
			if (!($fila["iDescripcion"] == 'null')) $iDescripcion=$fila["iDescripcion"];
			
		 		$xml->startElement("informatico"); 
				 	$xml->writeElement('nombre',  $iNombre);
					$xml->writeElement('municipio',  $iMunicipio); 
					$xml->writeElement('provincia',  $iProvincia); 
					$xml->writeElement('descripcion_corta',  $iDescripcionCorta); 
					$xml->writeElement('descripcion',  $iDescripcion); 					
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
$xml->startElement("informatico"); 
 	$xml->writeElement('nombre',$mensaje);
	$xml->writeElement('municipio', '- -');
	$xml->writeElement('provincia', '- -');
	$xml->writeElement('descripcion_corta', '- -');
	$xml->writeElement('descripcion', '- -');
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
