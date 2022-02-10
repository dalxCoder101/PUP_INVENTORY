
<?php

include_once 'MyFrameworks/DBQuery.php';

IUD("DELETE from product WHERE product_id = '".$_GET["IDNum"]."'");
 

 echo '<script>window.location.href="demo.php?products";</script>';

?>