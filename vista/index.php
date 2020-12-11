<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['eClave']) && isset($_COOKIE['eClave'])) {
    $_SESSION['eClave'] = $_COOKIE['eClave'];
    $_SESSION['eNombre'] = $_COOKIE['eNombre'];
} else if (!isset($_SESSION['iClave']) && isset($_COOKIE['iClave'])) {
    $_SESSION['iClave'] = $_COOKIE['iClave'];
    $_SESSION['iNombre'] = $_COOKIE['iNombre'];
}



// **/////////// buscar informáticos /////////////////////////////////////////

require("../controlador/Acontrolador.php");	
$buscar="";
$devolver='';
$vista='tablainformaticos';
$campos='iNombre,iMunicipio, iDescripcion';
$order='iClave asc';
				//$buscar=" and (iDescripcioncorta like %$buscar% or iDescripcion like %$buscar%)";
				if (isset($_GET['buscar'])){
						$buscarLimpio=limpiarCaracteres($_GET['buscar']);
						if($buscarLimpio<>''){
							$buscar=" and (iDescripcioncorta like '%$buscarLimpio%'or iDescripcion like '%$buscarLimpio%')";
							$devolver="<h4>Profesionales expertos en: $buscarLimpio</h4>";
						}
				}
	

$Registros=vista($vista,$campos,$buscar,$order);

$cards='';

$rows=0;
//		while ($fila = $sentencia->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
if (isset($Registros)){
foreach ($Registros as $fila ){  
 
	$descripcion = '';
	if(!is_null($fila['iDescripcion'])){
		$descripcion = substr($fila['iDescripcion'], 0,75) . '...';
	}
	$cards .=   '<div class="card col-xl-4  "   >
					<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title ">' . $fila['iNombre'] . '</h4>
						<p class="card-text">' . $fila['iMunicipio'] . ' - ' . $descripcion . '</p>
						<a onclick="alert(\'Es necesario autentificarse para poder acceder a esa información, si no tienes cuenta ¡Registraté!\');" class="btn btn-success">ver más</a>
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
 


// **///////////-----------------------------------------------------/////////
?>

<!DOCTYPE html>
<?php

	require('../controlador/cookieVisitas.php');
 
?>
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
<main class=" col-lg-9 col-md-12 "   >
<!-- SITIO LIBRE PARA INCLUIR -->
<div class="col "  ><div class="p-3 border bg-light">
<h3>¿Eres Empresa?</h3>
<p>
Selecciona y contrata los mejores profesionales para tu negocio, contratar a estos profesionales mejorará tu producción.
</p>

<p>
<a href="registrarEmpresa.php">Regístrate</a> y oferta todos los servicios que necesites, los mejores profesionales del sector de las nuevas tecnologías, se unirán como candidatos, la última palabra la tienes tú.
</p>
</div></div><br>


<div id="resultadobusqueda">
	<?php
		echo $devolver;
	?>
</div>

                  


<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" -->
	<aside class=" col-lg-3 col-md-11"   > <!-- BANNER -->
		<h2>Compartenos en tus redes sociales<h2><br>
		<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
		<img   src="images/logo_facebook.png" alt=""  width="75px" height="75px">
		</a>
		<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
		<img   src="images/logo_twitter.jpg" alt=""  width="75px" height="75px">
		</a>
		<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
		<img   src="images/logo_whatsapp.png" alt=""  width="75px" height="75px">
		</a><br><br><br>
			<img src="images/PublicidadRonaldo.jpg" width="100%"   usemap="#kfc">
			<h6>Ronaldo no para de comer el pollo más rico del mundo, descubre las mejores ofertas para el pollo más crujiente</h6>
			<img src="images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el código cr7 puedes conseguir un 50% de descuento en nuestro nuevo menú: CrujienteR7. ¡No esperes más!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
	</aside> <!-- FIN BANNER -->
	<aside class=" col-3 "   >
	<br><br>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje; ?></a><br><br>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje2; ?></a>
		<a class="navbar-brand " data-toggle="tooltip"><?php echo $mensaje3; ?></a><br><br>
		</aside>
 <?php
	require('pie.php');
	//require('../controlador/pieConCookieVisitas.php');
?>

                        <?php
							require('Modales.php');
							?>

<script type="text/javascript" src="../vista/js/index.js"></script>
						
                            </body>
                            </html>