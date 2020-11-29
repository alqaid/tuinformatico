<?php

require('../modelo/mod_acciones.php');


// --///////// controlador con los siguientes métodos \\\\\\\\\\\\\\\----
/*
        contr_listar($listado,$clave) --> lista VARIAS VISATAS POR INFOR/EMPRESAS.
        contr_unirse ($claveServicio,$claveInformatico)  --> insert en tabla 
        limpiarCaracteres( string ) --> devuelve limpico
        permitirSoloLetrasNumeros( string ) --> devuelve vacio si no es letra o numero
        permitirSoloNumeros( string ) --> devuelve vacio si no es letra o numero

    OTRO:
        VerificarPagoPAYPAL(SESION,CLAVEDEVUELTA)
*/
// --------------------- *** ----------------- *** ----------------------------------------
function contr_listar($listado_,$clave_,$clave2_){
    //SELECT cFechaUnion,eNombre, sAsunto, sFechaFinPublicacion FROM candidatos,servicios,empresas WHERE csClaveservicio=sClave and seClaveEmpresa=eClave and ciClaveInformaticos=33
    $listado=permitirSoloLetrasNumeros($listado_);
    $clave=permitirSoloNumeros($clave_);
    $clave2=permitirSoloNumeros($clave2_);
    //echo $listado .' ' .$clave .' ' .$clave1 ;
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
        case 'cantidatosXoferta':           
                if (is_numeric($clave) && is_numeric($clave2)){            
                        $campos="cFechaUnion,iNombre,iTelefono,iEmail,iDescripcionCorta,sClave,iClave"; //
                        $where="and seClaveEmpresa=" . $clave2 . " and csClaveServicio=" . $clave;
                        $order="cFechaUnion ASC";
                        //echo 'cantidatosXoferta: ' . $campos .' ' .$where .' ' .$order ;
                        $ARRAY=vista($listado,$campos,$where,$order);
                        return $ARRAY;
                    }
                break;     
        case 'contratarinformatico':           
            if (is_numeric($clave) && is_numeric($clave2)){            
                    $campos="iNombre,iTelefono,iEmail,iDescripcionCorta,sSalario,sClave,iClave,iDNI"; //
                    $where="and iClave=" . $clave . " and csClaveServicio=" . $clave2;
                    $order="cFechaUnion ASC";
                    //echo 'cantidatosXoferta: ' . $campos .' ' .$where .' ' .$order ;
                    $ARRAY=vista($listado,$campos,$where,$order);
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
function VerificarPagoPAYPAL($clave1,$clave2){
    $mensaje= "";
    $clave1v=permitirSoloNumeros($clave1);
    $clave2v=permitirSoloNumeros($clave2);
    if ($clave1v == $clave2v){
        $mensaje= "OK";
    }
    return $mensaje;
}

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