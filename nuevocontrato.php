<!DOCTYPE html>
<html lang="en">
<head>
<title>TU INFORMÁTICO - NUEVO CONTRATO</title>
<?php
	require('head.php');
?>


<script>
  addEventListener('load',inicio,false);
  
Date.prototype.yyyymmdd = function() {
  var yyyy = this.getFullYear().toString();
  var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
  var dd  = this.getDate().toString();
  return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]); // padding
};
 

  function cambioTemperatura()
  {    
    document.getElementById('puntuacionvalor').innerHTML=" " + document.getElementById('puntuacion').value;
  }
  
   function inicio()
  {
	// JAVASCRIPT AL INICIO
	
	
  }
  $(document).ready(function(){
	  $("#btnsubmit").click(function(){
		$("#formularioanimado").slideToggle("slow");
	  });
	});

  $(document).ready(function(){
	 // JQUERY
	//AL CARGAR TODA LA PÁGINA, DESPUES.....  
	  
	cambioTemperatura();  
    document.getElementById('puntuacion').addEventListener('mousemove',cambioTemperatura,false);
	var today = new Date();
	document.getElementById("fechafin").value = today.yyyymmdd();
	  
  
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
<h4>Incluir nuevo contrato</h4>
<div class="col "  ><div class="p-3 border bg-light">
<div id="formularioanimado">
	 <form action="">
		 <div class="form-group">
			  <label for="empresa">Selecciona una empresa</label>
			  <select class="form-control" id="empresa" name="empresa">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			  </select>
		</div>
		<div class="form-group">
			  <label for="candidato">Selecciona un candidato</label>
			  <select class="form-control" id="candidato" name="candidato">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			  </select>
		</div>
		<div class="form-group">
			<label for="fechafin">Fecha Fin Publicación:</label>
			<input type="date" id="fechafin" name="fechafin" value="2021-01-01">
		</div>
		<div class="form-group">		
			<label for="puntuacion">Puntuación:</label>
			<input type="range" id="puntuacion" name="puntuacion" min="0" max="5"><span id="puntuacionvalor"></span>
		</div>
		<div class="form-group">		
			<label for="salario">Salario:</label>
			<input type="number" id="salario" name="salario" min="100" max="10000" step="50">€
		</div>
		<button  type="submit" class="btn btn-primary">Submit</button>
	
	</form>	
	</div><button id="btnsubmit"  class="btn btn-primary">Submit</button>
</div></div>
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
                    <DIV ALIGN=center>
                        <div class="modal fade" id="identificacion">

                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Identificarse</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form method="post"
                                            <label for="e">Email:</label><br>
                                            <input type="text" id="e" name="email"><br>
                                            <label for="p">Contraseña:</label><br>
                                            <input type="password" id="p" name="contraseña"><br>
                                            <a href="https://www.w3schools.com">¿Olvido su contraseña?</a><br><br>
                                            <label><input type="checkbox"> Recordadme</label><br>
                                            <button type="submit" class="btn btn-success">Iniciar sesion</button>
                                        </form>
                                        <a href="" data-dismiss="modal" data-toggle="modal" data-target="#registro">¡Registrate!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </DIV>
					
					<!-- The Modal -->
                    <DIV ALIGN=center>
                        <div class="modal fade" id="registro">

                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">¿Usted es?</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form>
											<button type="submit" class="btn btn-success">Empresa</button><br>
											<label>o</label><br>
                                            <button type="submit" class="btn btn-success">Informatico</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </DIV>
                            </body>
                            </html>