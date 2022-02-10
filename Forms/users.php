
<?php

$userRole=$_SESSION['userRole'];
if($userRole=='WAREHOUSE ADMIN'){

     echo '<script>window.location.href="demo.php?products";</script>';
}
if($userRole=='SITE ENGINEER'){
     echo '<script>window.location.href="demo.php?products";</script>';
}
?>

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg ">
            <div class="card">
                <div class=" p-3 bg-light h5 font-weight-bold">
                    <a>Manage Users</a>
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="row p-3">
                    <div class="col-lg-4">
                        <form method="POST">
                            <div class="font-weight-bold">Search</div>
                            <div class="d-flex">
                             <input name="textbox_search" placeholder="Search" class="form-control">
                             <button name="button_search" class="btn btn-dark text-white"><i class="fa fa-search"></i></button>

                            </div>
                        </form>
                        <div class="con">
                        <div class="box1" class="box">  
                        </div>
                        <div class="content">
                            <p style="margin-top: 10px;">Warranty Expired</p>
                        </div>
                              
                        </div>
                        <style>
                            .con{
                                display: flex;
                                align-items: center;
                                position: relative;
                                left: 500px;
                                top: -60px;
                                
                            }
                            .box1{
                                content:'';height: 15px; width: 15px;
                                background-color: red;
                                border-radius: 50px;
                                display: none;
                                
                               
                            }
                            .content{
                                position: relative;
                                left: 10px;
                                top: 1.5px;
                                display: none;                        
                            }
                            th{
                                
                                color: #000;

                            }
                            tr{
                                width: 100%;
                            }
                        </style>
                    </div>
                    <div class="col-lg-8 text-right">
                        <br>
                        <!--ADD BUTTON-->
                        <a href="?useradd" id="add" class="btn btn-primary font-weight-bold">ADD <i class="fa fa-plus"></i></a>

                        <!--<a href="print.php">print</a>-->
                    </div>  
                </div>  
                <div class="row px-3">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">User Role</th>
                            <th scope="col">Image</th>
                            <th id="actions" scope="col">Actions</th>

                        </tr>
                    </thead>
                    <?php 
                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM user_login WHERE user_role LIKE '%".$_POST["textbox_search"]."%' OR username  LIKE '%".$_POST["textbox_search"]."%' ","Tables/users.php");
                        }
                        else{
                            SetDiv("SELECT * FROM user_login ","Tables/users.php");
                        } 
                    ?>                        
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>