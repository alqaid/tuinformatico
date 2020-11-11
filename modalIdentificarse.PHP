<!-- The Modal -->
                    <DIV ALIGN=center>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Identificarse</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
									
                                    <div class="modal-body" >
                                        <form id="formautenticacion" method="POST" action="servicios/autenticacion.php">
                                            <label for="e">Email:</label><br>
                                            <input type="text" id="user" name="email"><br>
                                            <label for="p">Contraseña:</label><br>
                                            <input type="password" id="pass" name="contraseña"><br>
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
					
					
					
			<script>
			
			
$("#formautenticacion").submit(function(event){
	console.log(" probando identificación ");
	
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
		$("#registro").html(response);
		
	});
});
			
			</script>		