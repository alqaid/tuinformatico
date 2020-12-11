 function validate() {
					function validate() {
					var auxiliar = 0;
                    var a = document.getElementById("password").value;
                    var b = document.getElementById("confirm_password").value;
                    var fecha = new Date(document.getElementById("Nacimiento").value);
					var actual= new Date();
					
					if(actual.getFullYear()<fecha.getFullYear()){
						if(a!=b){
							alert("Contraseñas no coinciden");
						}
						alert("Interesante que una empresa que no se a fundado busque informaticos");
						return false;
					}else if((actual.getFullYear()==fecha.getFullYear()) && (actual.getMonth()<fecha.getMonth())){
						if(a!=b){
							alert("Contraseñas no coinciden");
						}
						alert("Interesante que una empresa que no se a fundado busque informaticos");
						return false;
					}else if(a!=b){
							alert("Contraseñas no coinciden");
							return false;
						}	
                }
                }
				
document.getElementById("menu_cabecera_datos_text").className  = "nuestromenus_activado";					