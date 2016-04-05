<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';


$datos = getCursos();
$id = implode("¬", $datos[0]);
$nombre = implode("¬", $datos[1]);
$descripcion = implode("¬", $datos[2]);
$subdominio = implode("¬", $datos[3]);

echo "$id@$nombre@$descripcion@$subdominio";
?>