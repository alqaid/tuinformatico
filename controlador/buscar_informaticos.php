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
				require("../modelo/config.php");	
				//----OK conexión --- PREPARAR SENTENCIA
				$sql='SELECT iNombre,iMunicipio, iDescripcion from informaticos order by iClave asc';
				$sentencia = $conexPDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				 
				
				$sentencia->execute($array_where);
			 
				$cards='';
				$devolver='';
				$rows=0;
				while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
					$descripcion = '';
					if(!is_null($fila[2])){
						$descripcion = substr($fila[2], 0,75) . '...';
					}
					$cards .=   '<div class="card col "   >
									<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
									<div class="card-body">
										<h4 class="card-title ">' . $fila[0] . '</h4>
										<p class="card-text">' . $fila[1] . ' - ' . $descripcion . '</p>
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
				// Arreglo las últimas 
				if ($rows==2 ) $devolver = $devolver . '<div class = "row">' . $cards . '<div class="card col "   ></div></div>'; 
				if ($rows==1 ) $devolver = $devolver . '<div class = "row">' . $cards . '<div class="card col "   ></div><div class="card col "   ></div></div>'; 
				//-----cerrar todo 
				$stmt=null;
				$conexPDO=null;
				
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
	