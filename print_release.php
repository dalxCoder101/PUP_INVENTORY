


<?php

include_once 'FPDF/fpdf.php';
include_once 'MyFrameworks/DBQuery.php';



$pdf=new FPDF();
$pdf->AddPage();
$pdf->setTextColor(40,40,40);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(200,20,"Report","0","1","C");
$pdf->SetLeftMargin(10);


/*product name
category
quantity
purchased Date*/


//table column
$pdf->Cell(75,10,"Product Name","1","0","C");
$pdf->Cell(25,10,"Category","1","0","C");
$pdf->Cell(20,10,"Quantity","1","0","C");
$pdf->Cell(38,10,"Date Release","1","0","C");
$pdf->Cell(38,10,"Received by","1","0","C");


/*$pdf->Cell(35,10,"Barcode","1","0","C");*/
$fill=false;
$pdf->Ln();







$con = mysqli_connect("localhost","root","","inventory_system");

 $query = "SELECT * FROM product_release";
 $query_run = mysqli_query($connection, $query);
 
  if(mysqli_num_rows($query_run) > 0)
     {
       while($row = mysqli_fetch_assoc($query_run))
         {
       

               $pdf->Cell(75,10,$row['p_name'],1);
               $pdf->Cell(25,10,$row['p_category'],1);
               $pdf->Cell(20,10,$row['p_quantity'],1);
               $pdf->Cell(38,10,$row['date_release'],1);
               $pdf->Cell(38,10,$row['fullname'],1);
               
               $pdf->Ln();



   }

 }

$pdf->Output();



?>
