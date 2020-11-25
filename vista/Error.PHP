<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TU INFORMáTICO - NUEVO CONTRATO</title>
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
            <img src="images/folks.png"><br>
            <!-- FIN SITIO LIBRE PARA INCLUIR -->
        </main> <!-- class="container" -->
        <aside class=" col-3 "   > <!-- BANNER -->
			<h2>Compartenos en tus redes sociales<h2><br>
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
			<img   src="images/logo_facebook.png" alt=""  width="75px" height="75px">
			</a>
			<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
			<img   src="images/logo_twitter.jpg" alt=""  width="75px" height="75px">
			</a>
			<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
			<img   src="images/logo_whatsapp.png" alt=""  width="75px" height="75px">
			</a>
        </aside> <!-- FIN BANNER -->
                    <?php
                    require('pie.php');
                    ?>
                    <!-- The Modal -->
                    <div class="modal fade" id="identificacion">
                        <?php
                        require('../vista/modalIdentificarse.php');
                        ?>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="registro">
                        <?php
                        require('../vista/modalRegistro.php');
                        ?>
                    </div>
                    </body>
                    </html>