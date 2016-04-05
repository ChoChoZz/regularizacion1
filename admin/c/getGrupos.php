<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';

$datos = getGrupos();
$id = implode("¬", $datos[0]);
$nombre = implode("¬", $datos[1]);
$capacidad = implode("¬", $datos[2]);
$status = implode("¬", $datos[6]);
$registrados = implode("¬", $datos[7]);
$pagados = implode("¬", $datos[8]);

echo "$id@$nombre@$capacidad@$status@$registrados@$pagados";
?>