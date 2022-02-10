
<?php

include_once 'MyFrameworks/DBQuery.php';

IUD("DELETE from tbl_unit WHERE tbl_unitID = '".$_GET["IDNum"]."'");
 

 echo '<script>window.location.href="demo.php?units";</script>';

?>