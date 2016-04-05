<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/sucursal.php';

$id = $_GET['id'];

$datos = verSucursal($id);

$id = $datos[0];
$nombre = $datos[1];
$descripcion = $datos[2];
$telefonos = $datos[3]." y ". $datos[4];
$direccion = $datos[5];
$capacidad = $datos[6];
$croquis = $datos[7];

$_SESSION['idSucursal'] = $id;
$_SESSION['nombreSucursal'] = $nombre; 
$_SESSION['descripcionSucursal'] = $descripcion;
$_SESSION['telefonosSucursal'] = $telefonos;
$_SESSION['direccionSucursal'] = $direccion;
$_SESSION['capacidadSucursales'] = $capacidad;
$_SESSION['croquisSucursales'] = $croquis;

header('Location: ../v/sucursal/editBuilding.php');
?>