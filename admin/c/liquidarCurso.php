<?php 
	header('Content-Type: text/html; charset=UTF-8'); 

	include("../m/pago.php");

	$idPago = $_POST['idPago'];
	$monto = $_POST['monto'];
	$idUsuario = $_POST['idUsuario'];
	
	$result = liquidarPago($idPago, $monto);
	if($result == 1 || $result == "1"){
	   echo "1";
	 }else{
	 	echo "0";
	}

?>