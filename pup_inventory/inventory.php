
<?php


session_start();
?>
<html>

    <head>
        <link href="assets/css/Animation.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/myCSS.css" rel="stylesheet" type="text/css"/> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

       <style>
           *{
               font-family: 'Poppins', sans-serif;
           }
           .nav,a{
               font-weight: 400;

           }
           tr:hover{
              background-color: green;
              color: #ffff;
           }
       </style>
    </head>
    <body>
            <div class="card bg-light p-2">   
                <div class="d-flex">
                   
                    <img src="Images/logoW.png" style="width:300px">
                    <div class="nav" style="display: flex;align-items:center;margin-left: 280px;">
                    <a class="h5 text-secondary p-3" href="?dashboard">Dashboard</a>
                    <a class="h5 text-secondary p-3" href="?products">Products</a>
                    <a id="expiration" class="h5 text-secondary p-3" href="?expiration">Expiration</a>
                    <a class="h5 text-secondary p-3" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
            <div>
                <p><?php //echo $_SESSION['status'];?></p>
            </div>
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
if(isset($_GET["productadd"])){
    include_once 'Forms/productadd.php';
}
if(isset($_GET["productedit"])){
    include_once 'Forms/productedit.php';
}
if(isset($_GET["product_delete"]))
{
    include_once 'Forms/product_delete.php';
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

