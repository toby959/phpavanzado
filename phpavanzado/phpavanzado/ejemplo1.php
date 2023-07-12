<?php
include('librerias/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();                                   //permite añadir una pagina




$pdf->Image('imagenes/sol-y-luna.jpg', 5, 15, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'JPG', false, 'C'); // agregar imagen.-

$pdf->SetTextColor(3, 163, 46);                    // color del texto.- 
$pdf->SetFont('Arial', 'B', 45);                 //determinar tipografia.-
$pdf->Cell(0, 30, 'https://sol-y-luna.com.ar/', 0, 1, 'C'); //determinar el contenido del archivo

$pdf->Output();                                    //para cerrar nuestro archivo 

?>