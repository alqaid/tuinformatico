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
 	 
		
		if (isset($_POST['empresa'])  ) {
		if ($_POST['empresa']>0 ){
			$where1=" and seClaveEmpresa= ? ";
			array_push($array_where,$_POST['empresa']); 
		}}
		if (isset($_POST['asunto']) ) {
			
			$where2=" and (sAsunto like CONCAT('%',?,'%')  or sDescripcion like CONCAT('%',?,'%')) ";
			array_push($array_where,$_POST['asunto']); 
			array_push($array_where,$_POST['asunto']); 
			}
		if (isset($_POST['salario']) ) {	 
			$where3=" and sSalario >= ? ";
			array_push($array_where,$_POST['salario']); 
		} 
		
		
			try{
				 //required conexion
				require ('conexion.php');
							
				//----OK conexión --- PREPARAR SENTENCIA
				$sql='SELECT sAsunto,eNombre from empresas,servicios where eClave=seClaveEmpresa ' . $where1 .    $where2  . $where3 . ' order by sclave desc';
				$sentencia = $conexPDO->prepare($sql);
				 		
				$res = $sentencia->execute($array_where);
				if (!$res){
								die('Error: SQL no válida');
							}
				$cards='';
				$devolver='';
				$rows=0;
				while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
					$cards .=   '<div class="card col "   >
									<img class="card-img-top" src="../images/oferta.png" alt="Card image" style="width:100%">
									<div class="card-body">
										<h4 class="card-title ">' . $fila[1] . '</h4>
										<p class="card-text">' . $fila[0] . '</p>
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
	   
	   
	   
	   
	   