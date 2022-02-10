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




    $var_firstname=$_POST["fname"];
    $var_lastname=$_POST["lname"];
    $fullname=$var_firstname." ".$var_lastname;


    
    $date_released=dates();

    $var_product_name=$_POST["p_name"]; 
    $var_product_category=$_POST["product_category"];
    $var_default_quantity=$_POST["default_quantity"];
    $var_release=$_POST["release_quantity"];
    $var_result=$var_default_quantity-$var_release;
    $var_date=make_date(); //date release
    $var_pID=$_POST["p_id"];
    $release_num=$_POST["release_num"];
    $release_num_result=$release_num+$var_release;

    if($var_release>$var_default_quantity)
    {
       echo '<script>alert("Insufficient Stock")</script>';
       echo '<script>window.location.href="demo.php?products";</script>';

       return;  
    }
    /*
    else if($var_release<1)
    {
       echo '<script>alert("Number of quantity must not less than by 1")</script>';
       return;
    }*/


      IUD("INSERT INTO product_release(p_name,p_category,p_quantity,date_release,fullname,released) VALUES ('".$var_product_name."','".$var_product_category."','".$var_release."','".$var_date."','".$fullname."','".$date_released."');");

      IUD("UPDATE product SET quantity='".$var_result."',release_no='".$release_num_result."' WHERE product_id = '".$var_pID."'");
      echo '<script>window.location.href="demo.php?products";</script>';


?>