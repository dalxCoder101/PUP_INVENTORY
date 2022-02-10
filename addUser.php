

<?php

include_once 'MyFrameworks/DBQuery.php';



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
   



?>