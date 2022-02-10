
<html>
    <head>
        <link href="assets/css/Animation.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/> 
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">

    </head>
    <style>
         

         *{
               font-family: 'Poppins', sans-serif;
               padding: 0px;
               margin: 0px;
           }
           /*.header{
              background-color:green;
              padding: 10px;
           }*/
           h2{
              color: #ffff;
              margin-left: 10px;
              letter-spacing:2px
           }
           .container{
             display: flex;
             flex-direction: column;
             border: 1px solid skyblue;
             position: relative;
             top: 40px;
             width: 50%;
             height: 450px; 
             padding: 0px 90px 0px 90px;   
           } 
           .control{
              margin-top: 20px;
           }
           .control input{
             background-color: #1111;

           }
           .con{
             margin-top: 80px;
           }
           #button_login{
             background-color:green;
             color: #ffff;

         }
          
    </style>
    <body>

       <form action="" method="POST" >
              <div style="padding:10px" class="bg-primary">
           <h2>INVENTORY MANAGEMENT SYSTEM</h2>
       </div>
          <div class="container">
            <div class="con">
            <div class="control">
                <label>Username</label>
               <input type="text" name="textbox_Username" id="username" onkeyup="GetDetail(this.value)" placeholder="Enter your username" class="form-control">
                 <input type="hidden" id="user" name="userRole" placeholder="ID">
                 <input type="hidden" id="firstname" name="fname" placeholder="firstname">
                 <input type="hidden" id="lastname" name="lname" placeholder="lastname">
         </div>
         <div class="control">
            <label>Password</label>
               <input id="textbox_Password" name="textbox_Password" placeholder="Enter your password" type="password" class="form-control" >
         </div>
         <div class="control">
              <button id="button_Login" name="button_Login" class="form-control bg-primary"><i class="fa fa-sign-in px-1"></i>Login</button>
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
        document.getElementById("firstname").value="";
         document.getElementById("lastname").value="";
       return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      
      xmlhttp.onreadystatechange=function(){
         if(this.readyState==4 && this.status==200){
            var myObj=JSON.parse(this.responseText);
            document.getElementById("user").value=myObj[0];
              document.getElementById("firstname").value=myObj[1];
                document.getElementById("lastname").value=myObj[2];
            
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



/*if($_SESSION['status']=='invalid' || empty($_SESSION['status']))
  {

     $_SESSION['status']=='invalid';
  }

if($_SESSION['status']=='valid')
{
      echo '<script>window.location.href="demo.php?dashboard";</script>';
}*/


if(isset($_POST["button_Login"]))
{  
    $userRole =  mysqli_real_escape_string(connection(),strtoupper($_POST["userRole"]));
     $firstname =  mysqli_real_escape_string(connection(),strtoupper($_POST["fname"]));
      $lastname =  mysqli_real_escape_string(connection(),strtoupper($_POST["lname"]));
    $username =  mysqli_real_escape_string(connection(),strtoupper($_POST["textbox_Username"]));
    $password =  mysqli_real_escape_string(connection(),strtoupper($_POST["textbox_Password"]));
    $row = GetData("Select Count(*) from user_login where username='".$username."' AND password='".$password."'");

    if ($row >0)
    {

     $_SESSION['userRole']=$userRole; 
     $_SESSION['first_name']=$firstname;
     $_SESSION['last_name']=$lastname;
     echo '<script>window.location.href="demo.php?dashboard";</script>';
     $_SESSION['status']='valid';
 
    }
    else{
        echo "<script>document.getElementById('label_Message').style.display = 'block';</script>";
       $_SESSION['status']='invalid';
        echo '<script>alert("Incorrect username or password!");</script>';


    }
}
?>