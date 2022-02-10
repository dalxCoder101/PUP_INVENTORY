<?php

include_once 'fpdf.php';


$pdf=new FPDF();
$pdf->AddPage();

$pdf->Output();


?>
