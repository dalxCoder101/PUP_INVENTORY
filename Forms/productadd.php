


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
    #error{
       display: flex;
       justify-content: center;

    }
</style>

<form id="form" method="post" enctype="multipart/form-data" action="addPro.php">
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div style="display: flex;align-items: center;" id="error">
              <div>
                 <p style="color:#ffff;margin-top: 7px;" id="error-message"></p>
             </div>
            </div>
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
                  <input maxlength="30" type="text" class="form-control" id="product_name" name="product_names" placeholder="Product Title" autofocus>
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select id="product_category" class="form-control" name="product_categorie">
                      <option value="" selected disabled hidden>Select Category</option>

                      <?php 
                    
                      while($rows=mysqli_fetch_array($result)){

                      ?>s
                      <!--<option value="">Select Product Category</option>--->
                      <option value="<?php echo $rows['category_name'];?>"><?php echo $rows['category_name'];?></option>
                      <?php
                      }
                   ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->
                    <input id="product_image" type="file" name="product_image">
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
                     <input type="number" onKeyPress="if(this.value.length==4) return false;"  class="form-control" id="product_quantity" name="product_quantity" placeholder="Product Quantity">
                  </div>
                 </div>
                  <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                     </span>
                     <input type="text" onKeyPress="if(this.value.length==10) return false;"  class="form-control" id="product_size" name="product_size" placeholder="Product Size">
                  </div>
                 </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                            <input type="hidden" id="barcode" maxlength="7" minlength="7"name="barcode" placeholder="Barcode">
                   </div>
                  </div>
               </div>
              </div>

              <button type="button" id="btn" class="btn btn-danger">Add product</button>


<script>

function lettersOnly() 
{
            var charCode = event.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

                return true;
            else
                return false;
}




$('#btn').on('click',function(){



var p_name=document.getElementById("product_name").value;
var p_category=document.getElementById("product_category").value;
var p_image=document.getElementById("product_image").value;
var p_quantity=document.getElementById("product_quantity").value;
var p_size=document.getElementById("product_size").value;


var reg_name_lastname = /^[a-zA-Z\s]*$/;
var numbers =/^[0-9]+$/;



//Validation to the user_name input field
if(!reg_name_lastname.test($('#product_name').val())){ //
    
     Swal.fire('Product Name is Invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_name").focus(), 500);

              });
                   
             return false;
}

if(!numbers.test($('#product_quantity').val())){ //
    
     Swal.fire('Product Quantity is Invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_quantity").focus(), 500);

              });
                   
             return false;
}




   if(p_name=="")
         {
              Swal.fire('Product Name is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_name").focus(), 500);

              });
                   
             return false;
         }
  if(p_name.match(numbers))
      {
              Swal.fire('Product Name is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_name").focus(), 500);

              });
                   
             return false;
      }

  if(p_category=="")
         {
              Swal.fire('Product Category is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_category").focus(), 500);

              });
                   
                   return false;
         }
  if(p_image=="")
         {
              Swal.fire('Product Image is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_image").focus(), 500);

              });
                   
                   return false;
         }
  if(p_quantity==0)
         {
              Swal.fire('Product Quantity must not be zero!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_quantity").focus(), 500);

              });
                   
                   return false;
         }


  if(p_size=="")
  {
        {
              Swal.fire('Product Size is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_size").focus(), 500);

              });
                   
                   return false;
         }
  }


   Swal.fire({
             title: 'Are you sure you want to save it?',
             text: "You won't be able to revert this!",
             icon: 'info',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, save it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Saved!',
                      'Your file has been saved successfully.',
                      'success',       
                 ).then(function(){
                        $('#form').submit();
                       // window.location.href="addPro.php";
                  });
               }
          

    })
          

       })

         
</script>






          </form>
         </div>
        </div>
      </div>
    </div>
</form>



<?php
/*
include_once 'MyFrameworks/DBQuery.php';


function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}


if(isset($_POST["btn_adds"]))
{  


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



     $row = GetData("SELECT * from product where barcode='".$var_barcode."'");
   
    if($row)
     {
           
         echo '<script>alert("'.$var_barcode.' already existed!")</script>';  
               
     }
else{
    
    IUD("INSERT INTO product (product_name,quantity,product_size,category,recieved_no,release_no,date_purchased,product_image,barcode) VALUES ('".$var_product_name."','".$var_quantity."','".$var_product_size."','".$var_category."','".$var_recieved."','".$var_release."','".$var_date."','".$var_image_name."','".$barcode_generator."');");

    
     move_uploaded_file($var_product_image, $img_location.$var_image_name);
     echo '<script>alert("Successfully Added!")</script>';
     echo '<script>window.location.href="demo.php?products";</script>';
   }
 
}
*/

?>