function fpagoTPV(iClave,sClave){
		location.href = 'pago.php?iClave=' + iClave + '&sClave=' + sClave; 
}
//marca el menú como activo	
document.getElementById("menu_cabecera_mis_oft_a").className  = "nuestromenus_activado";	