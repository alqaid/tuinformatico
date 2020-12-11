<?php
session_start();
require('../controlador/Acontrolador.php');
$mensaje="";
if (isset($_SESSION['eClave'])) {
	// -////////////////////////////////////////////////////-- 
// -////////////////    EMPRESA    /////////////////-- 
// -////////////////////////////////////////////////////-- 


    $mensaje="<h6>" .  $_SESSION["eNombre"] . "</h6>";
    if (isset($_GET['ofertadescripcon'])  )    $mensaje.="<h6>" . $_GET['ofertadescripcon']. "</h6>";
	$mensaje.="<p>Candidatos para la OFerta:</p>";

	$mensaje.= "<table class='table table-striped'>
    <thead>
	  <tr>
	  	<th>Fecha Alta</th>
        <th>Nombre</th>
        <th>Email</th>
		<th>Teléfono</th>
		<th>Descripción</th>		
      </tr>
    </thead>
    <tbody>";
    if (isset($_GET['oferta'])  ){
        $oferta=$_GET['oferta'];
        
        $ARRAY = contr_listar('cantidatosXoferta',$oferta,$_SESSION['eClave']);	
        //cFechaUnion,iNombre,iTelefono,iEmail,iDescripcionCorta,iClave,sClave
      
        if (isset($ARRAY)){
            //$mensaje.='lanzado';
            foreach ($ARRAY as $REGISTRO ){                   
                    $iClave=$REGISTRO['iClave'];
                    $sClave=$REGISTRO['sClave'];
                    $mensaje.= "<tr><td>".$REGISTRO['cFechaUnion']."</td><td>".$REGISTRO['iNombre']."</td><td>".$REGISTRO['iEmail']."</td><td>".$REGISTRO['iTelefono']."</td><td>".$REGISTRO['iDescripcionCorta']."</td>";	        	
                    $mensaje.= "<td><button type='button' class='btn btn-success'  onClick='fpagoTPV($iClave,$sClave);'>Contratar</button></td></tr>";
                }
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


<script type="text/javascript" src="../vista/js/misOfertasCandidatos.js"></script>	                       
                            </body>
                            </html>