//var spanObjetivo = "";
//var cantidadObjetivoActual = 0;

function ajax() {
    var spanObjetivo = "divTarget";

    var urlCompuesta;
    var urlVariables = "";// = ("?id=" + id + "&cantidad=" + cantidad + "&operación=" + operación), uriPHP = "php scripts/AltasBajas.php";
    urlCompuesta = ("php scripts/muestraGoles.php?pedido=goles");

    //Petición AJAX
    var xmlhttp = new XMLHttpRequest();
    /*     xmlhttp.onreadystatechange = function () {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById(spanObjetivo).innerHTML = this.responseText;
    
            }
        }; */

    //Procesamiento AJAX
    xmlhttp.open("GET", urlCompuesta, true);
    console.log("La cantidad actual de goles es de ");
    console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
    //console.log("ModoFiltro: " + ModoFiltro);
    xmlhttp.send();

}

setInterval(ajax, 5000);