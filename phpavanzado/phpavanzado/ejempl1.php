<?php
include('librerias/fpdf.php');

$pdf = new FPDF();
$pdf ->AddPage();
$pdf->SetFont('Calibri', 'B', 18);
$pdf->Cell(40, 10, 'Mi primer archivo con FPDF!');


?>