<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['eClave']) && isset($_COOKIE['eClave'])) {
    $_SESSION['eClave'] = $_COOKIE['eClave'];
    $_SESSION['eNombre'] = $_COOKIE['eNombre'];
} else if (!isset($_SESSION['iClave']) && isset($_COOKIE['iClave'])) {
    $_SESSION['iClave'] = $_COOKIE['iClave'];
    $_SESSION['iNombre'] = $_COOKIE['iNombre'];
}
?>

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
            <!-- SITIO LIBRE PARA INCLUIR -->


            <h2 text-align="center">Quienes somos</h2>
            <br>
            <br>
            <div class="card col "   >
                <h4 class="card-title ">Ángel Francisco Alcaide Romero</h4>
                <p class="card-text">Estudiante de Ingeniería Informáica en Albacete</p>
            </div>
            <br>
            <div class="card col "   >
                <h4 class="card-title ">José Ángel González Martínez</h4>
                <p class="card-text">Estudiante de Ingeniería Informáica en Albacete</p>
            </div>
            <br>
            <div class="card col "   >
                <h4 class="card-title ">Damián Escobar Blázquez</h4>
                <p class="card-text">Estudiante de Ingeniería Informáica en Albacete</p>
            </div>


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