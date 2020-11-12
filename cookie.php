<?php
    if (isset($_COOKIE['visitas'])) {

    setcookie('visitas', $_COOKIE['visitas'], time() + 3600 * 24 );
    $mensaje = 'Numero de visitas: '.$_COOKIE['visitas'];
	}
	else {

    setcookie('visitas', 1, time() + 3600 * 24);
    $mensaje = 'Bienvenido por primera vez a nuesta web';
	}

?>
