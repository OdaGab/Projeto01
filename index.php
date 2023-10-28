<?php 
require('vendor\fpdf\fpdf\original\rounded_rect2.php');

$xml = simplexml_load_file('NFe_assinada.xml');

$pdf = new PDF('P', 'cm', 'A4');

$pdf->AddPage();



$pdf->SetFont('Arial','','6');
$pdf->Text(0.2, 1.3, 'DATA DO RECEBIMENTO');
$pdf->Text(3.7, 1.3, 'IDENTIFICAÇÃO E ASSINATURA DO RECEBEDOR');

$pdf->RoundedRect( 0.1, 0.1, 16.8,    1, 0.1, '1234');
$pdf->RoundedRect( 0.1, 1.1,  3.5, 0.80, 0.1, '1234');
$pdf->RoundedRect( 3.6, 1.1, 13.3, 0.80, 0.1, '1234');
$pdf->RoundedRect(16.9, 0.1, 3.90, 1.80, 0.1, '1234');
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
$pdf->RoundedRect(17.25, 9.6, 3.65, 0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  3.2,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  6.3,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  9.4,10.3,  3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  12.5,10.3,   3, 0.7, 0.1, '1234');
$pdf->RoundedRect(  15.5,10.3,1.75, 0.7, 0.1, '1234');
$pdf->RoundedRect( 17.25,10.3,3.65, 0.7, 0.1, '1234');
$pdf->RoundedRect(   0.1,11.4,   6, 0.7, 0.1, '1234');
$pdf->RoundedRect(   6.1,11.4, 3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(   9.2,11.4, 3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(   12.3,11.4, 3.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(   15.4,11.4, 0.8, 0.7, 0.1, '1234');
$pdf->RoundedRect(   16.2,11.4, 4.7, 0.7, 0.1, '1234');
$pdf->RoundedRect(   0.1,12.1, 9.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(   9.2,12.1, 6.2, 0.7, 0.1, '1234');
$pdf->RoundedRect(   15.4,12.1, 0.8, 0.7, 0.1, '1234');
$pdf->RoundedRect(   16.2,12.1, 4.7, 0.7, 0.1, '1234');
$pdf->RoundedRect(   0.1,12.8, 2.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(   2.2,12.8, 3.5, 0.7, 0.1, '1234');
$pdf->RoundedRect(   5.7,12.8, 3.5, 0.7, 0.1, '1234');
$pdf->RoundedRect(   9.2,12.8, 3.5, 0.7, 0.1, '1234');
$pdf->RoundedRect(  12.7,12.8, 4.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  16.8,12.8, 4.1, 0.7, 0.1, '1234');
$pdf->RoundedRect(  0.1,13.9, 20.7, 12.7, 0.1, '1234');

$pdf->Line( 0.1, 14.4,20.8,14.4);
$pdf->Line(   2, 13.9,   2,26.6);
$pdf->Line( 8.4, 13.9, 8.4,26.6);
$pdf->Line( 9.6, 13.9, 9.6,26.6);
$pdf->Line(10.4, 13.9,10.4,26.6);
$pdf->Line(11.2, 13.9,11.2,26.6);
$pdf->Line(12.4, 13.9,12.4,26.6);
$pdf->Line(13.6, 13.9,13.6,26.6);
$pdf->Line(14.8, 13.9,14.8,26.6);
$pdf->Line(16, 13.9,16,26.6);
$pdf->Line(17.2, 13.9,17.2,26.6);
$pdf->Line(18.4, 13.9,18.4,26.6);
$pdf->Line(19.4, 13.9,19.4,26.6);
$pdf->Line(20.1, 13.9,20.1,26.6);

$pdf->RoundedRect(  0.1,27, 13.7, 2, 0.1, '1234');
$pdf->RoundedRect(  13.8,27, 7, 2, 0.1, '1234');


$pdf->SetFont('Arial','','10');
$pdf->Text(0.1, 1.92, '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _');
$pdf->Output('F', 'C:/xampp/htdocs/Projeto01/download/report2.pdf');

