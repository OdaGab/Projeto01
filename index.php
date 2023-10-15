<?php 
//include 'vendor\fpdf\fpdf\original\fpdf.php';

require('vendor\fpdf\fpdf\original\rounded_rect2.php');
//$pdf=new PDF();
$pdf = new PDF('P', 'cm', 'A4');
$pdf->AddPage();


$pdf->SetFillColor(400);

$pdf->RoundedRect( 0.1, 0.1,   16.8,    1, 0.1, '1234');
$pdf->RoundedRect( 0.1, 1.1,  3.5, 0.80, 0.1, '1234');
$pdf->RoundedRect( 3.6, 1.1, 13.3, 0.80, 0.1, '1234');
$pdf->RoundedRect(16.9, 0.1,  4, 1.80, 0.1, '1234');

$pdf->Output('F', 'C:/xampp/htdocs/Projeto01/download/report2.pdf');
