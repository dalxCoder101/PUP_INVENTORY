

<?php

$con=mysqli_connect("localhost","root","","inventory_system");
$result=mysqli_query($con,"SELECT * from categories");


$row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");
$categorie=$row['category'];


?>
 <style>
    .container{
        
       padding: 20px;
        border: 1px solid #1111;
       margin-top: 10px;
    }
</style>

<form method="post" action="#" enctype="multipart/form-data">
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div style="background-color:#1111;padding:10px">
                 <span>Edit Product</span>
            </div>
         </strong>
        </div>
        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form method="post" action="add_product.php" class="clearfix">
              <div class="form-group">

                  <style>
                      .imgBox 
                      {
                        width: 150px;
                        height:130px;
                        position: relative;
                        bottom: 5px;
                      }
                      .imgBox img{
                        width: 100%;
                        height: 100%;

                      }
                  </style>
                  <div style="display:flex;align-items: flex-end;">
                  <div class="imgBox">
                       <img src="Images/<?php echo $row['product_image'];?>" alt="icon-category">
                    </div>
                   <div class="col-md-6">
                    <input style="position: relative;bottom: 3px;" type="file" name="product_image">

                  </div>
                  </div>
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input id="product_name"  type="text" class="form-control" name="product_name" placeholder="Product Title">
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select id="category" class="form-control" name="product_categorie">

                      <?php 
                    
                          while($rows=mysqli_fetch_array($result)){

                      ?> 
                     
                
                   <option value="<?php echo $rows['category_name'];?>" <?php if($rows['category_name']==$rows['category_name']) echo 'selected="selected"';?>><?php echo $rows['category_name'];?></option>
            
                    <!-- <option value="<?php //echo $rows['category_name'];?>"><?php //echo $rows['category_name'];?></option>-->
                      <?php
                      }
                   ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->  
                    <input id="IDQuantity" type="number" class="form-control" name="product_quantity" placeholder="Product Quantity">

                    <!---old image--->
                    <input type="hidden" id="old_image" type="text" name="old_image">
                  </div>
                </div>
              </div>

              <div class="form-group">
               <div class="row">
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                     </span>
                      <input id="buyPrice" type="number" class="form-control" name="buying_price" placeholder="Buying Price">
                     <span style="background-color:#1111;display: flex;align-items: center;padding: 7px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-left: none;" class="input-group-addon">.00</span>
                    <!-- <input id="IDQuantity" type="number" class="form-control" name="product_quantity" placeholder="Product Quantity">-->
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-usd"></i>
                     </span>
                      <input id="sellPrice" type="number" class="form-control" name="selling_price" placeholder="Selling Price">
                      <span style="background-color:#1111;display: flex;align-items: center;padding: 7px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-left: none;" class="input-group-addon">.00</span>
                    
                  </div>
                 </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                     
                   </div>
                  </div>
               </div>
              </div>
              <button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_submit" class="btn btn-danger">Save Changes</button>
          </form>
         </div>
        </div>
      </div>
    </div>
</form>

<?php

include_once 'MyFrameworks/DBQuery.php';
/*
if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM  WHERE IDNum = '".$_GET["IDNum"]."'");
}*/
?>

<?php

include_once 'MyFrameworks/DBQuery.php';

if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");
    echo "<script>setDataField('IDQuantity','".$row["quantity"]."');</script>";
    echo "<script>setDataField('product_name','".$row["product_name"]."');</script>";
    echo "<script>setDataField('category','".$row["category"]."');</script>";
    echo "<script>setDataField('buyPrice','".$row["buy_price"]."');</script>";
    echo "<script>setDataField('sellPrice','".$row["sale_price"]."');</script>";
    echo "<script>setDataField('old_image','".$row["product_image"]."');</script>";
   
}
if(isset($_POST["btn_submit"]))
{  
    $var_productID = $_GET["IDNum"];
    $var_product_name = strtoupper($_POST["product_name"]);
    $var_product_category = strtoupper($_POST["product_categorie"]);
    $var_product_quantity = strtoupper($_POST["product_quantity"]);
    $var_buying_price = strtoupper($_POST["buying_price"]);
    $var_selling_price= strtoupper($_POST["selling_price"]);
    $var_image=strtoupper($_POST['old_image']);

     $var_product_image=$_FILES['product_image']['tmp_name'];
     $var_image_name=$_FILES['product_image']['name'];
     $location='Images/';

     if($_FILES['product_image']['name'] != "") 
     // No file was selected for upload, your (re)action goes here
      {
       $updated_image=$_FILES['product_image']['name'];
       $update_filename=$updated_image;
      }
    else
     {
       $update_filename=$var_image;
    }

    IUD("UPDATE product SET product_name='".$var_product_name."',quantity='".$var_product_quantity."',category='".$var_product_category."',buy_price='".$var_buying_price."',sale_price='".$var_selling_price."',product_image='".$update_filename."' WHERE product_id = '".$_GET["IDNum"]."'");


          if($_FILES['product_image']['name'] != '') {

           move_uploaded_file($var_product_image, $location.$updated_image);
       
           unlink($location.$old_image);

         }    

   
        echo '<script>window.location.href="demo.php?products";</script>';

}


?>