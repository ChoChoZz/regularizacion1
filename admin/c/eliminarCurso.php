<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/curso.php';
require '../m/grupo.php';


$id = $_POST['id'];
$existeGrupo = buscarGrupoPorCurso($id);
if($existeGrupo){
	echo false;
	exit();
}
$curso = verCurso($id);
if(isset($curso)){
	if(isset($curso[3])){
		unlink("../assets/temarios/".$curso[3]);
	}
	if(isset($curso[5])){
		if(unlink("../assets/img/cursos/".$curso[5])){
			if(unlink("../../".$curso[4]."/index.html") && unlink("../../".$curso[4]."/style.css")){
				if(rmdir("../../".$curso[4])){
					if(eliminarCurso($id)){
						echo true;
						exit();
					}
					else{
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
		echo false;
		exit();
	}
}
else{
	echo false;
	exit();
}

?>