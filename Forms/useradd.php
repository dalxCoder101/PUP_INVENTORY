


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

<form id="form" method="post" action="addUser.php" enctype="multipart/form-data">
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div id="error">
               <p id="error-message"></p>
            </div>
            <div style="background-color:#1111;padding:10px">
                 <span>Add New User</span>
            </div>
         </strong>
        </div>
        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
        <!--  <form method="post" action="addUser.php" class="clearfix">-->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>

                   <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                   <input style="margin-left:5px"  type="text" class="form-control" id="lname" name="lname" placeholder="Lastname">
                   <input style="margin-left:5px" type="text" class="form-control" id="username" name="username" placeholder="Username">
                   <input style="margin-left: 4px;" type="text" class="form-control" id="password" name="password" placeholder="Password">

               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select id="user_role" class="form-control" name="user_role">
                       <option value="" selected disabled hidden>Select Occupancy Status</option>
                       <option value="Site Engineer">Site Engineer</option>
                         <option value="Office Ad">Office Ad</option>
                          <option value="Warehouse Admin">Warehouse Admin</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <!--IMAGE-->
                    <input id="file" type="file" name="product_image">
                  </div>                
                </div>
              </div>
            
                
         <!--<button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_adds" class="btn btn-danger">Add User</button>-->
         <button type="button" id="btn" class="btn btn-danger">Add User</button>


         <!-- </form>-->
         </div>
        </div>
      </div>
    </div>
</form>

<script>

$('#btn').on('click',function(){

var fname=document.getElementById("fname").value;
var lname=document.getElementById("lname").value;
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
var user_role=document.getElementById("user_role").value;
var file=document.getElementById("file").value;




//regex expression:
var reg_name_lastname = /^[a-zA-Z\s]*$/;

//Validation to the user_name input field
if(!reg_name_lastname.test($('#fname').val())){ //
    
     Swal.fire('First Name is Invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#fname").focus(), 500);

              });
                   
             return false;
}

if(!reg_name_lastname.test($('#lname').val())){ //
    
     Swal.fire('Last Name is Invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#lname").focus(), 500);

              });
                   
             return false;
}



 if(fname=="")
         {
              Swal.fire('First Name is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#fname").focus(), 500);

              });
                   
             return false;
           }
  if(lname=="")
  {
       {
              Swal.fire('Last Name is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#lname").focus(), 500);

              });
                   
             return false;
           }
  }
  if(username=="")
  {
        Swal.fire('Username is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#username").focus(), 500);

              });
                   
             return false;
  }
if(password=="")
  {
        Swal.fire('Password is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#password").focus(), 500);

              });
                   
             return false;
  }
  if(user_role==""){
      Swal.fire('Role is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#user_role").focus(), 500);

              });
                   
             return false;
  }
  if(file=="")
  {
     Swal.fire('Image  is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#file").focus(), 500);

              });
                   
             return false;
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



<?php
/*include_once 'MyFrameworks/DBQuery.php';


if(isset($_POST["btn_adds"]))
{  


    $var_username= strtoupper($_POST["username"]);
    $var_password = strtoupper($_POST["password"]);
    $var_user_role = strtoupper($_POST["user_role"]);
    $var_firsName=strtoupper($_POST["fname"]);
    $var_lastname=strtoupper($_POST["lname"]);

   
    $img_location='Images/';
    $var_product_image=$_FILES['product_image']['tmp_name'];
    $var_image_name=$_FILES['product_image']['name'];
     

    

       IUD("INSERT INTO user_login (username,password,user_role,image,first_name,last_name) VALUES ('".$var_username."','".$var_password."','".$var_user_role."','".$var_image_name."','".$var_firsName."','".$var_lastname."');");

         move_uploaded_file($var_product_image, $img_location.$var_image_name);

         echo '<script>window.location.href="demo.php?users";</script>';
   
 
}*/


?>