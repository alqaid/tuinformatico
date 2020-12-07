<?php
//echo  '{"results":[{"oferta":"prueba1"},{"oferta":"prueba2"},{"oferta":"prueba3"},{"oferta":"prueba4"},{"oferta":"prueba5"},{"oferta":"prueba6"}]}';

require('../modelo/mod_acciones.php');
$ARRAY=vista("tablaservicios","sAsunto as oferta","","sClave desc");

echo '{"results":'. json_encode($ARRAY) .'}';
?>