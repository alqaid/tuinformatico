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

if (!isset($_SESSION['eClave']) || isset($_SESSION['iClave'])) {
    header('Location: Error.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TU INFORMÁTICO - NUEVO CONTRATO</title>
        <?php
        require('head.php');
        ?>


      
<script>
  addEventListener('load',inicio,false);
  
   function inicio()
  {
	// JAVASCRIPT AL INICIO
	
 
	
	var today = new Date();
	
	var hoy = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
	var hoy3 = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
	
	
 
 	document.getElementById('fechainicio').value =hoy
	today.setMonth(today.getMonth() + 1);
		var hoy2 = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
	
    document.getElementById('fechafin').value = hoy2;
	
	var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  console.log("DEVOLUCION AJAX ");
			  
			  document.getElementById("empresa").innerHTML = this.responseText;	   
			  
			}
		  };
		  xhttp.open("GET", "../controlador/combo_empresas.php", true);
		  xhttp.send();
	

    }
 
 
 


  $(document).ready(function(){
	 // JQUERY
	//AL CARGAR TODA LA PáGINA, DESPUES.....  
	  
	 
	
	//AJAX PARA LLENAR LAS EMPRESAS
			
});
</script>  



    </head>
    <body>
        <?php
        require('cabecera.php');
        ?>
       
<main class=" col-9 "   >
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<!-- SITIO LIBRE PARA INCLUIR -->
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<br><br>
<h4>Ofertar un nuevo servicio</h4>
<div class="col "  ><div class="p-3 border bg-light">
<div id="formularioanimado">
	 <form  id="form1" method="POST" action="../controlador/insertar_servicio.php">
		 <div class="form-group">
			  <label for="empresa">Selecciona una empresa</label>
			  <select class="form-control" id="empresa" name="empresa">
					
			  </select>
		</div>
		<div class="form-group">
			<label for="asunto">Asunto:</label> 
			<input type="text" class="form-control" id="asunto" name="asunto" required>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción de la tarea a realizar:</label>
			<textarea   id="descripcion" class="form-control" rows="5" name="descripcion" required ></textarea>
		</div>
		<div class="form-group">
			<label for="fechainicio">Fecha Inicio Publicación:</label>
			<input type="date" id="fechainicio" name="fechapublicacion" value="2021-01-01">
		</div>
		<div class="form-group">
			<label for="fechafin">Fecha Fin Publicación:</label>
			<input type="date" id="fechafin" name="fechafinpublicacion" value="2021-01-01">
		</div>
		
		<div class="form-group">		
			<label for="salario">Salario:</label>
			<input type="number" id="salario" name="salario" min="1" max="10000" step="1" required>€
		</div>
		<div class="form-group">
			<button  type="submit" id="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>	
	</div>
	 
	<div id="caja_success" class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>!Aceptado!</strong> <spam id="respuestaok"><spam>
	</div>
	<div id="caja_warning" class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Atención!</strong> <spam id="respuestaerror"><spam>
	</div>
</div></div>
<br><br>
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
<!-- FIN SITIO LIBRE PARA INCLUIR -->
<!-- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----  -->
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
                                        <!-- The Modal -->
					    <div class="modal fade" id="identificacion">
                        <?php
							require('modalIdentificarse.php');
							?>
                        </div>
					
					<!-- The Modal -->
                        <div class="modal fade" id="registro">
						<?php
							require('modalRegistro.php');
							?>
                        </div>
					
<script>
$(document).ready(function(){
		 $("#caja_success").hide();
		 $("#caja_warning").hide();
});		 
</script>			
<script>
//OBLIGATORIO IR AL FINAL ESTE C�DIGO O RESCRIBIE LA P�GINA



$("#form1").submit(function(event){
	console.log("solicitud insertar_servicio ");
	
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 		
		//SCRIPT NORMAL -->		$("#mensaje").html(response);
		//O JSON:
		 var jsonData = JSON.parse(response);
		 if (jsonData.success == "1")
                {
				  $("#formularioanimado").slideToggle("slow");
                  $("#respuestaok").html(jsonData.respuesta);
				    $("#caja_success").show();
					$("#caja_warning").hide();
                }
                else
                {
                  $("#respuestaerror").html(jsonData.respuesta);
				   $("#caja_success").hide();
					$("#caja_warning").show();
                }
	});
});
 

 
</script>
<script>	
	document.getElementById("menu_cabecera_reg_con").className  = "nuestromenus_activado";				
</script>						
                                                        </body>
                                                        </html>