<!-- The Modal -->
                    <DIV ALIGN=center>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
								
								<nav>
								<ul class="nav nav-tabs nav-justified">
								<li class="nav-item">
								<strong id="I" class="nav-link tuinfor_menu" style="background-color:#28a745;border-color: #28a745;"
								onclick='document.getElementById("registrarse").href = "../vista/registroInformatico.php";
										document.getElementById("titulo").innerHTML= "Identificarse/Informatico";
										document.getElementById("I").className= "nav-link tuinfor_menu";
										document.getElementById("E").className= "nav-link active tuinfor_menu";
										document.getElementById("I").style = "background-color:#28a745;border-color: #28a745";
										document.getElementById("E").style = "color: #007bff";
										document.getElementById("formautenticacion").action = "../controlador/loginInformatico.PHP";
										document.getElementById("Error").innerHTML= "";
								'>Informatico</strong>
								</li>
								<li class="nav-item">
								<strong id="E" class="nav-link active tuinfor_menu" style="color:#007bff"
								onclick='document.getElementById("registrarse").href = "../vista/registrarEmpresa.php";
										document.getElementById("titulo").innerHTML= "Identificarse/Empresa";
										document.getElementById("I").className= "nav-link active tuinfor_menu";
										document.getElementById("E").className= "nav-link tuinfor_menu";
										document.getElementById("I").style = "color: #007bff";
										document.getElementById("E").style = "background-color:#28a745;border-color: #28a745";
										document.getElementById("formautenticacion").action = "../controlador/loginEmpresa.PHP";
										document.getElementById("Error").innerHTML= "";
								'>Empresa</strong>
								</li>
								
								</ul>
								</nav>
								
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#28a745;border-color: #28a745;">
                                        <h4 id="titulo"class="modal-title value">Identificarse/Informatico</h4>
										<button type="button" id="cerrar" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
									<p id="Error" class="bg-warning"></p>
                                    <div class="modal-body" >
                                        <form id="formautenticacion" method="POST" action="../controlador/loginInformatico.PHP">
                                            <label for="email">Email:</label><br>
                                            <input type="text" style="width : 250px; heigth : 5px" id="user" name="email"><br>
                                            <label for="pass">Contraseña:</label><br>
                                            <input type="password" maxlength="64" id="pass" name="contraseña"><br>
                                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#Contra">¿Olvido su contraseña?</a><br><br>
                                            <input type="checkbox" name="recuerda"> <label>Recordadme</label><br>
										 <div id="cap1" class="g-recaptcha" data-sitekey="6LexGuUZAAAAAIgFVgIkl0ncbuIF26e5Gc3alwVE"  ></div><br>
                                            <button type="submit" name="registro" class="btn btn-success"  >Iniciar sesion</button>
                                        </form>
                                        <a href="../vista/registroInformatico.php" id="registrarse">¡Registrate!</a>
                                    </div>
									 <div id="resultadobusqueda" >
									 </div>
                                </div>
                           </div>
                    </DIV>	

 			
<script type="text/javascript" src="../vista/js/modalIdentificarse.js"></script>