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


    $var_release=$_POST["txt_quantity"];
    $var_defaultRelease=$_POST["default_quantity"];
    $var_product_name=$_POST["p_name"];
    $var_product_category=$_POST["p_category"];
    $var_product_id=$_POST['product_id'];
    $var_dRelease=$_POST["default_release"];

    
    $var_firstname=$_POST["first_name"];
    $var_lastname=$_POST["last_name"];
    $fullname=$var_firstname." ".$var_lastname;


    $var_date=make_date();

   

    $var_result=$var_defaultRelease-$var_release;


    $var_release_numResult=$var_dRelease+$var_release;
    
    


    if($var_release>$var_defaultRelease)
    {
         echo '<script>alert("Insufficient Stock!")</script>';
         echo '<script>window.location.href="demo.php?products";</script>';
         return;

    }

    IUD("INSERT INTO product_release(p_name,p_category,p_quantity,date_release,fullname) VALUES ('".$var_product_name."','".$var_product_category."','".$var_release."','".$var_date."','".$fullname."');");


    IUD("UPDATE product SET quantity='".$var_result."',release_no='".$var_release_numResult."' WHERE product_id = '".$var_product_id."'");
    echo '<script>window.location.href="demo.php?products";</script>';


?>