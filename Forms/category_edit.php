

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

<form id="form" method="post" action="?update_Cat&IDNum=<?php echo$_GET["IDNum"];?>" enctype="multipart/form-data">
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
                 <span>Edit Category</span>
            </div>
         </strong>
        </div>
        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form id="form" method="post" action="?update_Cat&IDNum=<?php echo$row["category_id"]?>" class="clearfix">
              <div class="form-group">

             
              <div style="display:flex;align-items: flex-end;">
              
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input  maxlength="20" id="category" type="text" name="category" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" class="form-control" name="category" placeholder="Category" required>
               </div>
              </div>
             
           <!--  <button style="margin-top:10px" type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_submit" class="btn btn-danger">Save Changes</button>-->

                  <button style="margin-top:10px" type="button" id="btn" class="btn btn-danger">Save Changes</button>



          </form>
         </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!--PRODUCT EDIT FORM INPUT FIELDS VALIDATION --------------->
<script>
  

$('#btn').on('click',function(){

var category=document.getElementById("category").value;

if(category=="")
{
      Swal.fire('Category is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#category").focus(), 500);

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
                       
                  });
               }
           })
          

       })

         
</script>


<?php


include_once 'MyFrameworks/DBQuery.php';

if(isset($_GET["IDNum"]))
{  
    $row = GetDataIndex("SELECT * FROM categories WHERE category_id = '".$_GET["IDNum"]."'");
    echo "<script>setDataField('category','".$row["category_name"]."');</script>";
  
}
/*
if(isset($_POST["btn_submit"]))
{  
    $var_categoryID = $_GET["IDNum"];
    $var_category_name = strtoupper($_POST["category"]);

    IUD("UPDATE categories SET category_name='".$var_category_name."' WHERE category_id = '".$_GET["IDNum"]."'");

    echo '<script>window.location.href="demo.php?category";</script>';

}
*/

?>