
<?php

include_once 'FPDF/fpdf.php';
include_once 'MyFrameworks/DBQuery.php';




if(empty($_GET['date_from']))
{
   $_GET['date_from']="demo";
}
if(empty($_GET['toDate']))
{
   $_GET['toDate']="demo";
}
$date_from=$_GET['date_from'];
$date_to=$_GET['toDate'];




$pdf=new FPDF();
$pdf->AddPage();
$pdf->setTextColor(40,40,40);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(200,20,"Report","0","1","C");
$pdf->SetLeftMargin(10);

//table column
$pdf->Cell(40,10,"Building No.","1","0","C");
$pdf->Cell(20,10,"Unit No.","1","0","C");
$pdf->Cell(50,10,"Occupancy Status","1","0","C");
$pdf->Cell(33,10,"Start Date","1","0","C");
$pdf->Cell(33,10,"End Date","1","0","C");

/*$pdf->Cell(35,10,"Barcode","1","0","C");*/
$fill=false;
$pdf->Ln();


$con = mysqli_connect("localhost","root","","inventory_system");

 $query = "SELECT * FROM tbl_unit where start_date='".$date_from."' and end_date= '".$date_to."'";

 $query_run = mysqli_query($connection, $query);
 
  if(mysqli_num_rows($query_run) > 0)
     {
       while($row = mysqli_fetch_assoc($query_run))
         {
       
         	 
               $pdf->Cell(40,10,$row['building_no'],1);
               $pdf->Cell(20,10,$row['unit_no'],1);
               $pdf->Cell(50,10,$row['occupancy_status'],1);
               $pdf->Cell(33,10,$row['start_date'],1);
               $pdf->Cell(33,10,$row['end_date'],1);
       
               $pdf->Ln();



   }

 }

$pdf->Output();



?>
