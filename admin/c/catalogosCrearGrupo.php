<?php 
header('Content-Type: text/html; charset=UTF-8'); 
require '../m/grupo.php';

$datos = catalogosCrearGrupo();
$idSucursal = implode("¬", $datos[0]);
$sucursales = implode("¬", $datos[1]);
$idCurso = implode("¬", $datos[2]);
$cursos = implode("¬", $datos[3]);

echo "$idSucursal@$sucursales@$idCurso@$cursos";
?>