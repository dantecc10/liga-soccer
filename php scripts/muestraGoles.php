<?php
include "conexión.php";

$respuesta = $_GET['pedido'];

$consulta = "SELECT * FROM `test_goal`";
$resultado = mysqli_query($conexión['ortodoxa'], $consulta);

while ($columna = mysqli_fetch_all($resultado)) {
    echo $columna['gol'];
}
