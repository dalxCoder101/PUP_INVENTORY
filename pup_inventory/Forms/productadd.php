


<?php
  $page_title = 'Add Product';
  $con=mysqli_connect("localhost","root","","inventory_system");
  $result=mysqli_query($con,"SELECT * from categories");

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
                 <span>Add New Product</span>
            </div>
         </strong>
        </div>
        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form method="post" action="add_product.php" class="clearfix">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input type="text" class="form-control" name="product_names" placeholder="Product Title">
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select id="product-catgory" class="form-control" name="product_categorie">

                      <?php 
                    
                      while($rows=mysqli_fetch_array($result)){

                      ?>
                      <!--<option value="">Select Product Category</option>--->
                      <option value="<?php echo $rows['category_name'];?>"><?php echo $rows['category_name'];?></option>
                      <?php
                      }
                   ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->
                    <input type="file" name="product_image">
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
                     <input type="number" class="form-control" name="product_quantity" placeholder="Product Quantity">
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-usd"></i>
                     </span>
                     <input type="number" class="form-control" name="buying_price" placeholder="Buying Price">
                     <span style="background-color:#1111;display: flex;align-items: center;padding: 7px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-left: none;" class="input-group-addon">.00</span>
                  </div>
                 </div>

                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                      <input type="number" class="form-control" name="selling_price" placeholder="Selling Price">
                      <span style="background-color:#1111;display: flex;align-items: center;padding: 7px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-left: none;" class="input-group-addon">.00</span>
                   </div>
                  </div>

                    <div style="margin-top: 15px;" class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-usd"></i>
                     </span>
                     <input type="text" class="form-control" name="barcode" placeholder="Barcode">
                  </div>
                 </div>
               </div>
              </div>
              <button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_adds" class="btn btn-danger">Add product</button>
          </form>
         </div>
        </div>
      </div>
    </div>
</form>



<?php
include_once 'MyFrameworks/DBQuery.php';


function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}


if(isset($_POST["btn_adds"]))
{  


    $var_product_name= strtoupper($_POST["product_names"]);
    $var_quantity = strtoupper($_POST["product_quantity"]);
    $var_category = strtoupper($_POST["product_categorie"]);
    $var_buy_price = strtoupper($_POST["buying_price"]);
    $var_selling_price = strtoupper($_POST["selling_price"]);
    $var_barcode=strtoupper($_POST['barcode']);
    $var_date=make_date();
   



    $img_location='Images/';
    $var_product_image=$_FILES['product_image']['tmp_name'];
    $var_image_name=$_FILES['product_image']['name'];

    
    IUD("INSERT INTO product (product_name,quantity,category,buy_price,sale_price,date_purchased,product_image,barcode) VALUES ('".$var_product_name."','".$var_quantity."','".$var_category."','".$var_buy_price."','".$var_selling_price."','".$var_date."','".$var_image_name."','".$var_barcode."');");

    

     move_uploaded_file($var_product_image, $img_location.$var_image_name);
     echo '<script>window.location.href="demo.php?productadd";</script>';
 
}


?>