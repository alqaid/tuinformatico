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