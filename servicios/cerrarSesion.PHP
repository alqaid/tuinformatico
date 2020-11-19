<?php

// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();
setcookie("iClave", "", time() - 1, "/");
setcookie("eClave", "", time() - 1, "/");
setcookie("iNombre", "", time() - 1, "/");
setcookie("iNombre", "", time() - 1, "/");

echo "<script> window.location='../index.php'; </script>";
?>