function fverCandidatos(claveOferta,oferta){
		location.href = 'misOfertasCandidatos.php?oferta=' + claveOferta + '&ofertadescripcon=' + oferta; 
}

//marca el menú como activo
document.getElementById("menu_cabecera_mis_oft_a").className  = "nuestromenus_activado";		