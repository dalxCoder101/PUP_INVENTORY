
<?php
session_start();

//include_once 'MyFrameworks/DBQuery.php';

   $connection=mysqli_connect("localhost","root","","inventory_system");
   $username=$_REQUEST['barcode'];

if($username!=""){

     $query=mysqli_query($connection,"SELECT * FROM product where barcode='$username'");
      $row=mysqli_fetch_array($query);

      $product_name=$row["product_name"];
      $product_category=$row["category"];
      $quantity=$row["quantity"];
      $image=$row["product_image"];
      $product_id=$row["product_id"];
      $release=$row["release_no"];
      $receive=$row["recieved_no"];

}

$result=array("$product_name","$product_category","$quantity","$image","$product_id","$release","$receive");
$myJson=json_encode($result);

echo "$myJson";


?>
