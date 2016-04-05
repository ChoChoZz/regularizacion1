<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';
require 'crearCarpetaCurso.php';

if(!isset($_POST['nombre'])){
	echo false;
	exit();
}
else{
	$nombre = $_POST['nombre'];
}

if(!isset($_POST['link'])){
	echo false;
	exit();
}
else{
	$link = urldecode($_POST['link']);
}

if(!isset($_FILES['imagen'])){
	echo false;
	exit();
}
else{
	$imagen = $_FILES['imagen'];
}

if(isset($_POST['descripcion'])){
	$descripcion = $_POST['descripcion'];
}
else{
	$descripcion = null;
}

if(isset($_FILES['temario'])){
	$temario = $_FILES['temario'];
}
else{
	$temario = null;
}

$dimensionImagen = getimagesize($imagen['tmp_name']);
if($dimensionImagen[0] != 400 && $dimensionImagen[1] != 300){
	echo false;
	exit();
}

if(isset($temario)){
	if(filesize($temario['tmp_name']) > 16777216){
		echo false;
		exit();
	}
}

$id = getProxIdCurso();

if(!$id){
	echo false;
	exit();
}

if(isset($temario)){
	$extensionImagen = explode(".", $imagen['name']);
	$extensionImagen = $extensionImagen[count($extensionImagen)-1];
	$guardarImagen = move_uploaded_file($imagen['tmp_name'], "../assets/img/cursos/$id.$extensionImagen");
	if($guardarImagen){
		$guardarTemario = move_uploaded_file($temario['tmp_name'], "../assets/temarios/$id.pdf");
		if($guardarTemario){
			$guardarRegistro = agregarCurso($nombre, $descripcion, "$id.pdf", $link, "$id.$extensionImagen");
			if($guardarRegistro){
				$carpeta = main($id, $nombre, $descripcion, "$id.pdf", $link, "$id.$extensionImagen");
				if($carpeta){
					echo true;
					exit();
				}
				else{
					unlink("../assets/img/cursos/$id.$extensionImagen");
					unlink("../assets/temarios/$id.pdf");
					elminarCurso($id);
					echo false;
					exit();
				}
			}
			else{
				unlink("../assets/img/cursos/$id.$extensionImagen");
				unlink("../assets/temarios/$id.pdf");
				echo false;
				exit();
			}
		}
		else{
			unlink("../assets/img/cursos/$id.$extensionImagen");
			echo(false);
			exit();
		}
	}
	else{
		echo false;
		exit();
	}
}
else{
	$extensionImagen = explode(".", $imagen['name']);
	$extensionImagen = $extensionImagen[count($extensionImagen)-1];
	$guardarImagen = move_uploaded_file($imagen['tmp_name'], "../assets/img/cursos/$id.$extensionImagen");
	if($guardarImagen){
		$guardarRegistro = agregarCurso($nombre, $descripcion, null, $link, "$id.$extensionImagen");
		if($guardarRegistro){
			$carpeta = main($nombre, $descripcion, null, $link, "$id.$extensionImagen");
			if($carpeta){
				echo true;
				exit();
			}
			else{
				unlink("../assets/img/cursos/$id.$extensionImagen");
				eliminarCurso($id);
				echo false;
				exit();
			}
		}
		else{
			unlink("../assets/img/cursos/$id.$extensionImagen");
			echo false;
			exit();
		}
	}
	else{
		echo false;
		exit();
	}
}
?>