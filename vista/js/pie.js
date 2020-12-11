$(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
});



 
if (typeof (EventSource) !== "undefined") {
        var source = new EventSource("../controlador/servicio.php");
        source.onmessage = function (event) {
            document.getElementById("textopie").innerHTML = event.data + "<br>";
        };
} else {
        document.getElementById("textopie").innerHTML = "Sorry, your browser does not support server-sent events...";
}