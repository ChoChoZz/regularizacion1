<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../fpdf/fpdf.php';
require '../m/usuario.php';
require '../m/grupo.php';
require '../m/pago.php';
require '../m/clase.php';

class PDF extends FPDF{
	function Header(){
		$this->Image('../fpdf/img/Comprobante.jpg', 170, 0, 40);
		$this->SetFont('OpenSans-Regular', '', 15);
		$this->Cell(80);
		$this->Ln(20);
	}

}

$idUsuario = $_GET['idUsuario'];
$datosUsuario = verUsuario($idUsuario);
$nombre = $datosUsuario[0];
$primerAp = $datosUsuario[1];
$segundoAp = $datosUsuario[2];

$grupos = explode("¬", $_GET['grupos']);
$datosGrupo = array();
$nombresGrupo = array();
for($i=0; $i<count($grupos); $i++){
	$datosGrupo[$i] = verGrupo($grupos[$i]);
	$nombresGrupo[$i] = $datosGrupo[$i][2];
}

$pagos = 0;

for($i=0; $i<count($grupos); $i++){
	$pagos += pagosComprobante($idUsuario, $grupos[$i]);
}

$pdf = new PDF();
$pdf->AddFont('OpenSans-Regular', '', 'OpenSans-Regular.php');
$pdf->AddFont('OpenSans-ExtraBold', '', 'OpenSans-ExtraBold.php');
$pdf->AddFont('OpenSans-Bold', '', 'OpenSans-Bold.php');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('OpenSans-Regular', '', 25);
$pdf->Cell(61, 0, utf8_decode('Regularización'));
$pdf->SetFont('OpenSans-ExtraBold', '', 25);
$pdf->Cell(18, 0, 'IPN');
$pdf->SetFont('OpenSans-Bold', '', 25);
$pdf->Cell(15, 0, '2016');
$pdf->Ln(20);

$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(0, 0, "$nombre $primerAp $segundoAp:");
$pdf->Ln(15);
$pdf->SetFont('OpenSans-Regular', '', 12);
if(count($grupos) > 1){
	$pdf->Cell(152, 0, "Te damos una cordial bienvenida al curso de ".utf8_decode('regularización'). " en las materias de: ");
}
elseif (count($grupos) == 1) {
	$pdf->Cell(152, 0, "Te damos una cordial bienvenida al curso de ".utf8_decode('regularización'). " en la materia de: ");
}
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Ln(10);

for($i=0; $i<count($nombresGrupo); $i++){
	$pdf->Cell(3, 0, utf8_decode('°'));
	$pdf->MultiCell(500, 0, $nombresGrupo[$i]);
	$pdf->Ln(7);
}
$pdf->Ln(5);

$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(61, 0, 'Hemos recibido la cantidad de ');
$pdf->SetTextColor(255, 0 , 0); //Color rojo de letra
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(14, 0, '$'.$pagos);
$pdf->SetTextColor(0, 0 , 0);
$pdf->SetFont('OpenSans-Regular', '', 12);


$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(10, 0, 'correspondientes del curso presencial.');
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Ln(15);

$pdf->Cell(10, 0, 'Deseamos que aproveches el curso al '.utf8_decode("máximo."));
$pdf->Ln(15);

for($i=0; $i<count($nombresGrupo); $i++){
	$pdf->SetTextColor(255, 128, 0); //Color naranja
	$pdf->Cell(0, 0, $nombresGrupo[$i]);
	$pdf->Ln(10);
	$pdf->SetFont('OpenSans-Regular', '', 12);
	$pdf->SetTextColor(0, 0, 0); //Color naranja
	$pdf->Cell(0, 0, 'Clases');
	$pdf->Ln(10);

	$datosClases = clasesComprobante($grupos[$i]);
	$fechas = $datosClases[0];
	$horaInicio = $datosClases[1];
	$horaFin = $datosClases[2];
	for($j=0; $j<count($fechas); $j++){
		$pdf->Cell(3, 0, utf8_decode(''));
		$pdf->SetFont('OpenSans-Bold', '', 12);
		$pdf->Cell(3, 0, utf8_decode('°'));
		$pdf->SetFont('OpenSans-Regular', '', 12);
		$pdf->Cell(1, 0, utf8_decode(" ".$fechas[$j]." ".$horaInicio[$j]." - ".$horaFin[$j]));
		$pdf->Ln(5);		
	}
	$pdf->SetFont('OpenSans-Bold', '', 12);
	$pdf->Ln(10);
}
$pdf->OutPut();
?>