</div>  <!-- class="row" -->
</div>  <!-- class="container" --> 
<nav class="navbar navbar-expand-sm  navbar-dark bg-dark justify-content-end">
    <div class="collapse navbar-collapse" id="navbarText">
        <p id="textopie" class="text-white "></p>
    </div>
    <a class="navbar-brand " data-toggle="tooltip"><?php if (isset($mensaje)) echo $mensaje; ?></a>
    <a class="navbar-brand " href="Conocenos.php" data-toggle="tooltip" title="Conocenos!">Quienes somos</a>
    <a class="navbar-brand " href="Contacto.php" data-toggle="tooltip" title="Contactanos!">Contacto</a>
</div>
</nav>


<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });


    //$("#textopie").text("Dolly Duck");
</script>
<script>
    if (typeof (EventSource) !== "undefined") {
        var source = new EventSource("../controlador/servicio.php");
        source.onmessage = function (event) {
            document.getElementById("textopie").innerHTML = event.data + "<br>";
        };
    } else {
        document.getElementById("textopie").innerHTML = "Sorry, your browser does not support server-sent events...";
    }
</script>