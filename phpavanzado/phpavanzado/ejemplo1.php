<?php
include('librerias/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();                                   //permite añadir una pagina
$pdf->SetFont('Arial', 'B', 18);                 //determinar tipografia
$pdf->Cell(40, 10, 'Mi primer archivo con FPDF!'); //determinar el contenido del archivo 
$pdf->Output();                                    //para cerrar nuestro archivo 

?>