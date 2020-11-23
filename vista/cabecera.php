<?php
include('../modelo/config.php');
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

<!-- fila  superior  herramientas -->
<nav class="navbar navbar-expand-sm  navbar-dark bg-dark justify-content-end">
    
      

            <svg height="50" width="500">
            <a xlink:href="../vista/index.php">
                <text fill="#28a745" font-size="50" font-family="Verdana" x="10" y="40">Tuinformatico.com</text>
                Error de logo.
            </a>
            </svg>

            <form action="#" class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar profesionales!">

                <span class="btn btn-success" type="submit" title="Buscar Profesionales"><i class="material-icons">search</i></span>
            </form>

            <img src="https://www.vayagif.com/images/banano.gif" alt="Mascota">

            <svg height="50" width="200">
            <text id="nombre" fill="#28a745" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"></text>
            Error de logo.
   
    </svg>

    <a type="button" id="registrate" class="navbar-brand" data-toggle="modal" data-target="#registro"> Registrarse </a>

    <a type="button" id="identificate" class="navbar-brand" data-toggle="modal" data-target="#identificacion"> Identificarse </a>

</nav>

<!-- carrusel -->
<a href="../vista/index.php">
    <img src="../vista/images/tuinformatico2.png" alt="tuinformatico logo" width="100%">
</a>
<!--  fin carrusel  -->

<nav >
    <ul class="nuestromenu">
        <!-- ojo: EN CADA PAGINA LLAMAMOS 
                document.getElementById("menu_cabecera_bus_oft").className  = "nuestromenus_activado";
                PARA CAMBIAR EN ENLACE ACTIVO-->
        <li><a id="menu_cabecera_home" href="../vista/index.php">Informaticos</a></li>
        <li><a id="menu_cabecera_bus_oft" href="../vista/buscarofertas.php">Ofertas</a></li>
        <li id="menu_cabecera_reg_con" style="display:none;"><a href="../vista/nuevocontrato.php">Nueva Oferta</a></li>
        <li id="menu_cabecera_datos" style="display:none"><a id="menu_cabecera_datos_text" href="#">Cambiar datos</a></li>
        <li id="menu_cabecera_cerrar_Session" style="display:none"><a href="../controlador/cerrarSesion.PHP">Cerrar sesion</a></li>

        <?php
        if (isset($_SESSION['eClave'])) {
            echo "<script> document.getElementById('menu_cabecera_datos').style.display = 'initial'; </script>";
            echo "<script> document.getElementById('menu_cabecera_datos_text').href = '../vista/cambiarDatosE.php'; </script>";
            echo "<script> document.getElementById('menu_cabecera_reg_con').style.display = 'initial'; </script>";
            echo "<script> document.getElementById('menu_cabecera_cerrar_Session').style.display = 'initial'; </script>";
            echo "<script> document.getElementById('registrate').style.display = 'none'; </script>";
            echo "<script> document.getElementById('identificate').style.display = 'none'; </script>";
            echo "<script> document.getElementById('nombre').innerHTML = '" . $_SESSION['eNombre'] . "'; </script>";
        } else if (isset($_SESSION['iClave'])) {
            echo "<script> document.getElementById('menu_cabecera_datos').style.display = 'initial'; </script>";
            echo "<script> document.getElementById('menu_cabecera_datos_text').href = '../vista/cambiarDatosI.php'; </script>";
            echo "<script> document.getElementById('menu_cabecera_reg_con').style.display = 'none'; </script>";
            echo "<script> document.getElementById('menu_cabecera_cerrar_Session').style.display = 'initial'; </script>";
            echo "<script> document.getElementById('registrate').style.display = 'none'; </script>";
            echo "<script> document.getElementById('identificate').style.display = 'none'; </script>";
            echo "<script> document.getElementById('nombre').innerHTML = '" . $_SESSION['iNombre'] . "'; </script>";
        } else {
            // Show users the page!
        }
        ?>

    </ul> 
</nav>



<br>
<br>
<div class="container" id="cabecera_php_contenedor">
    <div class = "row">