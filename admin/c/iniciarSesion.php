<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/admin.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = iniciarSesion($email, $password);

if($result){
	$_SESSION['usuario'] = $result[1];
	$_SESSION['tipoUsuario'] = $result[0];
}
echo $result;
?>