<?php
//Visitas
    if (isset($_COOKIE['visitas'])) {

    setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 3600 * 24 );
    $mensaje = 'Numero de visitas: '.$_COOKIE['visitas'];
	}
	else {

    setcookie('visitas', 2, time() + 3600 * 24);
    $mensaje = 'Bienvenido por primera vez a nuesta web';
	}

?>
<?php
//Accesos
	if (isset($_COOKIE['fechaAnterior'])) {

    setcookie('fechaAnterior', $_COOKIE['fechaAnterior'], time() + 3600 * 24 );
    $mensaje3 = 'Último acceso: '.$_COOKIE['fechaAnterior'];
	$fechaActual = date("d-m-Y h:i:sa");
	//implode("|",$fechaActual);
    //setcookie('fecha', json_encode($fechaActual), time() + 3600 * 24);
    $mensaje2 = 'Fecha actual: ' .date("d-m-Y h:i:sa");
	$fechaAnterior = '' .date("d-m-Y h:i:sa");
	setcookie('fechaAnterior', json_encode($fechaAnterior), time() + 3600 * 24 );
	}

	else {
	$fechaActual = date("d-m-Y h:i:sa");
    setcookie('fecha', json_encode($fechaActual), time() + 3600 * 24);
    $mensaje2 = 'Fecha actual: ' .date("d-m-Y h:i:sa");
	$mensaje3 = 'No hay accesos anteriores';
	$fechaAnterior = '' .date("d-m-Y h:i:sa");
	setcookie('fechaAnterior', json_encode($fechaAnterior), time() + 3600 * 24 );
	
	
	}
?>