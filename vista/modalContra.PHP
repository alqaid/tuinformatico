<!-- The Modal -->
                    <DIV ALIGN=center>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
								
								<nav>
								<ul class="nav nav-tabs nav-justified">
								<li class="nav-item">
								<strong id="IC" class="nav-link tuinfor_menu" style="background-color:#28a745;border-color: #28a745;"
								onclick='document.getElementById("tituloC").innerHTML= "Identificarse/Informatico";
										document.getElementById("IC").className= "nav-link tuinfor_menu";
										document.getElementById("EC").className= "nav-link active tuinfor_menu";
										document.getElementById("IC").style = "background-color:#28a745;border-color: #28a745";
										document.getElementById("EC").style = "color: #007bff";
										document.getElementById("formContra").action = "../controlador/enviarContraI.php";
										document.getElementById("Notificacion").innerHTML = "";
										document.getElementById("Notificacion").className = "";
								'>Informatico</strong>
								</li>
								<li class="nav-item">
								<strong id="EC" class="nav-link active tuinfor_menu" style="color:#007bff"
								onclick='document.getElementById("tituloC").innerHTML= "Identificarse/Empresa";
										document.getElementById("IC").className= "nav-link active tuinfor_menu";
										document.getElementById("EC").className= "nav-link tuinfor_menu";
										document.getElementById("IC").style = "color: #007bff";
										document.getElementById("EC").style = "background-color:#28a745;border-color: #28a745";
										document.getElementById("formContra").action = "../controlador/enviarContraE.php";
										document.getElementById("Notificacion").innerHTML = "";
										document.getElementById("Notificacion").className = "";
								'>Empresa</strong>
								</li>
								
								</ul>
								</nav>
								
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#28a745;border-color: #28a745;">
                                        <h4 id="tituloC"class="modal-title value">Identificarse/Informatico</h4>
										<button type="button" id="cerrar" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
									<p id="Notificacion" class=""></p>
                                    <div class="modal-body" >
                                        <form id="formContra" method="POST" action="../controlador/enviarContraI.php">
                                            <label for="emailc">Email:</label><br>
                                            <input type="text" style="width : 250px; heigth : 5px" id="emailc" name="email"><br> <br>
										 <div id="cap2" class="g-recaptcha" data-sitekey="6LexGuUZAAAAAIgFVgIkl0ncbuIF26e5Gc3alwVE"  ></div><br>
                                            <button type="submit" name="registro" class="btn btn-success"  >Recuperar</button>
                                        </form>
                                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#identificacion">Volver al login</a><br><br>
                                    </div>
                                </div>
                           </div>
                    </DIV>	

 			
<script type="text/javascript" src="../vista/js/modalContra.js"></script>