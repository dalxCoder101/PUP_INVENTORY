

<?php

include_once 'MyFrameworks/DBQuery.php';


function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}




    $var_building_no=strtoupper($_POST['building_no']);
    $var_unit_no=strtoupper($_POST['unit_no']);
    $var_occupancy=strtoupper($_POST['occupancy']);
   
  

    $row_validate = GetData("SELECT * from tbl_unit  where building_no='".$var_building_no."'and unit_no='".$var_unit_no."'");

    if($row_validate)
    {
            
                echo '<script>alert("Building '.$var_building_no.' unit '.$var_unit_no.' already occupied!")</script>';
                echo '<script>window.location.href="demo.php?units";</script>';
                return;
    }

    if($var_occupancy=="UNOCCUPIED" || $var_occupancy=="REDDOORZ")
    {
        $var_start_date="---------------";
        $var_end_date="---------------";


    }
    else if ($var_occupancy!="UNOCCUPIED" || $var_occupancy=="REDDOORZ") 
    {
        $var_start_date=$_POST['start_date'];
        $var_end_date=$_POST['end_date'];
        
        if(empty($var_start_date))
        {
            echo '<script>alert("Start Date is empty!, Please fill!")</script>';
            echo '<script>window.location.href="demo.php?units";</script>';
            return;
        }
        else if(empty($var_end_date))
        {
             echo '<script>alert("End Date is empty!, Please fill!")</script>';
             echo '<script>window.location.href="demo.php?units";</script>';
             return;
        }
            if($var_start_date>$var_end_date)
          {
              echo '<script>alert("Start Date must not greater than the End date!")</script>';
              echo '<script>window.location.href="demo.php?units";</script>';
              return;
         }

    }


    
    IUD("INSERT INTO tbl_unit (building_no,unit_no,occupancy_status,start_date,end_date) VALUES ('".$var_building_no."','".$var_unit_no."','".$var_occupancy."','".$var_start_date."','".$var_end_date."');");

    
     echo '<script>window.location.href="demo.php?units";</script>';
 


?>