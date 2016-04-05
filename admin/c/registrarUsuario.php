<?php 
	header('Content-Type: text/html; charset=UTF-8'); 

	include("../m/usuario.php");

	$nombre = $_POST['name'];
	$primerApellido = $_POST['firstname'];
	$segundoApellido = $_POST['secondname'];
	$contrasena = $_POST['password'];
	$sexo = $_POST['sex'];
	$correo = $_POST['email'];
	$telefono = $_POST['phone'];
	$celular = $_POST['cel'];
	$calle = $_POST['street'];
	$colonia = $_POST['town'];
	$municipio = $_POST['city'];
	$estado = $_POST['state'];
	$cp = $_POST['cp'];
	$tipoUsuario = 1;
	$status = "Registrado";
	$grupoSeleccionado = $_POST["grupoSeleccionado"];
	$grupos = explode(",", $grupoSeleccionado);

	echo crearUsuario($nombre, $primerApellido, $segundoApellido, $contrasena, $sexo, $correo, $telefono, $celular, $calle, $colonia, $municipio, $estado, $cp, $tipoUsuario, $status, $grupos);
 ?>