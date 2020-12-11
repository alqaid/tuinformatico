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
?>
    
<!DOCTYPE html>
<head>
<title>TU INFORMÁTICO - NUEVO CONTRATO</title>
<?php
	require('head.php'); 
?>




<!-- incluir iconos -->

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php
	require('cabecera.php');
?>
<main class=" col-9 "   >
<!-- SITIO LIBRE PARA INCLUIR -->
<div class="col "  ><div class="p-3 border bg-light">
<H3>¿Quieres trabajar como FREELANCE?</H3>
<p>Eres experto en JavaScript, php, python, c#, c++, .Net IONIC ...</p>
<p>Eston són los servicios demandados por empresas que búscan profesionales como tú. </p>
<p><a href="registrarInformatico.PHP">Regístrate</a> y podrás Tele-trabajar desde casa, como Freelance, con un contrato de prestación de servicios, que gestionaremos por tí. </p>

</div></div><br><br>
<div class="col "  ><div class="p-3 border bg-light">
<h4>Buscar Ofertas</h4>
 <a   data-toggle="collapse" href="#collapseExample"   aria-expanded="false" aria-controls="collapseExample">
    <i class='fas fa-angle-double-down' style='font-size:24px'></i> Filtrar búsqueda
  </a>
<div class="collapse" id="collapseExample">
	 <form  id="form1" method="POST" action="../controlador/buscar_servicio.php">
		 <div class="form-group">
			  <label for="empresa">Selecciona una empresa</label>
			  <select class="form-control"  id="empresa" name="empresa">
					<option selected value="0">Todas</option>
				 
			  </select>
		</div>
		<div class="form-group">
			<label for="asunto">Palabras clave: (JavaScript php python c# c++ .Net IONIC ...)</label> 
			<input type="text" class="form-control" id="asunto" name="asunto" >
		</div>
		
		<div class="form-group">		
			<label for="puntuacion">Salario mínimo:</label>
			<input type="range" id="puntuacion" name="salario" min="0" max="5000" step="50" value="200"><span id="puntuacionvalor"></span>
		</div>
		<div class="form-group">
			<button  type="submit" id="submit" class="btn btn-primary">Buscar</button>
		</div>
	</form>	
</div>

</div></div>

<div class="col "  ><div class="p-3 border bg-light">

<div id="resultadobusqueda">
	
</div>

</div></div>
<br><br>



<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" -->
	<aside class=" col-3 "   > <!-- BANNER -->
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
			<img src="images/PublicidadRonaldo.jpg" width="100%" height="50%" usemap="#kfc">
			<h6>Ronaldo no para de comer el pollo más rico del mundo, descubre las mejores ofertas para el pollo más crujiente</h6>
			<img src="images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el código cr7 puedes conseguir un 50% de descuento en nuestro nuevo menú: CrujienteR7. ¡No esperes más!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">¡Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
	</aside> <!-- FIN BANNER -->
 <?php
	require('pie.php');
?>
                                     
					    <?php
							require('Modales.php');
							?>


 

<!-- ------------paneles---------------------------------------------------------------- -->
	 <!-- The Modal -->
  <!-- DESCRPCIÓN DE LA OFERTA -->
  
    <div class="modal" id="buscarOfertas_php_myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"  id='buscarOfertas_php_myModal1_title'>--nombre empresa-</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="f_cancel_accion();">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"  >
           <div   id='buscarOfertas_php_myModal1_body'>---contenido---</div>        
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		  <div id="buscarOfertas_php_myModal1_button_unirse"></div><!-- aquí irá el boton UNIRSE -->		  
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="f_cancel_accion();">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
   
<!-- -----------FIN -paneles---------------------------------------------------------------- -->

<script type="text/javascript" src="../vista/js/funcionesgenerales.js"></script>
<script type="text/javascript" src="../vista/js/buscarOfertas.js"></script>


                            </body>
                            </html>