<?php
$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->setIndentString('	'); 
$xml->startDocument('1.0', 'UTF-8');

// CABECERA ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  ----------  
$xml->startElement('servicios'); //elemento servicios


$clave=54;
$devolucion=false;
if (isset($_GET['clave'])){ 
	$clave=$_GET['clave'];
	
	try{
	
	
echo "<!----conetando-->";
$mysqli = @new mysqli('localhost', 'root', '', 'tuinformatico');
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}else{
	echo "<!----conexion ok -->";
}

	
		$consultaSQL="SELECT eNombre,sAsunto from empresas,servicios where eClave=seClaveEmpresa and sClave=$clave";
				echo $consultaSQL;
		if ($resultado = $mysqli->query($consultaSQL)) {
		while($fila = $resultado->fetch_assoc()){
				
				 	$xml->writeElement('nombre_empresa', ' 222 ');
					$xml->writeElement('asunto', ' 3333 '); 
					$devolucion=true;
				}
		}		
		$mysqli->close();
		$resultado=null;
		$mysqli=null;
	}catch(Exception $e){
		//die('Error:'.$e->GetMessage());
	}
}

if (!$devolucion){

 	$xml->writeElement('nombre_empresa', '1111');
	$xml->writeElement('asunto', '1222');

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