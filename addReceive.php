<?php





include_once 'MyFrameworks/DBQuery.php';

date_default_timezone_set('Asia/Manila');
function make_date(){
  return date('Y-m-d g:i:a');

}
function dates()
 {
    return strftime("%Y-%m-%d");  
 }


     $receive_quantity=$_POST["txt_quantity"];
     $default_receive_quantity=$_POST["quantity"];
     $product_id=$_POST["p_id"];
     $default_quantity=$_POST["default_received_quantity"];
     $var_product_name=$_POST["pName"];
     $var_product_category=$_POST["pCategory"];
     $var_date=make_date();

       $var_firstname=$_POST["first_name"];
    $var_lastname=$_POST["last_name"];
    $fullname=$var_firstname." ".$var_lastname;


     $quantity_output=$receive_quantity+$default_receive_quantity;
    
     $var_output_receivedQuantity=$receive_quantity+$default_quantity;
     
     if($receive_quantity>$default_receive_quantity)
     {
         echo '<script>alert("Insufficient Stock!")</script>';
         echo '<script>window.location.href="demo.php?products";</script>';
         return;

     }


      IUD("INSERT INTO product_receive(product_name,product_category,quantity,date_received,fullname) VALUES ('".$var_product_name."','".$var_product_category."','".$receive_quantity."','".$var_date."','".$fullname."');");

     
      IUD("UPDATE product SET quantity='".$quantity_output."',recieved_no='".$var_output_receivedQuantity."' WHERE product_id = '".$product_id."'");
      echo '<script>window.location.href="demo.php?products";</script>';

    
