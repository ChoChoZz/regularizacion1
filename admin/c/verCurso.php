<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';

unset($_SESSION['nombreCurso']);
unset($_SESSION['descripcionCurso']);
unset($_SESSION['temarioCurso']);
unset($_SESSION['urlCurso']);
unset($_SESSION['imagenCurso']);


$id = $_GET['id'];

$curso = verCurso($id);
if(isset($curso)){
	$_SESSION['idCurso'] = $curso[0];
	$_SESSION['nombreCurso'] = $curso[1];
	$_SESSION['descripcionCurso'] = $curso[2];
	$_SESSION['temarioCurso'] = $curso[3];
	$_SESSION['urlCurso'] = $curso[4];
	$_SESSION['imagenCurso'] = $curso[5];
	header('Location: ../v/curso/viewOnlyCourse.php');
}
else{
	header('Location: ../v/curso/viewCourse.php');
}
?>