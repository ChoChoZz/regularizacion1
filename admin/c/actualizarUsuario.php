<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/usuario.php';

$idUsuario = $_SESSION['idUsuarioEditar'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$sex = $_POST['sex'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$cel = $_POST['cel'];
$password = $_POST['password'];
$street = $_POST['street'];
$town = $_POST['town'];
$city = $_POST['city'];
$state = $_POST['state'];
$cp = $_POST['cp'];
$cursos = $_POST['cursos'];

editarUsuario($idUsuario, $name, $firstname, $secondname, $sex, $password, $mail, $phone, $cel, $cp, $state, $city, $town, $street, $cursos);
echo true;
?>