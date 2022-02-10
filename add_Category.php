

<?php

 include_once 'MyFrameworks/DBQuery.php';

    $category_name = strtoupper($_POST["category"]); 
     
     
     $row = GetData("SELECT * from categories where category_name='".$category_name."'");
   
    if($row)
     {
           
         echo '<script>alert("'.$category_name.' already existed!");</script>'; 
          echo '<script>window.location.href="demo.php?category";</script>';


               
     }
     else{
     

    
      IUD("INSERT INTO categories (category_name) VALUES ('".$category_name."');");
    
   /* echo '<script>alert("INSERTED SUCCESSFULLY")</script>';*/
    echo '<script>window.location.href="demo.php?category";</script>';

   }

?>