<?php 
	header('Content-Type: text/html; charset=UTF-8'); 

	include("../m/usuario.php");

	$correo = $_POST['correo'];

	echo buscarCorreo($correo);
 ?>