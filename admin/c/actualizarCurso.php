<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';

if(!isset($_POST['id'])){
	echo false;
	exit();
}
else{
	$id = $_POST['id'];
}

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

if(isset($_POST['descripcion'])){
	$descripcion = $_POST['descripcion'];
}
else{
	$descripcion = "";
}

if(isset($_FILES['temario'])){
	$temario = $_FILES['temario'];
}
else{
	$temario = null;
}

if(isset($_FILES['imagen'])){
	$imagen = $_FILES['imagen'];
}
else{
	$imagen = null;
}

/* Cambiar el temario y la imagen */
if(isset($temario) && isset($imagen)){
	$datosViejo = verCurso($id);
	$temarioViejo = $datosViejo[3];
	$imagenVieja = $datosViejo[5];
	$linkViejo = $datosViejo[4];
	if(unlink("../assets/temarios/$temarioViejo")){
		if(!move_uploaded_file($temario['tmp_name'], "../assets/temarios/$id.pdf")){
			echo false;
			exit();
		}
	}
	else{
		echo false;
		exit();
	}
	if(unlink("../assets/img/cursos/$imagenVieja")){
		$extension = explode(".", $imagen['name']);
		$extension = $extension[count($extension)-1];
		if(!move_uploaded_file($imagen['tmp_name'], "../assets/img/cursos/$id.$extension")){
			echo false;
			exit();
		}
	}
	else{
		echo false;
		exit();
	}
	$query = "UPDATE `preparac_regularizacion`.`CURSO` SET `nombre`='$nombre', `descripcion`='$descripcion', `temario`='$id.pdf', `subdominio`='$link', `imagen`='$id.$extension' WHERE `idCurso`='$id';";
	editar($query);
	echo rename("../../$linkViejo", "../../$link");
	exit();
}

/* Cambiar solo el temario */
elseif(isset($temario) && !isset($imagen)){
	$datosViejo = verCurso($id);
	$temarioViejo = $datosViejo[3];
	$linkViejo = $datosViejo[4];
	if($temarioViejo != ''){
		if(unlink("../assets/temarios/$temarioViejo")){
			if(!move_uploaded_file($temario['tmp_name'], "../assets/temarios/$id.pdf")){
				echo false;
				exit();
			}
		}
		else{
			echo false;
			exit();
		}
	}
	else{
		if(!move_uploaded_file($temario['tmp_name'], "../assets/temarios/$id.pdf")){
				echo false;
				exit();
			}
	}
	$query = "UPDATE `preparac_regularizacion`.`CURSO` SET `nombre`='$nombre', `descripcion`='$descripcion', `temario`='$id.pdf', `subdominio`='$link' WHERE `idCurso`='$id';";
	editar($query);
	echo rename("../../$linkViejo", "../../$link");
	exit();
}

/* Cambiar solo imagen */
elseif(!isset($temario) && isset($imagen)){
	$datosViejo = verCurso($id);
	$imagenVieja = $datosViejo[5];
	$linkViejo = $datosViejo[4];
	if(unlink("../assets/img/cursos/$imagenVieja")){
		$extension = explode(".", $imagen['name']);
		$extension = $extension[count($extension)-1];
		if(!move_uploaded_file($imagen['tmp_name'], "../assets/img/cursos/$id.$extension")){
			echo false;
			exit();
		}
	}
	else{
		echo false;
		exit();
	}
	$query = "UPDATE `preparac_regularizacion`.`CURSO` SET `nombre`='$nombre', `descripcion`='$descripcion', `subdominio`='$link', `imagen`='$id.$extension' WHERE `idCurso`='$id';";
	editar($query);
	echo rename("../../$linkViejo", "../../$link");
	exit();
}

/* No cambia el temario ni la imagen */
elseif(!isset($temario) && !isset($imagen)){
	$datosViejo = verCurso($id);
	$linkViejo = $datosViejo[4];
	$query = "UPDATE `preparac_regularizacion`.`CURSO` SET `nombre`='$nombre', `descripcion`='$descripcion', `subdominio`='$link' WHERE `idCurso`='$id';";
	editar($query);
	echo rename("../../$linkViejo", "../../$link");
	exit();
}

?>