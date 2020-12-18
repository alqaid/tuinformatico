function f_abrirDetalleInformatico(claveServicio)  {    
		// ajax consultar UN SERVICIO
			var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  var xmlDoc = this.responseXML;
				  
				  document.getElementById("modal_detalle_informatico_nombre").innerHTML = xmlDoc.getElementsByTagName('nombre')[0].childNodes[0].nodeValue;
				  var asunto='<p>' +  xmlDoc.getElementsByTagName('municipio')[0].childNodes[0].nodeValue + '';
				  asunto += ' (' +  xmlDoc.getElementsByTagName('provincia')[0].childNodes[0].nodeValue + ')</p>';
				  asunto += '<p><b>' +  xmlDoc.getElementsByTagName('descripcion_corta')[0].childNodes[0].nodeValue + '</b></p>';
				  asunto += '<p><b>Descripcion:</b> ' +  xmlDoc.getElementsByTagName('descripcion')[0].childNodes[0].nodeValue + '</p>';
				  
				  document.getElementById("modal_detalle_informatico_detalle").innerHTML = asunto;
								 
				  console.log('RESPUESTA XML OK');
				}
			  };
			  xhttp.open("GET", "../controlador/xml_detalle_informatico.php?clave=" + claveServicio, true);
			  xhttp.send();
		
	
	// MOSTRAR EL SERVICIO
		 	  document.getElementById('modal_detalle_informatico').style.display='block';
			  document.getElementById('modal_detalle_informatico').style.opacity=1;
			  document.getElementById('cabecera_php_contenedor').style.opacity=0.3; 
    }	

function f_cancel_accion_informatico()  {    
		 	  document.getElementById('modal_detalle_informatico').style.display='none';
			  document.getElementById('modal_detalle_informatico').style.opacity=1;
			  document.getElementById('cabecera_php_contenedor').style.opacity=1; 
    }