



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



    $var_firstname=$_POST["first_name"];
    $var_lastname=$_POST["last_name"];
    $date=dates();



    $var_fullname=$var_firstname." " .$var_lastname;
    $var_product_name=$_POST["p_name"]; 
    $var_product_category=$_POST["product_category"];
    $var_default_quantity=$_POST["default_quantity"]; 
    $var_recieve=$_POST["receive_quantity"]; 

    $var_date=make_date(); //date release
    $var_pID=$_POST["p_id"];

    $var_receive_default=$_POST["receive_num"];
    $var_result=$var_default_quantity+$var_recieve;
    $var_receive_result=$var_receive_default+$var_recieve;


      IUD("INSERT INTO product_receive(product_name,product_category,quantity,date_received,fullname,date_receive) VALUES ('".$var_product_name."','".$var_product_category."','".$var_recieve."','".$var_date."','".$var_fullname."','".$date."');");

      IUD("UPDATE product SET quantity='".$var_result."',recieved_no='".$var_receive_result."' WHERE product_id = '".$var_pID."'");
      echo '<script>window.location.href="demo.php?products";</script>';
?>