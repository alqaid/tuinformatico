<?php
session_start();
 
if(isset($_SESSION['eClave']) || isset($_SESSION['iClave'])){
    header('Location: Error.php');
    exit;
} else {
    // Show users the page!
}
?>
                    <!-- The Modal -->
                    <DIV ALIGN=center>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">¿Usted es?</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="registrarEmpresa.php">
											<button type="submit" class="btn btn-success">Empresa</button>
										</form>	<br>
										<label>o</label><br>
										<form action="registroInformatico.php">
											<button type="submit" class="btn btn-success">Informatico</button>
										</form>	
                                    </div>
                                </div>
                        </div>