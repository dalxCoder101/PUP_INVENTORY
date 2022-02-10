
<?php

   
$row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");

?>

<form id="form" method="post" action="receive_Pro.php" enctype="multipart/form-data">
  <div style="margin-top:10px" class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div style="background-color:#1111;padding:10px">
                 <span>Received Product</span>
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
                  </div>
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                     <input id="product_name" type="text" class="form-control" name="p_name" placeholder="Product Name" readonly>
                     <!--PRODUCT ID NUMBER--->
                         <input id="product_id" type="hidden" name="p_id" placeholder="Product ID"> 
                     <!--end---->

                     <!--No. of release item-->
                          <input id="recieved_no" type="hidden" name="receive_num"> 
                     <!--end--->

                     
                   <input type="hidden" name="first_name" value="<?php echo $_SESSION['first_name']; ?>">
                   <input type="hidden" name="last_name" value="<?php echo $_SESSION['last_name']; ?>">



               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                        <input id="category" type="text" class="form-control" name="product_category" placeholder="Product Category" readonly>
                        <!--available stock-------------->
                             <input id="quantity" type="hidden" class="form-control" name="default_quantity" placeholder="Quantity">
                        <!--end--->

                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->  
                    <input type="number"  min="1" class="form-control" name="receive_quantity" id="receive_no" placeholder="Quantity" required>

                    <!---old image--->
                    <input type="hidden" id="old_image" type="text" name="old_image">
                  </div>
                    <!--<div style="margin-top:10px;" class="col-md-6">
              
                    <input type="text" class="form-control" name="supplier" placeholder="Supplier Name" required>
                  -->
                  </div>
                </div>
              </div>

              <div class="form-group">
               <div class="row">
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                     
                   </div>
                  </div>
               </div>
              </div>
              <!---<button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_submit" class="btn btn-danger">Save</button>-->
               <button type="button" id="btn" class="btn btn-danger">Received product</button>
          </form>
         </div>
        </div>
      </div>
    </div>
</form>

<script >


$('#btn').on('click',function(){




var numbers =/^[0-9]+$/;
var letters= /^[a-zA-Z\s]*$/;

var receive_no=document.getElementById("receive_no").value;
var default_quantity=document.getElementById("quantity").value;

 if(receive_no=="")
         {
              Swal.fire('Product Quantity is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#receive_no").focus(), 500);

              });
                   
                   return false;
         }
 if(receive_no<=0){

       Swal.fire('Product Quantity is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#receive_no").focus(), 500);

              });
                   
                   return false;
 }


   Swal.fire({
             title: 'Are you sure you want to received it?',
             text: "You won't be able to revert this!",
             icon: 'info',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, received it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Received!',
                      'Received successfully.',
                      'success',       
                 ).then(function(){
                        $('#form').submit();
                       // window.location.href="addPro.php";
                  });
               }
         })
          

       })

         
</script>


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



if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");
    echo "<script>setDataField('product_name','".$row["product_name"]."');</script>";
    echo "<script>setDataField('quantity','".$row["quantity"]."');</script>";
    echo "<script>setDataField('category','".$row["category"]."');</script>";
    echo "<script>setDataField('old_image','".$row["product_image"]."');</script>";
    echo "<script>setDataField('product_id','".$row["product_id"]."');</script>";
    echo "<script>setDataField('recieved_no','".$row["recieved_no"]."');</script>";
   
}
?>