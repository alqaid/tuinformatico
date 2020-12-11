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

$(document).ready(function(){
		 $("#caja_success").hide();
		 $("#caja_warning").hide();
});		 

//OBLIGATORIO IR AL FINAL ESTE CӄIGO O RESCRIBIE LA PÁGINA

$("#form1").submit(function(event){
	//console.log("solicitud insertar_servicio ");
	
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
 

document.getElementById("menu_cabecera_reg_con_a").className  = "nuestromenus_activado";	