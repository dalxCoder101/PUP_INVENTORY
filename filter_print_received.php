

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
$pdf->SetFont("Arial","B",9);
$pdf->Cell(200,20,"Report","0","1","C");
$pdf->SetLeftMargin(10);

$pdf->Cell(75,10,"Product Name","1","0","C");
$pdf->Cell(25,10,"Category","1","0","C");
$pdf->Cell(20,10,"Quantity","1","0","C");
$pdf->Cell(38,10,"Date Date","1","0","C");
$pdf->Cell(38,10,"Received by","1","0","C");


/*$pdf->Cell(35,10,"Barcode","1","0","C");*/
$fill=false;
$pdf->Ln();


$con = mysqli_connect("localhost","root","","inventory_system");

 $query = "SELECT * FROM product_receive where date_receive between '".$date_from."' and '".$date_to."'";



 
 $query_run = mysqli_query($connection, $query);
 
  if(mysqli_num_rows($query_run) > 0)
     {
       while($row = mysqli_fetch_assoc($query_run))
         {
       
               $pdf->Cell(75,10,$row['product_name'],1);
               $pdf->Cell(25,10,$row['product_category'],1);
               $pdf->Cell(20,10,$row['quantity'],1);
               $pdf->Cell(38,10,$row['date_received'],1);
               $pdf->Cell(38,10,$row['fullname'],1);
               
               $pdf->Ln();

    }

 }

$pdf->Output();



?>
