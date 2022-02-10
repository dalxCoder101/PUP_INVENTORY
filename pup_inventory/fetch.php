
<?php
session_start();

//include_once 'MyFrameworks/DBQuery.php';

   $connection=mysqli_connect("localhost","root","localhost","inventory_system");
   $username=$_REQUEST['username'];

if($username!=""){

	  $query=mysqli_query($connection,"SELECT * FROM user_table where IDUsername='$username'");
      $row=mysqli_fetch_array($query);

      $type=$row["IDRole"];

}

$result=array("$type");
$myJson=json_encode($result);

echo "$myJson";


?>
