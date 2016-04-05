<?php 
	header('Content-Type: text/html; charset=UTF-8');

	include("../admin/m/usuario.php");
	include("../admin/m/grupo.php");
	include("../admin/m/curso.php");

	function mostrarGruposAlumnoC($idUsuario){
		$grupos = NULL;
		$resultado = mostrarGruposAlumno($idUsuario);

		if ($resultado == 0) {
			$grupos = "sin grupo registrado";
		}else{

			for ($i=0; $i <count($resultado) ; $i++) {
				$result1 = obtenerInformacionGrupo($resultado[$i]);

	        	$row1 = $result1->fetch_assoc();

	        	if($grupos == NULL){
	        		$grupos = $row1["nombre"];
	        	}else{
	        		if ($i == (count($resultado)-1) ) {
	        			$grupos .= " y ".$row1["nombre"];
	        		}else{
	        			$grupos .= ", ".$row1["nombre"];
	        		}
	        	}
	    	}
		}

	return $grupos;
	}

	function mostrarCursosC($idUsuario){
		$cursos = NULL;
		$resultado = mostrarGruposAlumno($idUsuario);

		if ($resultado == 0) {
			$cursos = "sin grupo registrado";
		}else{
			for ($i=0; $i <count($resultado) ; $i++) {
				$result1 = obtenerInformacionGrupo($resultado[$i]);
	        	$row1 = $result1->fetch_assoc();
	        	$grupos[] = $row1["CURSO_idcurso"];
	    	}

	    	for ($i=0; $i <count($grupos) ; $i++) { 
	    		$resultado2 = obtenerInformacionCurso($grupos[$i]);
	    		$row3 = $resultado2->fetch_assoc();

	        	if($cursos == NULL){
	        		$cursos = $row3["nombre"];
	        	}else{
	        		if ($i == (count($resultado)-1) ) {
	        			$cursos .= " y ".$row3["nombre"];
	        		}else{
	        			$cursos .= ", ".$row3["nombre"];
	        		}
	        	}
	    	}
		}
		
	return $cursos;
	}

	function mostrarCosto($idUsuario){
		$costo = NULL;

		$resultado = mostrarGruposAlumno($idUsuario);

		if ($resultado == 0) {
			$costo = "sin costo";
		}else{
			for ($i=0; $i <count($resultado) ; $i++) {
				$result1 = obtenerInformacionGrupo($resultado[$i]);
	        	$row1 = $result1->fetch_assoc();
	        	$grupos[] = $row1["costo"];
	    	}

	    	for ($i=0; $i <count($grupos) ; $i++) { 
	    		$costo = $grupos[$i];

	        	if($cursos == NULL){
	        		$costo = $grupos[$i];
	        	}else{
	        		$costo = $grupos[$i] + $costo;
	        	}
	    	}
		}

		return $costo;
	}
?>