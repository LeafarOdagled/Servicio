<?php
include 'conecta.php';
$numbol = $_GET["numerobol"];
$co = mysqli_connect('localhost', 'root') or die('NO');
$db = mysqli_select_db($co, "servicio") or die('no bd');


$consulta = "SELECT * from usuario where Boleta='" . $numbol . "'";
$consulta2 = "SELECT * FROM usuario";
$consulta3 = "SELECT * FROM constancia";

$result = mysqli_query($co, $consulta) or die('No consulta');
$mostrar = mysqli_fetch_array($result);

$guardar = $conecta->query($consulta2);


















?>