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
			<label for="asunto">Palabras clave:</label> 
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
		<h2>Compartenos en tus redes sociales<h2>
		<a href="https://twitter.com/?lang=es">
		<img   src="images/twitter.png" alt=""  width="100%" height="520px">
		</a>
	</aside> <!-- FIN BANNER -->
 <?php
	require('pie.php');
?>
                                     
					    <div class="modal fade" id="identificacion">
                        <?php
							require('modalIdentificarse.php');
							?>
                        </div>
					
					 
                        <div class="modal fade" id="registro">
						<?php
							require('modalRegistro.php');
							?>
                        </div>


 

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
		  <button type="button" class="btn btn-success" data-dismiss="modal" onclick="f_cancel_accion();">Unirse</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="f_cancel_accion();">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
   
<!-- -----------FIN -paneles---------------------------------------------------------------- -->






<script>
  addEventListener('load',inicio,false);
 
   function inicio()
  {
	// --------- --------- --------- --------- 
	// JAVASCRIPT EVENTOS LOAD
    // --------- --------- --------- --------- 
	
    // range--------- --------- --------- --------- 
	  RangeCambiar();  
	  document.getElementById('puntuacion').addEventListener('mousemove',RangeCambiar,false);
     //--------- --------- --------- --------- 
  
  
	//BUSQUEDA EMPRESAS PARA EL COMBO
	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  console.log("DEVOLUCION AJAX ");
			  
			  document.getElementById("empresa").innerHTML = document.getElementById("empresa").innerHTML + this.responseText;	   
			  
			}
		  };
		  xhttp.open("GET", "../controlador/combo_empresas.php", true);
		  xhttp.send();
	
	 
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("resultadobusqueda").innerHTML = this.responseText;
	  }
	};
	xmlhttp.open("POST", "../controlador/buscar_servicio.php", true);
	xmlhttp.send();
	

   
	
}
 
 
 function RangeCambiar()
  {    
    document.getElementById('puntuacionvalor').innerHTML=" " + document.getElementById('puntuacion').value + " €";
  }
 
</script> 	
<script>
// formulario envío JQUERY


$("#form1").submit(function(event){
	console.log("solicitud buscar_servicio ");
	
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 		
		//SCRIPT NORMAL -->		
		$("#resultadobusqueda").html(response);
		
	});
}); 
</script>	
<script>	
	// activa en el menu navegación el correspondiente como ACTIVO
	document.getElementById("menu_cabecera_bus_oft").className  = "nuestromenus_activado";				
</script>
<script>
	// LLAMADA A LA FUNCION DE ABRIR EL MODAL DE DETALLES
	function f_abrirOferta(claveServicio)  {    
		// ajax consultar UN SERVICIO
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  var xmlDoc = this.responseXML;
				  
				  document.getElementById("buscarOfertas_php_myModal1_title").innerHTML = xmlDoc.getElementsByTagName('nombre_empresa')[0].childNodes[0].nodeValue;
				  var asunto='<p>' +  xmlDoc.getElementsByTagName('asunto')[0].childNodes[0].nodeValue + '</p>';
				  asunto += '<p><b>Publicado:</b> ' +  xmlDoc.getElementsByTagName('fecha_inicio')[0].childNodes[0].nodeValue + '</p>';
				  asunto += '<p><b>Límite inscripción:</b> <span style="color:red">' +  xmlDoc.getElementsByTagName('fecha_fin')[0].childNodes[0].nodeValue + '</span></p>';
				  asunto += '<p><b>Salario orientativo:</b> ' +  xmlDoc.getElementsByTagName('salario')[0].childNodes[0].nodeValue + ' €</p>';
				  asunto += '<p>' +  xmlDoc.getElementsByTagName('descripcion')[0].childNodes[0].nodeValue + '</p>';
				  
				  if(xmlDoc.getElementsByTagName('candidatos')[0].childNodes[0].nodeValue > 0 ){
					   asunto += '<p><b>'  +  xmlDoc.getElementsByTagName('candidatos')[0].childNodes[0].nodeValue + ' candidatos unidos a esta oferta.</b></p>';
				  }else{
					  asunto += '<p><b>Nadie se ha unido aún<span style="color:red"> ¡Sé el primero!</span></p>';
				  }
				  
				  document.getElementById("buscarOfertas_php_myModal1_body").innerHTML = asunto;
				  
				  console.log('RESPUESTA XML OK');
				}
			  };
			  xhttp.open("GET", "../controlador/xml_servicio_x_clave.php?clave=" + claveServicio, true);
			  xhttp.send();
		
	
	// MOSTRAR EL SERVICIO
		 	  document.getElementById('buscarOfertas_php_myModal1').style.display='block';
			  document.getElementById('buscarOfertas_php_myModal1').style.opacity=1;
			  document.getElementById('cabecera_php_contenedor').style.opacity=0.3; 
    }	

function f_cancel_accion()  {    
		 	  document.getElementById('buscarOfertas_php_myModal1').style.display='none';
			  document.getElementById('buscarOfertas_php_myModal1').style.opacity=1;
			  document.getElementById('cabecera_php_contenedor').style.opacity=1; 
    }		
</script>	
                            </body>
                            </html>