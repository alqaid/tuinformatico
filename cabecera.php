   <?php
session_start();
 
if(!isset($_SESSION['eClave'])){
	
	echo "<script>";
	echo "empresa();";
	echo "</script>";
} else if(!isset($_SESSION['iClave'])){
	
	echo "<script>";
	echo "informatico();";
	echo "</script>";
}else{
	// Show users the page!
}
?>

   <!-- fila  superior  herramientas -->
        <nav class="navbar navbar-expand-sm  navbar-dark bg-dark justify-content-end">
            <a 
                <div class="container mt-3">
				
                    <svg height="50" width="500">
					<a xlink:href="index.php">
                    <text fill="#28a745" font-size="50" font-family="Verdana" x="10" y="40">Tuinformatico.com</text>
                    Error de logo.
					</a>
                    </svg>
					
					<form action="/action_page.php" class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar profesionales!">

                        <span class="btn btn-success" type="submit" title="Buscar Profesionales"><i class="material-icons">search</i></span>
                    </form>

                    <img src="https://www.vayagif.com/images/banano.gif" alt="Mascota">
					
					<svg id="nombre" style="display:none" height="50" width="200">
                    <text fill="#28a745" font-size="20" font-family="Verdana" x="10" y="40">Tuinformatico.com</text>
                    Error de logo.
					</a>
                    </svg>
					
					<a type="button" class="navbar-brand" data-toggle="modal" data-target="#registro"> Registrarse </a>
					
                    <a type="button" class="navbar-brand" data-toggle="modal" data-target="#identificacion"> Identificarse </a>
            </a>
        </nav>

        <!-- carrusel -->
        <a href="index.php">
            <img src="images/tuinformatico2.png" alt="tuinformatico logo" width="100%">
        </a>
        <!--  fin carrusel  -->

<nav >
	<ul class="nuestromenu">
	<!-- ojo: EN CADA PAGINA LLAMAMOS 
		document.getElementById("menu_cabecera_bus_oft").className  = "nuestromenus_activado";
		PARA CAMBIAR EN ENLACE ACTIVO-->
		  <li><a id="menu_cabecera_home" href="index.php">Informaticos</a></li>
		  <li><a id="menu_cabecera_bus_oft" href="buscarofertas.php">Ofertas</a></li>
		  <li><a id="menu_cabecera_reg_con" style="display:none" href="nuevocontrato.php">Nueva Oferta</a></li>
		  <li><a id="menu_cabecera_datos" style="display:none" href="buscarofertas.php">Cambiar datos</a></li>
		  <li><a id="menu_cabecera_cerrar_Session" style="display:none" href="buscarofertas.php">Cerrar sesion</a></li>
	</ul> 
</nav>



        <br>
        <br>
		    <div class="container">
            <div class = "row">

        <script>
		function informatico(){  
		document.getElementById("menu_cabecera_datos").style = "display:inline";
		document.getElementById("menu_cabecera_cerrar_Session").style = "display:inline";
		document.getElementById("menu_cabecera_reg_con").style = "display:none";
		document.getElementById("menu_cabecera_datos").href = "index.php";
		document.getElementById("nombre").style = "display:inline";
		}
		</script>
		
		<script>
		function empresa(){  
		document.getElementById("menu_cabecera_datos").style = "display:inline";
		document.getElementById("menu_cabecera_cerrar_Session").style = "display:inline";
		document.getElementById("menu_cabecera_reg_con").style = "display:inline";
		document.getElementById("menu_cabecera_datos").href = "index.php";
		document.getElementById("nombre").style = "display:inline";
		}
		</script>