


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
   /* #top h5{
        margin-left: 50px;
    }
  */
</style>
    <!-- Page Wrapper -->
   <div class="bg-primary" id="top">
         <a style="text-decoration: none;color: #ffff;" id="top"  href="?dashboard">     
            <div>
               <h5>INVENTORY</h5>
            </div>
            <div style="display: flex;align-items: center;">
                <a style="color:#ffff;margin-right: 20px;" href="logout.php">Logout</a>
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="?category">Manage Groups</a>
                        <a class="collapse-item" href="?users">Manage Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Products</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="?products">Manage Products</a>
                        <a class="collapse-item" href="?productadd">Add Product</a>
                      
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

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
                if(isset($_GET["productadd"])){
                   include_once 'Forms/productadd.php';
                 }

                if(isset($_GET["productedit"])){
                  include_once 'Forms/productedit.php';
                } 
                if(isset($_GET["category"]))
                {
                   include_once 'category.php';
                } 
                if(isset($_GET["users"]))
                {
                   include_once 'Tables/users.php';
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!---sweet alert--->
    <script src="sweetalert2.min.js"></script>
     <script src="sweetalert.min.js"></script>


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
if(isset($_GET["expiration"]))
{
    include_once 'Forms/expiration.php';
}

if(isset($_GET["product_delete"]))
{
    include_once 'Forms/product_delete.php';
}
if(isset($_GET["category_delete"]))
{
    include_once 'Forms/category_delete.php';
}







$userRole=$_SESSION['userRole'];

if($userRole=="WAREHOUSE HEAD")
{
   echo "<script>
     
     document.getElementById('expiration').style.display='none';
   </script>

   ";
}

if($userRole=='SITE ENGINEER')
{
    echo "<script>

    document.getElementById('expiration').style.display='none';
    for(let el of document.getElementsByClassName('btn btn-primary text-white'))el.style.display='none';

    for(let el of document.getElementsByClassName('btn btn-info'))el.style.display='none';

    for(let el of document.getElementsByClassName('btn btn-danger text-white'))el.style.display='none';

   
   document.getElementById('actions').style.display='none';
   for(let el of document.getElementsByClassName('action-hide'))el.style.display='none';
   document.getElementById('add').style.display='none';
  /* document.getElementById('print').style.display='none';*/
 </script>";
    
}
if($userRole=='OFFICE AD')
{
   echo "<script>

    document.getElementById('add').style.display='none';
   document.getElementById('print').style.display='none';
 
  
   for(let el of document.getElementsByClassName('btn btn-primary text-white'))el.style.display='none';

   for(let el of document.getElementsByClassName('btn btn-success text-white'))el.style.display='none';
   for(let el of document.getElementsByClassName('btn btn-danger text-white'))el.style.display='none';

   document.getElementById('actions').style.display='none';
   for(let el of document.getElementsByClassName('action-hide'))el.style.display='none';
   document.getElementsByClassName(' btn btn-dark text-white font-weight-bold')[0].style.display='none';
 
 
   document.getElementsByClassName('actions')[0].style.display='none';
   document.getElementsByClassName('box1')[0].style.display = 'block';
   document.getElementsByClassName('content')[0].style.display = 'block';
  

 </script>";
}


?>

