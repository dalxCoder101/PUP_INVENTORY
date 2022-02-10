
<?php
include_once 'MyFrameworks/DBQuery.php';


function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}



    $var_product_name= strtoupper($_POST["product_names"]);
    $var_quantity = strtoupper($_POST["product_quantity"]);
    $var_category = strtoupper($_POST["product_categorie"]);
    $var_product_size=$_POST["product_size"];

    $var_barcode=strtoupper($_POST['barcode']);
    $var_recieved=0;
    $var_release=0;
    $var_date=make_date();
   

    $var_name=substr(strtoupper($_POST["product_names"]),0,3);
    $random=rand ( 100 , 999 );
    $barcode_generator=$var_name.$random;


    $img_location='Images/';
    $var_product_image=$_FILES['product_image']['tmp_name'];
    $var_image_name=$_FILES['product_image']['name'];




      $row_validate = GetData("SELECT * from product  where product_name='".$var_product_name."'and product_size='".$var_product_size."'");
   
     if($row_validate)
     {
           
          echo '<script>alert("'.$var_product_name.' already existed!");</script>'; 
          echo '<script>window.location.href="demo.php?products";</script>';
         

               
     }
     else
     {

    
    IUD("INSERT INTO product (product_name,quantity,product_size,category,recieved_no,release_no,date_purchased,product_image,barcode) VALUES ('".$var_product_name."','".$var_quantity."','".$var_product_size."','".$var_category."','".$var_recieved."','".$var_release."','".$var_date."','".$var_image_name."','".$barcode_generator."');");

    
     move_uploaded_file($var_product_image, $img_location.$var_image_name);
     echo '<script>window.location.href="demo.php?products";</script>';
   }
  
 


?>