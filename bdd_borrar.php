<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilo.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Add icon library -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </head>
    <body>
	<div class="container">
	<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="bdd_leer.php">Leer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_insertar.php">Insertar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_borrar.php">Borrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_modificar.php">Modificar</a>
  </li>
</ul>
	
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>Empresa</th>
        <th>Informático</th>
        <th>Puntuación</th>
      </tr>
    </thead>
    <tbody>


<?php	

if (isset($_GET["param"])) {	


	echo "<!----conetando-->";
	$mysqli = @new mysqli('localhost', 'root', '', 'tuinformatico');
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}else{
		echo "<!----conexion ok -->";
	}
 

	 $sql = "delete from contratos where cClave= " . $_GET["param"];

	if ($mysqli->query($sql) === TRUE) {
	  echo "Registro borrado";
	} else {
	  echo "Error: " . $sql . "<br>" . $mysqli->error;
	}


}

?>
</tbody>
</table>
</div>
</body>
</html>