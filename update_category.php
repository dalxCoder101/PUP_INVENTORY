
<?php


     include_once 'MyFrameworks/DBQuery.php';

 
    $var_categoryID = $_GET["IDNum"];
    $var_category_name = strtoupper($_POST["category"]);

    IUD("UPDATE categories SET category_name='".$var_category_name."' WHERE category_id = '".$_GET["IDNum"]."'");

    echo '<script>window.location.href="demo.php?category";</script>';


?>