<!DOCTYPE html>
<html lang="en">
<head>
<title>TU INFORMÁTICO - NUEVO CONTRATO</title>
<?php
	require('head.php');
?>
</head>
<body>
<?php
	require('cabecera.php');
?>
<main class=" col-9 "   >
<!--  SITIO LIBRE PARA INCLUIR  -->





<!-- FIN SITIO LIBRE PARA INCLUIR -->
</main> <!-- class="container" -->
	<aside class=" col-3 "   > <!-- BANNER -->
		<h2>Compartenos en tus redes sociales<h2>
		<a href="https://twitter.com/?lang=es">
		<img   src="images/twitter.png" alt=""  width="100%" height="520px">
		</a>
	</aside> <!-- FIN BANNER -->
 <?php
	require('pie.php');
?>
                                        <!-- The Modal -->
					    <div class="modal fade" id="identificacion">
                        <?php
							require('modalIdentificarse.php');
							?>
                        </div>
					
					<!-- The Modal -->
                        <div class="modal fade" id="registro">
						<?php
							require('modalRegistro.php');
							?>
                        </div>
                            </body>
                            </html>