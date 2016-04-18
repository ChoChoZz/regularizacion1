<?php 
require '../m/pago.php';
require '../m/grupo.php';

$idUsuario = $_POST['id'];

$datosGrupos = gruposDeUsuario($idUsuario);
$idGrupos = $datosGrupos[0];
$grupos = $datosGrupos[1];
$pagos = array();

for($i=0; $i<count($idGrupos); $i++){
	$pagos[$i] = pagosComprobante($idUsuario, $idGrupos[$i]);
}

$idGrupos = implode("¬", $idGrupos);
$grupos = implode("¬", $grupos);
$pagos = implode("¬", $pagos);

echo "$idGrupos*$grupos*$pagos";
?>