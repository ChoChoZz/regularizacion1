<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';

$datos = getCursos();
$descripcion = implode("¬", $datos[2]);
$link = implode("¬", $datos[3]);
$imagen = implode("¬", $datos[4]);
echo "$descripcion@$link@$imagen";


?>