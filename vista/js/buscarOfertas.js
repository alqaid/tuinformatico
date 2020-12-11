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
 	
	// activa en el menu navegación el correspondiente como ACTIVO
	document.getElementById("menu_cabecera_bus_oft").className  = "nuestromenus_activado";				
 
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
				 // document.getElementById("buscarOfertas_php_myModal1_button_unirse").innerHTML = "<button type='button'  class='btn btn-success' data-dismiss='modal' onclick='f_URL(" + claveServicio + ",'9999);' >Unirse</button>";
				  document.getElementById("buscarOfertas_php_myModal1_button_unirse").innerHTML = '<button type="button"  class="btn btn-success" data-dismiss="modal" onclick="f_URL(' + claveServicio + ',\'' + xmlDoc.getElementsByTagName('asunto')[0].childNodes[0].nodeValue + '\');" >Unirse</button>';
				 
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

function f_URL(claveServicio,asuntoServicio) {
	location.href = 'misOfertas.php?metodo=unirse&clave=' + claveServicio + '&asunto=' + asuntoServicio;
   // location.href = 'metodos.php?metodo=unirse&clave=' + claveServicio + '&asunto=';
}	