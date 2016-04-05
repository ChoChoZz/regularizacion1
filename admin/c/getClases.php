<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/clase.php';

$id = $_POST['id'];
$datos = verClase($id);

$clase = implode("¬", $datos[0]);
$fecha = implode("¬", $datos[1]);  
$horaInicio = implode("¬", $datos[2]);
$horaFin = implode("¬", $datos[3]);
$idClase = implode("¬", $datos[4]);


echo "$idClase@$clase@$fecha@$horaInicio@$horaFin";
?>