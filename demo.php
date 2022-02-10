

<?php

  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/all.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/fontawesome.min.css">

   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 

    <!--JAVASCRIPT-------------------------------------------->
    <script defer src="./js/text_field_validation.js"></script>
    
    <script src="jquery-3.6.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>

</head>

<body id="page-top">
<style>
    #top{
        width: 100%;
        height: 40px;
        content: '';
        display: flex;
        align-items: center;
        
      
    }
    body{
        font-family: 'Poppins', sans-serif;
    }
   /* #top h5{
        margin-left: 50px;
    }
  */
</style>
    <!-- Page Wrapper -->
   <div class="bg-primary" id="top">
         <a style="text-decoration: none;color: #ffff;" id="top"  href="?dashboard">     
            <div style="position:relative;left: 40px;top: 5px;">
               <h5>INVENTORY</h5>
              
             
            </div>
            <div style="display: flex;align-items: center;">
                <a style="color:#ffff;margin-right: 20px;" href="logout.php">LOGOUT</a>
            </div>
            </a>
   </div>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
         

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?dashboard">
                  
                    <span>Dashboards</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
         

            <!-- Nav Item - Pages Collapse Menu -->
            <li id="user_management" class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span id="user_management">User Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="?users">Manage Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li id="product_hide" class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Products</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="?products">Manage Products</a>
                        <a id="hide_category" class="collapse-item" href="?category">Manage Category</a>
                        <a class="collapse-item" href="?recieved">Received Products</a>
                        <a class="collapse-item" href="?release">Released Products</a>
                        <!--<a class="collapse-item" href="?productadd">Add Product</a>-->
                      
                    </div>
                </div> 
            </li>
    
            <!-- Nav Item - Pages Collapse Menu -->
            <li id="unit_hide" class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Units</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="?units">Manage Units</a>
                    </div>
                </div>
            </li>

       
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


         <?php


                include_once 'MyFrameworks/DBQuery.php';
                 if(isset($_GET["dashboard"])){
                    include_once 'Forms/dashboard.php';
                  }
                if(isset($_GET["products"])){
                    include_once 'Forms/products.php';
                   
                 }
                  if(isset($_GET["addProduct"])){
                    include_once 'Forms/addProduct.php';
                   
                 }
                 if(isset($_GET["units"])){
                    include_once 'Forms/units.php';
                 }
                 if(isset($_GET["recieved"])){
                    include_once 'Forms/recieved.php';
                   
                 }
                if(isset($_GET["release"])){
                   include_once 'Forms/release.php'; 
                 }
                if(isset($_GET["productadd"])){
                   include_once 'Forms/productadd.php';
                 }
                   if(isset($_GET["unit_add"])){
                   include_once 'Forms/unit_add.php';
                 }
                  if(isset($_GET["useradd"])){
                   include_once 'Forms/useradd.php';
                 }
                if(isset($_GET["product_release"])){
                   include_once 'Forms/product_release.php';
                }
                 if(isset($_GET["product_receive"])){
                   include_once 'Forms/product_receive.php';
                }
                if(isset($_GET["productedit"])){
                  include_once 'Forms/productedit.php';
                } 
                if(isset($_GET["unit_edit"]))
                {
                   include_once 'Forms/unit_edit.php';
                } 

                  if(isset($_GET["category_edit"]))
                {
                   include_once 'Forms/category_edit.php';
                } 

                if(isset($_GET["category"]))
                {
                   include_once 'category.php';
                } 
                if(isset($_GET["users"]))
                {
                   include_once 'Forms/users.php';
                }     

         ?>
              
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer style="background-color:#ffff;padding: 15px;">
                <div>
                    <div class="copyright text-center my-auto">
                        <span style="color: #111">&copy; Inventory 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout\</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
  
    <!-- Page level custom scripts -->
   
    <!---sweet alert--->
  
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->


</body>

</html>

<?php
if($_SESSION['status']=='invalid'|| empty($_SESSION['status']))

  {

     $_SESSION['status']=='invalid';
     echo '<script>window.location.href="index.php";</script>';
  }



include_once 'MyFrameworks/DBQuery.php';
if(isset($_GET["dashboard"])){
    include_once 'Forms/dashboard.php';
}
if(isset($_GET["products"])){
    include_once 'Forms/products.php';
}
if(isset($_GET["updatePro"]))
{
     include_once 'updatePro.php';
}
if(isset($_GET["update_Cat"]))
{
     include_once 'update_category.php';
}
if(isset($_GET["update_Unit"]))
{
     include_once 'update_Unit.php';
}

if(isset($_GET["expiration"]))
{
    include_once 'Forms/expiration.php';
}

if(isset($_GET["product_delete"]))
{
    include_once 'Forms/product_delete.php';
}
if(isset($_GET['unit_delete'])){
    include_once 'Forms/unit_delete.php';
}
if(isset($_GET["user_delete"]))
{
    include_once 'Forms/user_delete.php';
}
if(isset($_GET["category_delete"]))
{
    include_once 'Forms/category_delete.php';
}
 if(isset($_GET["category"]))
 {
    include_once 'category.php';
 } 


$userRole=$_SESSION['userRole'];

if($userRole=="WAREHOUSE ADMIN")
{


   
    echo "<script>
     
    
   document.getElementById('collapseTwo').style.display='none';
   document.getElementById('user_management').style.display='none';
   document.getElementById('print').style.display='none';
   document.getElementById('add').style.display='none';
   document.getElementById('btns').style.display='none';
   for(let el of document.getElementsByClassName('action-hide'))el.style.display='none';
   for(let el of document.getElementsByClassName('btn btn-primary'))el.style.display='none';
   document.getElementById('edits').style.display='none';

  


   </script>

   ";
}

if($userRole=='SITE ENGINEER')
{
    echo "<script>

   document.getElementById('user_management').style.display='none';
   document.getElementById('unit_hide').style.display='none';
   document.getElementById('hide_category').style.display='none';


   document.getElementById('add').style.display='none';
   document.getElementById('unit_hide').style.display='none';
   document.getElementById('myBtn').style.display='none';
   document.getElementById('actions').style.display='none';
   document.getElementById('barcode-hide').style.display='none';

   for(let el of document.getElementsByClassName('btn btn-info'))el.style.display='none';
   for(let el of document.getElementsByClassName('btn btn-primary'))el.style.display='none'; 
   for(let el of document.getElementsByClassName('btn btn-danger'))el.style.display='none';

 </script>";
    
}


if($userRole=='OFFICE AD')
{
   echo "<script>

      /*  document.getElementById('user_management').style.display='none';*/
          document.getElementById('product_hide').style.display='none';
          document.getElementById('table-container').style.display='none';


 </script>";
}


?>

