<?php 
require('vendor\fpdf\fpdf\original\rounded_rect2.php');

$pdf = new PDF('P', 'cm', 'A4');

$pdf->AddPage();
$pdf->SetFillColor(400);

$pdf->SetFont('Arial','','6');
$pdf->Text(0.2, 1.3, 'DATA DO RECEBIMENTO');
$pdf->Text(3.7, 1.3, 'IDENTIFICAÇÃO E ASSINATURA DO RECEBEDOR');

$pdf->RoundedRect( 0.1, 0.1, 16.8,    1, 0.1, '1234');
$pdf->RoundedRect( 0.1, 1.1,  3.5, 0.80, 0.1, '1234');
$pdf->RoundedRect( 3.6, 1.1, 13.3, 0.80, 0.1, '1234');
$pdf->RoundedRect(16.9, 0.1,    4, 1.80, 0.1, '1234');
$pdf->RoundedRect( 0.1, 2.2,  8.5,  3.2, 0.1, '1234');
$pdf->RoundedRect( 8.6, 2.2,  3.5,  3.2, 0.1, '1234');
$pdf->RoundedRect( 12.1, 2.2, 8.8,  3.2, 0.1, '1234');
$pdf->RoundedRect( 12.1, 3.8, 8.8,  0.8,   0, '1234');
$pdf->RoundedRect( 11.3, 3.5, 0.5,  0.7,0.08, '1234');
$pdf->RoundedRect( 0.1, 5.4,   12,  0.7, 0.1, '1234');
$pdf->RoundedRect( 12.1, 5.4, 8.8,  0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1, 6.1, 6.9,  0.7, 0.1, '1234');
$pdf->RoundedRect(    7, 6.1, 6.9,  0.7, 0.1, '1234');
$pdf->RoundedRect( 13.9, 6.1,   7,  0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1, 7.2, 12.6, 0.7, 0.1, '1234');
$pdf->RoundedRect( 12.7, 7.2,  4.8, 0.7, 0.1, '1234');
$pdf->RoundedRect(  17.5,7.2,  3.4, 0.7, 0.1, '1234');
$pdf->RoundedRect(   0.1,7.9,  9.7, 0.7, 0.1, '1234');
$pdf->RoundedRect(   9.8,7.9,  4.3, 0.7, 0.1, '1234');
$pdf->RoundedRect(  14.1,7.9,  3.4, 0.7, 0.1, '1234');
$pdf->RoundedRect(  17.5,7.9,  3.4, 0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1, 8.6,  9.7, 0.7, 0.1, '1234');
$pdf->RoundedRect(  9.8, 8.6,  0.8, 0.7, 0.1, '1234');
$pdf->RoundedRect( 10.6, 8.6,  3.5, 0.7, 0.1, '1234');
$pdf->RoundedRect( 14.1, 8.6,  3.4, 0.7, 0.1, '1234');
$pdf->RoundedRect( 17.5, 8.6,  3.4, 0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1, 9.6,  4.3, 0.7, 0.1, '1234');
$pdf->RoundedRect(  4.4, 9.6,  3.7, 0.7, 0.1, '1234');
$pdf->RoundedRect(  8.1, 9.6,  3.7, 0.7, 0.1, '1234');
$pdf->RoundedRect( 11.8, 9.6,  3.7, 0.7, 0.1, '1234');
$pdf->RoundedRect( 15.5, 9.6, 1.75, 0.7, 0.1, '1234');
$pdf->RoundedRect(17.25, 9.6, 3.65, 0.7, 0.1, '1234');//
$pdf->RoundedRect(  0.1,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  3.2,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  6.3,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  9.4,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  12.5,10.3,   3, 0.7, 0.1, '1234');
$pdf->RoundedRect(  15.5,10.3,1.75, 0.7, 0.1, '1234');
$pdf->RoundedRect(  17.25,10.3,3.65, 0.7, 0.1, '1234');


$pdf->SetFont('Arial','','10');
$pdf->Text(0.1, 1.92, '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _');

$pdf->Output('F', 'C:/xampp/htdocs/Projeto01/download/report2.pdf');

