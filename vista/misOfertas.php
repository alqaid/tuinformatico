<?php
session_start();
require('../controlador/Acontrolador.php');
$mensaje="";
//if ((isset($_SESSION['rol'])) && ($_SESSION['rol']=='empresa')) {
	if (isset($_SESSION['eClave'])) {
	// -////////////////////////////////////////////////////-- 
// -////////////////    EMPRESA    /////////////////-- 
// -////////////////////////////////////////////////////-- 
	$mensaje="<h6>" .  $_SESSION["eNombre"] . "</h6>";
	$mensaje.="<p>Estas son sus publicaciones</p>";

	$mensaje.= "<table class='table table-striped'>
    <thead>
	  <tr>
	  	<th>Fin Publicación</th>
        <th>Inicio Publicación</th>
        <th>Asunto</th>
		<th>Descripción</th>
		<th>Salario</th>
		<th>Candidatos</th>
      </tr>
    </thead>
    <tbody>";
 
	$ARRAY = contr_listar('serviciosXempresas',$_SESSION['eClave'],null);	
	if (isset($ARRAY)){
	   foreach ($ARRAY as $REGISTRO ){
			$candidatos=contr_contarRegistros('candidatosXoferta',$REGISTRO['sClave']);
			$asunto='"' . $REGISTRO['sAsunto'] .'"';
			$sClave=$REGISTRO["sClave"];
			 $mensaje.= "<tr><td>".$REGISTRO['sFechaFinPublicacion']."</td><td>".$REGISTRO['sFechaPublicacion']."</td><td>".$REGISTRO['sAsunto']."</td><td>".$REGISTRO['sDescripcion']."</td><td>".$REGISTRO['sSalario']."€</td>";	        	
			 $mensaje.= "<td>" . $candidatos . "</td>";
			 $mensaje.= "<td><button type='button' class='btn btn-success' onClick='fverCandidatos($sClave,$asunto);'>Contratar</button></td></tr>";
			}
		}
	$mensaje.= "</tbody>		</table> ";

}elseif (isset($_SESSION['iClave'])) {   // if(isset($_SESSION['rol']) && ($_SESSION['rol']=='informatico')) {
	
// -////////////////////////////////////////////////////-- 
// -////////////////    INFORMÁTICO    /////////////////-- 
// -////////////////////////////////////////////////////-- 	
	
	if(isset($_SESSION['iClave']) && isset($_GET['metodo'])   && isset($_GET['clave']) &&  ($_GET['metodo']=='unirse') ) {
		// se ha llamado al metodo UNIRSE por un INFORMÁTICO AUTENTICADO Y A UN SERVICIO CONCRETO.
		//$mensaje .= "<br> existe todo metodo:" . $_GET['metodo'] . " -id: " . $_GET['id'];
		
		 
		$asunto='';
		if(isset($_GET['asunto'])) $asunto=$_GET['asunto'];  // no se hace nada, no hace falta comprobar

		$respuesta = contr_unirse($_GET['clave'],$_SESSION['iClave']);
		if ($respuesta=="OK"){
			$mensaje1=" Estimado " .  $_SESSION["iNombre"] . "<br> Se ha unido correctamente a la oferta: ";
			$mensaje1 .= $asunto ;
			$mensaje.="
			<div class='alert alert-success alert-dismissible'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>!Aceptado!</strong>" . $mensaje1 . "<spam></div>";
		
		}else{
			$mensaje1=" Estimado " .  $_SESSION["iNombre"] . "<br> ha ocurrido un error al unirse a la oferta: ";
			$mensaje1 .= $asunto . " --> " . $respuesta;

			$mensaje.="
			<div class='alert alert-warning alert-dismissible'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>!Rechazado!</strong>" . $mensaje1 . "<spam></div>";

		}
	}

	// LISTADO DE OFERTAS AL QUE EL INFORMÁTICO SE HA UNIDO
	$mensaje.="<h6>" .  $_SESSION["iNombre"] . "</h6>";
	$mensaje.="<p>Se ha unido a las siguientes ofertas:</p>";


	$mensaje.= "<table class='table table-striped'>
    <thead>
      <tr>
        <th>Fecha Inclusión</th>
        <th>Empresa</th>
		<th>Trabajo</th>
		<th>Fin Publicación</th>
		
      </tr>
    </thead>
    <tbody>";

	$ARRAY = contr_listar('serviciosXinformaticos',$_SESSION['iClave'],null);	
	if (isset($ARRAY)){
	   foreach ($ARRAY as $REGISTRO ){
			 $mensaje.= "<tr><td>".$REGISTRO['cFechaUnion']."</td><td>".$REGISTRO['eNombre']."</td><td>".$REGISTRO['sAsunto']."</td><td>".$REGISTRO['sFechaFinPublicacion']."</td></tr>";	        	
			}
		}
	$mensaje.= "</tbody>		</table> ";
}	
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TU INFORMÁTICO - NUEVO CONTRATO</title>
<?php
	require('head.php');
?>
</head>
<body>
<?php
	require('cabecera.php');
?>
<main class=" col-12"   >
<!--  SITIO LIBRE PARA INCLUIR  -->

<?php
	echo $mensaje;
	 
?>



<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" 
	<aside class=" col-3 "   >--> <!-- BANNER -->
<!--		<h2>Compartenos en tus redes sociales<h2><br>
		<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
		<img   src="images/logo_facebook.png" alt=""  width="75px" height="75px">
		</a>
		<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
		<img   src="images/logo_twitter.jpg" alt=""  width="75px" height="75px">
		</a>
		<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
		<img   src="images/logo_whatsapp.png" alt=""  width="75px" height="75px">
		</a>-->
	</aside> <!-- FIN BANNER --> 
 <?php
	require('pie.php');
?>
                       <?php
							require('Modales.php');
							?>
<script>
	function fverCandidatos(claveOferta,oferta){
		location.href = 'misOfertasCandidatos.php?oferta=' + claveOferta + '&ofertadescripcon=' + oferta; 
	}
</script>						
                            </body>
                            </html>