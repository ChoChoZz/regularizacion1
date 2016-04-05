<?php 
	header('Content-Type: text/html; charset=UTF-8'); 

	include("../m/pago.php");

	$idUsuario = $_POST['idUsuario'];
	$result = obtenerPagosUsuario($idUsuario);

	if($result == 0){
	   echo "0";
	 }else{
	  	while($row = $result->fetch_assoc()) {

	  		if($row["monto"] == NULL){
		  		$monto = 0;
		  	}else{
		  		$monto = $row["monto"];
		  	}

		  	$costo = $row["costo"];
		  	$total = $costo - $monto;

		  	if ($costo <= $monto ) {
		  		$filas = "<tr><td>".$row['nombreGrupo']."</td>
			  	<td class='tcenter'><strong> $".$total."</strong></td>
	              <td class='tcenter'>$".$monto."</td>
	              <td class='tcenter'>
	                <div class='btn-group'>
	                  <a disabled onclick='liquidar(".$row['idPago'].", ".$costo.", ".$idUsuario.")' class='btn btn-sm btn-info'>
	                    <i class='imoon fa fa-check text-default'></i>
	                  </a>
	                </div>
	              </td>
	              <td class='tcenter'>
	                <strong>Pagado</strong>
	             </td>
			  	</tr>";
		  	}else{
		  		$filas = "<tr><td>".$row['nombreGrupo']."</td>
			  	<td class='tcenter'><strong> $".$total."</strong></td>
	              <td class='tcenter'>$".$monto."</td>
	              <td class='tcenter'>
	                <div class='btn-group'>
	                  <a onclick='liquidar(".$row['idPago'].", ".$costo.", ".$idUsuario.")' id='btnLiquidar' class='btn btn-sm btn-warning'>
	                    <i class='imoon fa fa-check text-default'></i>
	                  </a>
	                </div>
	              </td>
	              <td class='tcenter'>
	                <div class='section'>
	                  <div class='smart-widget sm-right smr-3 0'>
	                    <label class='field'>
	                      <input type='number' min='1' name='cantidad".$row['idPago']."' id='cantidad".$row['idPago']."' class='gui-input'
	                      placeholder='0.00'>
	                    </label>
	                    <button type='submit' class='button btn-info' id='btnRegistrar' onclick='pagar(".$row['idPago'].")'>
	                     <i class='fa fa-dollar'></i>
	                   </button>
	                 </div>
	               </div>
	             </td>
			  	</tr>";
		  	}


		    echo $filas;
		}
	}

 ?>