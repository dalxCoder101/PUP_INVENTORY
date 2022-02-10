<?php


include_once 'MyFrameworks/DBQuery.php';

    $var_unitID = $_GET["IDNum"];
    $var_occupancy_status = strtoupper($_POST["occupancy"]);
    $var_start_date = strtoupper($_POST["start_date"]);
    $var_end_date = strtoupper($_POST["end_date"]);



    if($var_occupancy_status=="UNOCCUPIED" || $var_occupancy_status=="REDDOORZ")
    {
        $var_start_date="---------------";
        $var_end_date="---------------";


    }
    else if ($var_occupancy_status!="UNOCCUPIED" || $var_occupancy_status=="REDDOORZ") 
    {
        $var_start_date=$_POST['start_date'];
        $var_end_date=$_POST['end_date'];

      
 

        
        if(empty($var_start_date))
        {
            echo '<script>alert("Start Date is empty!, Please fill!")</script>';
            return;
        }
        else if(empty($var_end_date))
        {
             echo '<script>alert("End Date is empty!, Please fill!")</script>';
             return;
        }
            if($var_start_date>$var_end_date)
          {
              echo '<script>alert("Start Date must not greater than the End date!")</script>';
              return;
         }
 
    }
   
    IUD("UPDATE tbl_unit SET occupancy_status='".$var_occupancy_status."',start_date='".$var_start_date."',end_date='".$var_end_date."' WHERE tbl_unitID = '".$_GET["IDNum"]."'");
     echo '<script>window.location.href="demo.php?units";</script>';

       
?>