<?php
// --///////// controlador con los siguientes métodos \\\\\\\\\\\\\\\----
/*
        contr_unirse ($claveServicio,$claveInformatico)  --> insert en tabla 
        limpiarCaracteres( string ) --> devuelve limpico
        permitirSoloLetrasNumeros( string ) --> devuelve vacio si no es letra o numero
        permitirSoloNumeros( string ) --> devuelve vacio si no es letra o numero
*/
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
function contr_unirse($claveServicio,$claveInformatico){

    $claveServicio_=permitirSoloNumeros($claveServicio);
    $claveInformatico_=permitirSoloNumeros($claveInformatico);

    if (is_numeric($claveServicio_) &&  is_numeric($claveInformatico_)){
        require('../modelo/mod_acciones.php');
        $respuesta= insert_tabla_candidatos($claveServicio_,$claveInformatico_);
        return $respuesta;
    }else{
        return "caracteres ilegales";
    }
}


// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------
// --------------------- *** ----------------- *** ----------------------------------------

function limpiarCaracteres($string){
    $respuesta='';
    $respuesta=strip_tags($string);
    $respuesta=trim($respuesta);
    $respuesta=stripcslashes($respuesta);
    $respuesta=htmlspecialchars($respuesta);
    $respuesta=htmlentities($respuesta);
    return $respuesta;
}

function permitirSoloLetrasNumeros($string){
    $respuesta='';
    $respuesta= limpiarCaracteres($string);
    if (preg_match ("/^[a-zA-Z0-9]+$/", $respuesta)) {
        return $respuesta;
    }else{
        return '';
    }
}

function permitirSoloNumeros($string){
    $respuesta='';
    $respuesta= limpiarCaracteres($string);
    if (preg_match ("/^[0-9]+$/", $respuesta)) {
        return $respuesta;
    }else{
        return '';
    }
}
// --------------------- *** ----------------- *** ----------------------------------------
?>