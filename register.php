<?php
session_start();
?>
<html>
    <head>
        <link href="assets/css/Animation.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <style>
         *{
              font-family: 'Poppins', sans-serif;
          }
        </style>
    </head>
    <body>


        <form method="POST" >
        <div class="bg-light position-fixed h-100 w-100">
            <div class="container-fluid py-5">
            <div class="row">
                        <div class="col-lg-8 card m-auto p-5 ">
                            <div class="row">
                                <div class="col-lg-6 font-weight-bold h4 text-dark ">
                                    <asp:Image ID="Image_Logo" Width="50" runat="server" />
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="p-2 font-weight-bold text-dark">
                                        Visit Our Social Media Accounts
                                    </div>
                                    <div class="btn-group">
                                        <div class="px-2">
                                            <div class="text-center rounded-circle py-1" style="width: 35px; height: 35px; background-color: #3b5998">
                                                <a href="https://web.facebook.com/ThePUPOfficial" target="_blank">
                                                    <i class="fa fa-facebook-f p-2 text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="px-2">
                                            <div class="text-center rounded-circle py-1 " style="width: 35px; height: 35px; background-color: #FF0000">
                                                <a href="https://www.youtube.com/channel/UCB9lVbbdMmPZPUFsWv3r3cw" target="_blank">
                                                    <i class="fa fa-youtube-play  p-2 text-white"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="px-2">
                                            <div class="text-center rounded-circle py-1 " style="width: 35px; height: 35px; background-color: dodgerblue">
                                                <a href="https://www.pup.edu.ph/?fbclid=IwAR2ysYxNQCWusDMshbXbkcaOOk-LCXam8DXnhznC7vrwh3R5zw0FSmVbhB8"  target="_blank">
                                                    <i class="fa fa-wechat  p-2 text-white"></i>
                                                </a>   
                                            
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                                        <div class="desktop-Backgroud">
                                            <img src="Images/logoW.png" style="width:100%">
                                        </div>
                                        <div class="mobile-Backgroud">                      
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-4">
                                            <hr />
                                        </div>
                                        <div class="col-4 text-center font-weight-bold h5 text-dark">Register</div>
                                        <div class="col-4">
                                            <hr />
                                        </div>
                                    </div>
                                    
                                    <div class="row ">
                                        <div class="col-lg-12  font-weight-bold text-dark">
                                             User Role
                                        </div>

                                           <select name="user_role" style="position: relative;left: 15px;padding: 5px;width: 200px;border-color: #1111;">
                                                 <option value="" disabled selected>Choose Role</option>
                                                 <option value="Warehouse Head">Warehouse Head</option>
                                                 <option value="Office Ad">Office Ad</option>
                                                 <option value="Site Engineer">Site Engineer</option>
                                                 
                                            </select>
                                        
                                    </div>


                                    <div class="row ">
                                        <div class="col-lg-12  font-weight-bold text-dark">
                                            Username
                                        </div>
                                        <div class="col-lg-12">
                                            <input id="textbox_Username" name="textbox_Username" placeholder="Enter your username" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-12  font-weight-bold text-dark">
                                            Password
                                        </div>
                                        <div class="col-lg-12">
                                            <input id="textbox_Password" name="textbox_Password" placeholder="Enter your password" type="password" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-lg-12">
                                               <label id="label_Message" name="label_Message" style="display:none;color:red"><span id="role">djd</span> already exist!</label>                                 
                                        </div>
                                    </div>
                                    <div class="row py-0">
                                        <div class="col-lg-12">
                                        <input type="checkbox" id="checkbox_rememberMe" name="checkbox_rememberMe" value="Remember me">
                                        <label for="checkbox_rememberMe"> Remember me</label><br>
                                          <p style="position: relative;top: -30px;left: 300px;">Back to<a href="index.php"> Login </a> here!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button id="button_Login" name="button_register" style="background-color:#800404;" class="btn py-2 px-4 text-center text-white btn-sm font-weight-bold"><i class="fa fa-sign-in px-1"></i>Register</button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 card m-auto p-3 rounded-0 text-white" style="background-color:#800404">
                            <div class="row">
                                <div class="col-lg-9">
                                    Copyright © 2021. Polytechnic University of the Philippines | All Rights Reserved Metro Manila, Philippines
                                </div>
                                <div class="col-lg-3 text-right font-weight-bold">
                                    Version 1.0.0.0                           
                                </div>
                            </div>
                        </div>

                    </div>
               </div>
           </div>

        </form>

    </body>
</html>


<?php
include_once 'MyFrameworks/DBQuery.php';
if(isset($_POST["button_register"]))
{  

    $userRole=strtoupper($_POST["user_role"]);
    $username = strtoupper($_POST["textbox_Username"]);
    $password = strtoupper($_POST["textbox_Password"]);
    $Idname="";

    $row = GetData("SELECT * from user_table where IDRole='".$userRole."'");
   
    if($row)
     {
     
         echo "<script>document.getElementById('label_Message').style.display = 'block';</script>";
         echo "<script>document.getElementById('role').innerHTML='$userRole';</script>";
         
         
     }

 else{
     
        IUD("INSERT INTO user_table (IDUsername,IDPassword,IDRole,IDName) VALUES ('".$username."','".$password."','".$userRole."','".$Idname."');");

         header("Location:index.php");

    }
  
}
?>

