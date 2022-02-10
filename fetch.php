
<?php
session_start();

//include_once 'MyFrameworks/DBQuery.php';

   $connection=mysqli_connect("localhost","root","","inventory_system");
   $username=$_REQUEST['username'];

if($username!=""){

	  $query=mysqli_query($connection,"SELECT * FROM user_login where username='$username'");
      $row=mysqli_fetch_array($query);

      $type=$row["user_role"];
      $firstName=$row["first_name"];
      $lastName=$row['last_name'];


}
$result=array("$type","$firstName","$lastName");
$myJson=json_encode($result);

echo "$myJson";


?>
