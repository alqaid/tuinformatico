<?php
session_start();

// QUITAR CUANDO EXISTA AUTENTICACIÓN
$_SESSION['autenticado']  = 'autenticado';

if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']!='') {
		$where1="";
		$where2="";
		$where3="";
		$array_where = array();
		$devolver='';
 	 
		
	
			try{
				/*$conexPDO=new PDO("mysql:host=localhost;dbname=tuinformatico;charset=utf8","root","");
				$conexPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					*/

				require("Acontrolador.php");					
				//require("../modelo/mod_acciones.php");	
				//----OK conexión --- PREPARAR SENTENCIA
				$buscar="";
				$buscar=" and (iDescripcioncorta like %$buscar% or iDescripcion like %$buscar%)";
				if (isset($_GET['buscar'])){
						$buscar=limpiarCaracteres($_GET['buscar']);
						if($buscar<>''){
							$buscar=" and (iDescripcioncorta like %$buscar% or iDescripcion like %$buscar%)";
						}
				}

				$vista='tablainformaticos';
				$campos='iNombre,iMunicipio, iDescripcion';
				$order='iClave asc';
				$Registros=vista($vista,$campos,$buscar,$order);
				

			//	$sql='SELECT iNombre,iMunicipio, iDescripcion from informaticos WHERE iDescripcioncorta like '%?%' order by iClave asc';
			//	$sentencia = $conexPDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				 
				
			//	$sentencia->execute($array_where);
			 
				$cards='';
				$devolver='';
				$rows=0;
		//		while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
			if (isset($Registros)){
				foreach ($Registros as $fila ){       
					$descripcion = '';
					if(!is_null($fila['iDescripcion'])){
						$descripcion = substr($fila['iDescripcion'], 0,75) . '...';
					}
					$cards .=   '<div class="card col "   >
									<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
									<div class="card-body">
										<h4 class="card-title ">' . $fila['iNombre'] . '</h4>
										<p class="card-text">' . $fila['iMunicipio'] . ' - ' . $descripcion . '</p>
										<a onclick="alert("Es necesario autentificarse para poder acceder a esa información, si no tienes cuenta hazte pulsando en Registrar")" class="btn btn-success">ver más</a>
									</div>
								</div>';
						
						$rows  =$rows+ 1;
				 	if ($rows>=3){
						$devolver  .='<div class = "row">' . $cards . '</div>';	
						$cards=''; 
						$rows=0;	
					}
						
				 }
			}
				// Arreglo las últimas 
				if ($rows==2 ) $devolver = $devolver . '<div class = "row">' . $cards . '<div class="card col "   ></div></div>'; 
				if ($rows==1 ) $devolver = $devolver . '<div class = "row">' . $cards . '<div class="card col "   ></div><div class="card col "   ></div></div>'; 
				//-----cerrar todo 
				//$stmt=null;
				//$conexPDO=null;
				
				echo   $devolver;
			
			
			
			}catch(Exception $e){
				die('Error:'.$e->GetMessage());
			}
		
}else{
		//$statusCode='500';
		//header('Location: ../index.php');
		echo "No autenticado";
		//echo '{"success":"0","respuesta":"No autenticado"}';
		
		
	}

 
?>	   
	