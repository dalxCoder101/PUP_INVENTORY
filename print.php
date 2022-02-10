
<?php

include_once 'FPDF/fpdf.php';
include_once 'MyFrameworks/DBQuery.php';



$pdf=new FPDF();
$pdf->AddPage();
$pdf->setTextColor(40,40,40);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(200,20,"Inventory Report","0","1","C");
$pdf->SetLeftMargin(10);

//table column


$pdf->Cell(40,10,"Product Name","1","0","C");
$pdf->Cell(25,10,"Instock","1","0","C");
$pdf->Cell(45,10,"Category","1","0","C");
$pdf->Cell(35,10,"Size","1","0","C");
$pdf->Cell(23,10,"Received","1","0","C");
$pdf->Cell(23,10,"Release","1","0","C");
/*$pdf->Cell(35,10,"Barcode","1","0","C");*/
$fill=false;
$pdf->Ln();

//table rows 
 //$row = GetDataIndex("SELECT * FROM inventory_table");*/
$con = mysqli_connect("localhost","root","","inventory_system");

 $query = "SELECT * FROM product";
 $query_run = mysqli_query($connection, $query);
 
  if(mysqli_num_rows($query_run) > 0)
     {
       while($row = mysqli_fetch_assoc($query_run))
         {
       
         	 /*  $pdf->Cell(10,10,$row['IDNum'],1);*/
               $pdf->Cell(40,10,$row['product_name'],1);
               $pdf->Cell(25,10,$row['quantity'],1);
               $pdf->Cell(45,10,$row['category'],1);
               $pdf->Cell(35,10,$row['product_size'],1);
               $pdf->Cell(23,10,$row['recieved_no'],1);
               $pdf->Cell(23,10,$row['release_no'],1);
             
             /*  $pdf->Cell(35,10,$pdf->Image('barcode128.php?codetype=Code128&size=50&text='.$row['barcode'].'&print=true',10,30,10,10),1);*/

             
             //  $pdf->Image('./FPDF/img_7.jpg',10,30,33,33);

             //  $pdf->Cell(35, 10,Image('./FPDF/img_7.jpg',10,30, 0, 0, 'L', false ));
               $pdf->Ln();

  
    /* $pdf->Cell(20,10,$row['IDNum'],"1","0","C");
     $pdf->Cell(20,10,$row['IDBarcode'],"1","0","C");
     $pdf->Cell(25,10,$row['IDProductName'],"1","0","C");
     $pdf->Cell(25,10,$row['IDQuantity'],"1","0","C");
     $pdf->Cell(30,10,$row['IDWarranty'],"1","0","C");
     $pdf->Cell(30,10,$row['IDStatus'],"1","0","C");
    */





   }

 }

$pdf->Output();



?>
