
<?php

include_once 'MyFrameworks/DBQuery.php';

IUD("DELETE from user_login WHERE user_id= '".$_GET["IDNum"]."'");
 

 echo '<script>window.location.href="demo.php?users";</script>';

?>