$("#formautenticacion").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 
		var myObj = JSON.parse(response);
			if(myObj.success == "0"){
				document.getElementById("Error").innerHTML = "Error al introducir usuario o contraseña";
				 var id = $('.g-recaptcha', form).attr('id');
				grecaptcha.reset(id);
			
			}else{
				location.replace("../index.php");
			}
	});
});