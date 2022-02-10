<?php


include_once 'MyFrameworks/DBQuery.php';

if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");
    echo "<script>setDataField('IDQuantity','".$row["quantity"]."');</script>";
    echo "<script>setDataField('product_name','".$row["product_name"]."');</script>";
    echo "<script>setDataField('category','".$row["category"]."');</script>";
    echo "<script>setDataField('old_image','".$row["product_image"]."');</script>";
   
}

 
    $var_productID = $_GET["IDNum"];
    $var_product_name = strtoupper($_POST["product_name"]);
    $var_product_category = strtoupper($_POST["product_categorie"]);
    $var_product_quantity = strtoupper($_POST["product_quantity"]);
    $var_image=strtoupper($_POST['old_image']);
    $var_productSize=$_POST['product_size'];

     $var_product_image=$_FILES['product_image']['tmp_name'];
     $var_image_name=$_FILES['product_image']['name'];
     $location='Images/';

     if($_FILES['product_image']['name'] != "") 
      {
       $updated_image=$_FILES['product_image']['name'];
       $update_filename=$updated_image;
      }
    else
     {
       $update_filename=$var_image;
    }

    IUD("UPDATE product SET product_name='".$var_product_name."',quantity='".$var_product_quantity."',category='".$var_product_category."',product_size='".$var_productSize."',product_image='".$update_filename."' WHERE product_id = '".$_GET["IDNum"]."'");


          if($_FILES['product_image']['name'] != '') {

           move_uploaded_file($var_product_image, $location.$updated_image);
       
           unlink($location.$old_image);

         }    


         echo '<script>window.location.href="demo.php?products";</script>';

    

    ?>