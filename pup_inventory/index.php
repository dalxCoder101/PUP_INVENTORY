<?php
session_start();
?>
<html>
    <head>
        <link href="assets/css/Animation.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <style>
          *{
               font-family: 'Poppins', sans-serif;
           }
    </style>
    <body>

       <form action="" method="POST" >
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
                                        <div class="col-4 text-center font-weight-bold h5 text-dark">Login</div>
                                        <div class="col-4">
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-12  font-weight-bold text-dark">
                                            Username
                                        </div>
                                        <div class="col-lg-12">
                                    
                                       <input type="text" name="textbox_Username" id="username" onkeyup="GetDetail(this.value)" placeholder="Username" class="form-control">


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
                                    <div>
                                           <input type="hidden" id="user" name="userRole" placeholder="ID">
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-lg-12">
                                               <label id="label_Message" name="label_Message" style="display:none;color:red">Wrong Password Or Username</label>                                 
                                        </div>
                                    </div>
                                    <div class="row py-0">
                                        <div class="col-lg-12">
                                        <input type="checkbox" id="checkbox_rememberMe" name="checkbox_rememberMe" value="Remember me">
                                        <label for="checkbox_rememberMe"> Remember me</label><br>
                                          <p style="position: relative;top: -30px;left: 300px;">Please<a href="register.php"> Register </a> here!</p>
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button id="button_Login" name="button_Login" style="background-color:#800404;" class="btn py-2 px-4 text-center text-white btn-sm font-weight-bold"><i class="fa fa-sign-in px-1"></i>Login</button>

                             
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




<script src="sweetalert.min.js"></script>
    </body>


<script>
    
   function GetDetail(str){
    if(str.length==0){
      document.getElementById("user").value="";
       return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      
      xmlhttp.onreadystatechange=function(){
         if(this.readyState==4 && this.status==200){
            var myObj=JSON.parse(this.responseText);
            document.getElementById("user").value=myObj[0];
            
         }
      };
      xmlhttp.open("GET","fetch.php?username=" + str,true);
      xmlhttp.send();
    }
  }
  
</script>
</html>


<?php
session_start();
include_once 'MyFrameworks/DBQuery.php';


if($_SESSION['status']=='invalid'|| empty($_SESSION['status']))
  {

     $_SESSION['status']=='invalid';
  }

if($_SESSION['status']=='valid')
{
      echo '<script>window.location.href="demo.php?dashboard";</script>';
}


if(isset($_POST["button_Login"]))
{  
    $userRole =  mysqli_real_escape_string(connection(),strtoupper($_POST["userRole"]));
    $username =  mysqli_real_escape_string(connection(),strtoupper($_POST["textbox_Username"]));
    $password =  mysqli_real_escape_string(connection(),strtoupper($_POST["textbox_Password"]));
    $row = GetData("Select Count(*) from user_table where IDUsername='".$username."' AND IDPassword='".$password."'");

    if ($row >0)
    {

     $_SESSION['userRole']=$userRole; 
    echo '<script>window.location.href="demo.php?dashboard";</script>';
     $_SESSION['status']='valid';
 
    }
    else{
        echo "<script>document.getElementById('label_Message').style.display = 'block';</script>";


       $_SESSION['status']='invalid';

    }
}
?>