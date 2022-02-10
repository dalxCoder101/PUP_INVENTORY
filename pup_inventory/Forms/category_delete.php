
<?php

include_once 'MyFrameworks/DBQuery.php';

IUD("DELETE from categories WHERE category_id = '".$_GET["IDNum"]."'");
echo '<script>window.location.href="demo.php?category";</script>';
 

?>