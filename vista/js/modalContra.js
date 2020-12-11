
$("#formContra").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 
		//console.log("solicitud insertar_servicio " + response);
		var myObj = JSON.parse(response);
		
		 
			if(myObj.success == "1"){
				
				document.getElementById("Notificacion").innerHTML = "Se envio a su cuenta un correo para confirmar el cambio.";
				document.getElementById("Notificacion").className = "alert alert-success";
				
			}else{
				document.getElementById("Notificacion").innerHTML = "Error al introducir usuario o contraseña";
				document.getElementById("Notificacion").className = "alert alert-warning";
			}
	});
});

