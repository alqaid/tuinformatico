	<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['eClave']) && isset($_COOKIE['eClave'])) {
    $_SESSION['eClave'] = $_COOKIE['eClave'];
    $_SESSION['eNombre'] = $_COOKIE['eNombre'];
} else if (!isset($_SESSION['iClave']) && isset($_COOKIE['iClave'])) {
    $_SESSION['iClave'] = $_COOKIE['iClave'];
    $_SESSION['iNombre'] = $_COOKIE['iNombre'];
}

if (isset($_SESSION['eClave']) || isset($_SESSION['iClave'])) {
    header('Location: Error.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TU INFORMÁTICO - NUEVO CONTRATO</title>

        <?php
        require('../vista/head.php');
        ?>
    </head>
    <body>
        <?php
        require('../vista/cabecera.php');
        ?>
        <main class=" col-9 "   >
            <!-- SITIO LIBRE PARA INCLUIR -->


<script type="text/javascript" src="../vista/js/registroInformatico.js"></script>	
			
			<?php
			require('../controlador/saneamientoRegistroInformatico.php');
			?>
			
            <FORM onSubmit="return validate()" ACTION="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" METHOD="POST">
                <div class="grid-container">
                    <div class="row">
					<div class="col-sm">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" width="250" maxlength="64" id="Email" placeholder="Introduzca su email" name="Email" required><br><br>
                        <label for="P1">Contraseña</label><br>
                        <input type="password" class="form-control" maxlength="64" id="P1" placeholder="Indroduzca su contraseña" name="Contraseña" required><br><br>
                        <label for="P2">Repita su contraseña</label><br>
                        <input type="password" class="form-control" maxlength="64" id="P2" placeholder="Repita su contraseña" name="Contraseña2" required><br><br>
                        <label for="N">Nombre</label><br>
                        <input type="text" id="N" class="form-control" placeholder="Introduzca su nombre" maxlength="64" name="Nombre" required><br><br>
						<label for="A">Apellidos</label><br>
                        <input type="text" id="A" class="form-control" placeholder="Introduzca su apellido" maxlength="64" name="Apellido" required><br><br>
                        <label for="dni">DNI</label><br>
                        <input type="text" id="dni" class="form-control" name="dni" placeholder="Introduzca su DNI" required pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra" /><br><br>
                   </div>
				   <div class="col-sm">
						<label for="Nacimiento">Fecha de nacimiento:</label><br>
                        <input type="date" class="form-control" id="Nacimiento" name="birthday"><br><br>
                        <label for="phone">Numero de telefono:</label><br>
                        <input type="tel" class="form-control" maxlength="64" id="phone" name="Telefono" required pattern="[0-9]{9}" title="Escriba 9 numeros. Ejemplo 000000000"><br><br>
                        <label for="M">Municipio</label><br>
                        <input type="text" class="form-control" required maxlength="64" id="M" placeholder="Introduzca su municipio" name="municipio"><br><br>
                        <label for="p">Provinvia</label><br>
                        <input type="text" class="form-control" required maxlength="64" id="p" placeholder="Introduzca su provincia" name="provincia"><br><br>
                        <label for="cp">Codigo postal</label><br>
                        <input type="text" class="form-control" required id="cp" required pattern="[0-9]{5}" placeholder="Introduzca su codigo postal" name="cp"><br><br>
                        <label for="pa">Pais</label><br>
                        <input type="text" class="form-control" required id="pa" maxlength="64" placeholder="Introduzca su pais" name="pais"><br><br>
                    </div>
                </div>
				  </div>
                <label for="dp">Intente venderse a si mismo en pocas palabras</label><br>
                <textarea required id="dp" maxlength="200" rows="5" cols="100" maxlength="200" name="descripcionP" placeholder="Introduzca una breve descripcion con un maximo de 200 palabras"></textarea><br><br>
                <label for="dg">Describase y diga que conocimientos tiene</label><br>
                <textarea required id="dg" maxlength="500" rows="10" cols="100" name="descripcionG" placeholder="Introduzca una descripcion de usted y conocimientos (Maximo 500 caracteres)"></textarea><br><br>
                <input type="submit" class="btn btn-success"><br><br>
            </form>



            <!-- FIN SITIO LIBRE PARA INCLUIR -->
        </main> <!-- class="container" -->
        <aside class=" col-3 "   > <!-- BANNER -->
            <h2>Compartenos en tus redes sociales<h2><br>
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://tuinformatico.com">
			<img   src="images/logo_facebook.png" alt=""  width="75px" height="75px">
			</a>
			<a href="https://twitter.com/intent/tweet?text=&url=https://tuinformatico.com&hashtags=tuinformatico">
			<img   src="images/logo_twitter.jpg" alt=""  width="75px" height="75px">
			</a>
			<a href="https://api.whatsapp.com/send?text=Encuentra a tu informatico en este enlace: https://tuinformatico.com">
			<img   src="images/logo_whatsapp.png" alt=""  width="75px" height="75px">
			</a><br><br><br>
			<img src="images/PublicidadRonaldo.jpg" width="100%" height="50%" usemap="#kfc">
			<h6>Ronaldo no para de comer el pollo más rico del mundo, descubre las mejores ofertas para el pollo más crujiente</h6>
			<img src="images/cr7kfc.gif" usemap="#kfc">
			<h6>Con el código cr7 puedes conseguir un 50% de descuento en nuestro nuevo menú: CrujienteR7. ¡No esperes más!</h6>
			<a target="_blank" href="https://www.kfc.es/" class="more-link">¡Sacia tu hambre!</a>
			<map name="kfc">
				<area shape="rect" coords="0,0,600,350" alt="Suuuu" href="https://www.kfc.es/">
			</map>
        </aside> <!-- FIN BANNER -->
                    <?php
                    require('pie.php');
                    ?>
                    <?php
							require('Modales.php');
							?>
                    </body>
                    </html>