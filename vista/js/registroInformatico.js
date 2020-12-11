	function validate() {
                    var a = document.getElementById("P1").value;
                    var b = document.getElementById("P2").value;
					var fecha = new Date(document.getElementById("Nacimiento").value);
					var actual= new Date();
					
					var aux = actual.getMonth()-fecha.getMonth();
					
					if(aux<=0){
						aux=actual.getFullYear()-fecha.getFullYear()+1;
					}else{
						aux=actual.getFullYear()-fecha.getFullYear();
					}
					
					if((a!=b) || (aux<16)){
						if(a!=b){
							alert("Contraseñas no coinciden");
						}
						if(aux<16){
							alert("Necesitas ser mayor de 16");
						}
						return false;
					}	
				}