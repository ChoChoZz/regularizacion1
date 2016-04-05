<?php 
	header('Content-Type: text/html; charset=UTF-8');

	include("../admin/m/usuario.php");
	include("../admin/m/grupo.php");
	include("asignarNombresDiaMes.php");

	/*Funcion para ver los grupos que se encuentran activos*/
	$result = mostrarGrupo();
	

	/*Caso cuando no hay ningun grupo disponible*/
	if($result == 0){ 
		echo " <label class='block mt15 option option-primary'>
				<span style='color: #FF5722; size:1.5em;'> <strong> No hay grupos disponibles </strong> </span>
			 </label>";
	}
	/*Caso cuando hay grupos disponibles*/
	else{
		while($row = $result->fetch_assoc()) {
	        echo " <label class='block mt15 option option-primary'>
	          <input type='checkbox' name='grupoSeleccionado[]' id='grupoSeleccionado' value='".$row["idGrupo"]."'>
	          <span class='checkbox'></span> <span style='color: #FF5722; size:1.5em;'> <strong>" .  $row["nombre"]. " - $" . $row["costo"]."</strong> </span> </label>" ;

	        //Consulta de las clases asociadas al grupo
	        $result1 = mostrarClases($row["idGrupo"]);

	        //Mostrar las clases asociadas al grupo
	        if ($result1 == 0) {
	        	echo "<br> <strong>No hay clases registradas </strong>";
	        }else{
	        	echo "<br>";
	        	echo "<ul>";
	        	echo "<h6 class='orange titulo-sm'> Clases:</h6>";
	        	while($row1 = $result1->fetch_assoc()) {
	        		//Funcion para asignar el nombre de los dias en ESP
	        		$diaSemana = asignarNombreDia( $row1["diaSemana"] );

	        		//Funcion para asignar el nombre de los meses en ESP
	        		$mes = asignarNombreMes( $row1["mes"] );

	        		echo "<li class='pad10 text-capitalize'>".$diaSemana." ".$row1["numeroDia"]." ".$mes." ".$row1["inicio"]." - ".$row1["fin"]."</li>";
	        		$diaSemana = NULL;
	        	}
	        	echo "</ul>";
	        	echo "<br>";
	        }
	    }
	}
?>