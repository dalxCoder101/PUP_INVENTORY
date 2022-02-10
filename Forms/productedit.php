

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

<form id="form" method="post" action="?updatePro&IDNum=<?php echo$row["product_id"]?>" enctype="multipart/form-data">
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
             <div style="display: flex;justify-content: center;" id="error">
              <div>
                 <p style="color:#ffff;margin-top: 7px;" id="error-message"></p>
             </div>
            </div>
            <div style="background-color:#1111;padding:10px">
                 <span>Edit Product</span>
            </div>
         </strong>
        </div>
        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form id="form-edit" method="post" action="add_product.php" class="clearfix">
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
                    <input id="image" style="position: relative;bottom: 3px;" type="file" name="product_image">

                  </div>
                  </div>
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input maxlength="30" onkeypress="return lettersOnly(event);" id="product_name" value="<?php echo $row['product_name'];?>"  type="text" class="form-control" name="product_name" placeholder="Product Title" required>
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
            
                      <?php
                      }
                   ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->  
                    <input  onkeypress="return validationNum(event)" id="quantity" type="text" min="0" maxlength="3" value="<?php echo $row['quantity'];?>" class="form-control" name="product_quantity" placeholder="Product Quantity" required>

                    <!---old image--->
                    <input type="hidden" id="old_image" type="number" name="old_image">
                  </div>
                   <div class="col-md-6">
                
                    <input id="p_size" style="position:relative;top: 10px" id="size" type="text" min="0" value="<?php echo $row['product_size'];?>" class="form-control" name="product_size" placeholder="Product Size" required>

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


             <!-- <button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_submit" class="btn btn-danger">Save Changes</button>-->

            <button type="button" id="btn" class="btn btn-danger">Save Changes</button>






          </form>
         </div>
        </div>
      </div>
    </div>
</form>

<script>

   function validationNum(evt)
   {
      var getNumCd = (evt.which) ? evt.which : event.keyCode;
      if (getNumCd != 46 && getNumCd > 31 
        && (getNumCd < 48 || getNumCd > 57))
         return false;
      return true;
   }


$('#btn').on('click',function(){

var numbers = /^[0-9]+$/;
var letters= /^[a-zA-Z\s]*$/;
var image=document.getElementById("image").value;
var product_name=document.getElementById("product_name").value;
var category=document.getElementById("category").value;
var quantity=document.getElementById("quantity").value;
var product_size=document.getElementById("p_size").value;
var old_image=document.getElementById("old_image").value;



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

  if(product_name=="")
  {
       Swal.fire('Product Name is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_name").focus(), 500);

              });
                   
                   return false;
  }
  /*if(product_name.match(numbers))
  {
    Swal.fire('Product Name is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#product_name").focus(), 500);

              });
                   
                   return false;
  }*/

 if(quantity=="")
      {
          Swal.fire('Product quantity is empty!').then(function(){
          Swal.close();
          setTimeout(() => $("#quantity").focus(), 500);

           });
                   
               return false;
       }
  if(quantity.match(letters))
    {
        Swal.fire('Product quantity is invalid!').then(function(){
        Swal.close();
        setTimeout(() => $("#quantity").focus(), 500);

          });
                   
               return false;
       }  

  if(product_size=="")
         {
              Swal.fire('Product size is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#psize").focus(), 500);

          });
                   
                   return false;
    }
    if(product_size.match(letters))
    {
        Swal.fire('Product size is invalid!').then(function(){
        Swal.close();
        setTimeout(() => $("#p_size").focus(), 500);

          });
                   
               return false;
       }  





   Swal.fire({
             title: 'Are you sure you want to update it?',
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
                      'Updated!',
                      'Your file has been updated successfully.',
                      'success',       
                 ).then(function(){
                        $('#form').submit();
                       // window.location.href="addPro.php";
                  });
               }
          

    })
          

       })

         
</script>


<!--

const product_name=document.getElementById('product_name')
const errorElement=document.getElementById('error-message')
const form_edit=document.getElementById('form_edits')
var letters= /^[a-zA-Z\s]*$/;
var numbers=/^[0-9]*$/;


form_edit.addEventListener('submit',(e)=>{
let messages=[]
if(product_name.value.match(letters))
{
  return true;

}
else{
   messages.push('Product Name value is invalid!');
   product_name.style.borderColor="red";
}

if(messages.length>0)
{

  e.preventDefault();
  errorElement.innerText=messages.join(',  ')
  document.getElementById('error').style.backgroundColor="red";

  
}

})
-->




</script>

<?php


/*

include_once 'MyFrameworks/DBQuery.php';

if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM product WHERE product_id = '".$_GET["IDNum"]."'");
    echo "<script>setDataField('IDQuantity','".$row["quantity"]."');</script>";
    echo "<script>setDataField('product_name','".$row["product_name"]."');</script>";
    echo "<script>setDataField('category','".$row["category"]."');</script>";
    echo "<script>setDataField('old_image','".$row["product_image"]."');</script>";
   
}
if(isset($_POST["btn_submit"]))
{  
    $var_productID = $_GET["IDNum"];
    $var_product_name = strtoupper($_POST["product_name"]);
    $var_product_category = strtoupper($_POST["product_categorie"]);
    $var_product_quantity = strtoupper($_POST["product_quantity"]);
    $var_image=strtoupper($_POST['old_image']);

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

    IUD("UPDATE product SET product_name='".$var_product_name."',quantity='".$var_product_quantity."',category='".$var_product_category."',product_image='".$update_filename."' WHERE product_id = '".$_GET["IDNum"]."'");


          if($_FILES['product_image']['name'] != '') {

           move_uploaded_file($var_product_image, $location.$updated_image);
       
           unlink($location.$old_image);

         }    

   
        echo '<script>window.location.href="demo.php?products";</script>';

}*/


?>