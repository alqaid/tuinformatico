<?php
/*
	-- SELECTS -------
	listado_vista($listado,$clave) ---> devuelve SELECTS
	select_contar($tabla,$where)  --> CUENTA REGISTROS

	-- INSERTS -------
	insert_tabla_candidatos($claveServicio,$claveInformatico)  --> INSERT CANDIDATOS
*/


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
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------

function select_contar($tabla,$where){
	$vsql="SELECT count(csClaveServicio) FROM $tabla where $where";
	$return=0;
	try{
	$mysqli=conexion();		 
	if ($resultado = $mysqli->query($vsql)) {
		/* obtener el array de objetos */
			while ($fila = $resultado->fetch_row()) {
				$return= $fila[0];
			}
			/* liberar el conjunto de resultados */
		$resultado->close();
		}
	} catch (Exception $e) {
		$return=-1;
	  }
	  $mysqli->close();
	return $return;
	//return $vsql;
}
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
function listado_vista($listado,$clave){   
	$mensaje='-msg-001.-';
	$sql = '';
	switch ($listado) {
		case 'serviciosXinformaticos':
			$sql = "SELECT cFechaUnion,eNombre, sAsunto, sFechaFinPublicacion 
					FROM candidatos,servicios,empresas 
					WHERE csClaveservicio=sClave and seClaveEmpresa=eClave 
					and ciClaveInformaticos=" . $clave
					. " ORDER BY cFechaUnion desc";			 
			break;
		case 'serviciosXempresas':
				$sql = "SELECT sFechaPublicacion,sAsunto, sDescripcion, sSalario,sFechaFinPublicacion,sClave
						FROM servicios
						WHERE seClaveEmpresa=" . $clave
						. " ORDER BY sFechaFinPublicacion asc";			 
				break;
		default:
			# code...
			break;
	}
	if($sql!=''){			
			$mysqli=conexion();		 
			if ($resultado = $mysqli->query($sql)) {
				$ARRAY =array();
				while($fila = $resultado->fetch_assoc()){				
				//BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++					 
					$ARRAY[]=$fila;
				//   FIN BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++				 
				}
				return $ARRAY;
			}
			$mysqli->close();
		} 
	 // retornamos null si no hay sql
}
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
function insert_tabla_candidatos($claveServicio,$claveInformatico){
   
	$mensaje='-001-';
	//$fecha=date("Y-m-d"); FECHA ES TIEMSTAMP
			 $sql = "INSERT INTO  candidatos (csClaveServicio ,ciClaveInformaticos ) VALUES ($claveServicio,$claveInformatico)";
			 
			$mysqli=conexion();
			 
			if ($mysqli->query($sql) === TRUE) {
			  $mensaje ="OK";
			} else {
			  $mensaje .="Ya estaba unido a esta oferta";
			}
			$mysqli->close();
	
	 return $mensaje;
	 
}