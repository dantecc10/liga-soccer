<?php
$conexión[1] = mysqli_connect("localhost", "liga-soccer", "soccerLeague22!!", "soccer_league");
$conexión['ortodoxa'] = $conexión[1];
$conexión[0] = new mysqli("localhost", "liga-soccer", "soccerLeague22!!", "soccer_league");
$conexiónPDO = $conexión[0];
$conexión['PDO'] = $conexión[0];