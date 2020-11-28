<?php

require('../modelo/mod_acciones.php');


// --///////// controlador con los siguientes métodos \\\\\\\\\\\\\\\----
/*
        contr_listar($listado,$clave) --> lista VARIAS VISATAS POR INFOR/EMPRESAS.
        contr_unirse ($claveServicio,$claveInformatico)  --> insert en tabla 
        limpiarCaracteres( string ) --> devuelve limpico
        permitirSoloLetrasNumeros( string ) --> devuelve vacio si no es letra o numero
        permitirSoloNumeros( string ) --> devuelve vacio si no es letra o numero
*/
// --------------------- *** ----------------- *** ----------------------------------------
function contr_listar($listado,$clave){
    //SELECT cFechaUnion,eNombre, sAsunto, sFechaFinPublicacion FROM candidatos,servicios,empresas WHERE csClaveservicio=sClave and seClaveEmpresa=eClave and ciClaveInformaticos=33
    switch ($listado) {
        case 'serviciosXinformaticos':
            if (is_numeric($clave)){               
                $ARRAY=listado_vista($listado,$clave);
                return $ARRAY;
            }
            break;
        case 'serviciosXempresas':
                if (is_numeric($clave)){               
                    $ARRAY=listado_vista($listado,$clave);
                    return $ARRAY;
                }
                break;
        default:
            
            break;
    }

}
// --------------------- *** ----------------- *** ----------------------------------------
function contr_unirse($claveServicio,$claveInformatico){

    $claveServicio_=permitirSoloNumeros($claveServicio);
    $claveInformatico_=permitirSoloNumeros($claveInformatico);

    if (is_numeric($claveServicio_) &&  is_numeric($claveInformatico_)){
        
        $respuesta= insert_tabla_candidatos($claveServicio_,$claveInformatico_);
        return $respuesta;
    }else{
        return "caracteres ilegales";
    }
}


// --------------------- *** ----------------- *** ----------------------------------------
function contr_contarRegistros($tipo,$claveServicio){
    $claveServicio_=permitirSoloNumeros($claveServicio);
    $tabla='';
    $where='';

    switch ($tipo) {
        case 'candidatosXoferta':
            $tabla='candidatos';
            $where='csClaveServicio=' . $claveServicio;
        break;
        default:
           return -2;           
    }
    if (is_numeric($claveServicio_)){
        
        $respuesta= select_contar($tabla,$where);
        return $respuesta;
    }else{
        return -3;
    }
}
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