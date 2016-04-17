<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/usuario.php';
require '../m/grupo.php';

$id = $_POST['id'];

$datos = verUsuario($id);

if(!$datos){
	echo false;
	exit();
}

$gruposUsuario = gruposDeUsuario($id);
if(!$gruposUsuario[0][0]){
	echo false;
	exit();
}

$nombre = $datos[0];
$primerApellido = $datos[1];
$segundoApellido = $datos[2];
$sexo = $datos[3];
$correo = $datos[4];
$telefono = $datos[5];
$celular = $datos[6];
$cp = $datos[7];
$estado = $datos[8];
$municipio = $datos[9];
$colonia = $datos[10];
$calle = $datos[11];
$status = $datos[12];
$gruposUsuario = implode("#", $gruposUsuario[1]);
echo "$nombre $primerApellido $segundoApellido|$sexo|$correo|$telefono|$celular|$calle $colonia $municipio $estado $cp|$status|$gruposUsuario";
?>