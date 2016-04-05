<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/sucursal.php';

$datos = getSucursales();
$idSucursal = implode("¬", $datos[0]);
$nombre = implode("¬", $datos[1]);
$direccion = implode("¬", $datos[2]);
$telefono = implode("¬", $datos[3]);

echo "$idSucursal@$nombre@$direccion@$telefono";
?>