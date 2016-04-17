<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../fpdf/fpdf.php';

class PDF extends FPDF{
	function Header(){
		$this->Image('../fpdf/img/Comprobante.jpg', 170, 0, 40);
		$this->SetFont('OpenSans-Regular', '', 15);
		$this->Cell(80);
		$this->Ln(20);
	}

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
$pdf->Cell(0, 0, "Nombre del alumno:");
$pdf->Ln(15);
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(152, 0, "Te damos una cordial bienvenida al curso de ".utf8_decode('regularización'). " en la(s) materia(s) de: ");
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Ln(10);

$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->MultiCell(500, 0, " Nombre del grupo(s).");
$pdf->Ln(7);

$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->MultiCell(500, 0, " Nombre del grupo(s).");
$pdf->Ln(12);

$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(61, 0, 'Hemos recibido la cantidad de ');
$pdf->SetTextColor(255, 0 , 0); //Color rojo de letra
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(14, 0, '$2000');
$pdf->SetTextColor(0, 0 , 0);
$pdf->SetFont('OpenSans-Regular', '', 12);


$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(10, 0, 'correspondientes del curso presencial.');
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Ln(15);

$pdf->Cell(10, 0, 'Deseamos que aproveches el curso al '.utf8_decode("máximo."));
$pdf->Ln(15);

/************* Grupo 1 **************/

$pdf->SetTextColor(255, 128, 0); //Color naranja
$pdf->Cell(0, 0, 'Nombre del grupo');
$pdf->Ln(10);

$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->SetTextColor(0, 0, 0); //Color naranja
$pdf->Cell(0, 0, 'Clases');
$pdf->Ln(10);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode(' Sábado 09 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode(' Domingo 10 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode(' Sábado 16 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Domingo 17 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Sábado 23 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Domingo 24 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(15);

/************* Grupo 2 **************/

$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->SetTextColor(255, 128, 0); //Color naranja
$pdf->Cell(0, 0, 'Nombre del grupo 2');
$pdf->Ln(10);

$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->SetTextColor(0, 0, 0); //Color naranja
$pdf->Cell(0, 0, 'Clases');
$pdf->Ln(10);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Sábado 09 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Domingo 10 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Sábado 16 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Domingo 17 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Sábado 23 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(5);

$pdf->Cell(3, 0, utf8_decode(''));
$pdf->SetFont('OpenSans-Bold', '', 12);
$pdf->Cell(3, 0, utf8_decode('°'));
$pdf->SetFont('OpenSans-Regular', '', 12);
$pdf->Cell(1, 0, utf8_decode('Domingo 24 Abril 04:00 PM - 07:00 PM'));
$pdf->Ln(15);

$pdf->OutPut();
?>