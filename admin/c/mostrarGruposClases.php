<?php 
	header('Content-Type: text/html; charset=UTF-8');

	include("../m/usuario.php");
	include("../m/grupo.php");
	include("asignarNombresDiaMes.php");

	$idCurso = $_POST["idCurso"];

	/*Funcion para ver los grupos que se encuentran activos*/
	$result = mostrarGruposClase($idCurso);


	/*Caso cuando no hay ningun grupo disponible*/
	if($result == 0){ 
		echo "<h3 style='color: #FF5722; size:1.9em;'> <strong> No hay grupos disponibles </strong> </h3>";
	}
	/*Caso cuando hay grupos disponibles*/
	else{
		while($row = $result->fetch_assoc()) {
	        echo " <span style='color: #FF5722; font-size:1.3em;'> <strong>" .  $row["nombre"]. " - $" . $row["costo"]."</strong> </span>" ;
	        echo "<br>";
	        echo "<br>";
	        //Consulta de las clases asociadas al grupo
	        $result1 = mostrarClases($row["idGrupo"]);

	        //Mostrar las clases asociadas al grupo
	        if ($result1 == 0) {
	        	echo "<br> <strong>No hay clases registradas </strong>";
	        }else{
	        	echo "<span style='font-size:1.1em;' class='orange titulo-sm'> <strong>Clases: </strong></span>";
	        	echo "<br>";
	        	echo "<br>";
	        	while($row1 = $result1->fetch_assoc()) {
	        		//Funcion para asignar el nombre de los dias en ESP
	        		$diaSemana = asignarNombreDia( $row1["diaSemana"] );

	        		//Funcion para asignar el nombre de los meses en ESP
	        		$mes = asignarNombreMes( $row1["mes"] );

	        		echo "- <span class='pad10 text-capitalize'>".$diaSemana." ".$row1["numeroDia"]." ".$mes." ".$row1["inicio"]." - ".$row1["fin"]."</span>";
	        		$diaSemana = NULL;
	        		echo "<br>";
	        	}
	        	
	        }
	    }
	}
?>