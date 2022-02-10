





<?php

$con=mysqli_connect("localhost","root","","inventory_system");
$result=mysqli_query($con,"SELECT * from categories");


$row = GetDataIndex("SELECT * FROM tbl_unit WHERE tbl_unitID = '".$_GET["IDNum"]."'");
$occupancy=$row['occupancy_status'];


?>




 <style>
    .container{
        
       padding: 20px;
        border: 1px solid #1111;
       margin-top: 10px;
    }
</style>


<form id="form" method="post" action="?update_Unit&IDNum=<?php echo$_GET["IDNum"];?>" enctype="multipart/form-data"> <!--working here-->
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div style="display: flex;align-items: center;" id="error">
              <div>
                 <p style="color:#ffff;margin-top: 7px;" id="error-message"></p>
             </div>
            </div>
            <div style="background-color:#1111;padding:10px">
                 <span>Edit Unit</span>
            </div>
         </strong>
        </div>


        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form method="post" action="add_product.php" class="clearfix">

           <div class="form-group">
                     <label for="exampleFormControlSelect2">Occupancy Status</label>
               <select onchange="showDiv(this)" class="form-control" id="select" name="occupancy">
              <option value="" selected disabled hidden>Select Occupancy Status</option>
                     
               <option value="TURNED-OVER OCCUPIED" <?php if($occupancy== "TURNED-OVER OCCUPIED") echo 'selected = "selected"' ; ?>>TURNED-OVER OCCUPIED</option>

               <option value="TURNED-OVER UNOCCUPIED" <?php if($occupancy== "TURNED-OVER UNOCCUPIED") echo 'selected = "selected"'; ?>>TURNED-OVER UNOCCUPIED</option>

               <option value="UNOCCUPIED" <?php if($occupancy== "UNOCCUPIED") echo 'selected = "selected"'; ?>>UNOCCUPIED</option>
                  <option value="REDDOORZ" <?php if($occupancy== "REDDOORZ") echo 'selected = "selected"'; ?>>REDDOORZS</option>
             
       </select>

<script type="text/javascript">
function showDiv(select){
   if(select.value=="UNOCCUPIED" || select.value=="REDDOORZ" ){
    document.getElementById('date').style.display = "none";
    document.getElementById('dates').style.display = "none";
   } else{
    document.getElementById('date').style.display = "block";
    document.getElementById('dates').style.display = "block";

  
   }
} 




</script>
         </div>
         <div id="date" class="form-group">
           <label class="float-left" for="exampleStartDate">Start Date</label>
           <input type="date" value="<?php echo $row['start_date']; ?>" name="start_date" class="form-control">
         </div>
            <div id="dates" class="form-group">
           <label class="float-left" for="exampleStartDate">End Date</label>
           <input  type="date" value="<?php echo $row['end_date'];  ?>" name="end_date" class="form-control">


        <input type="hidden" id="first_input" class="form-control" value="<?php echo $row["occupancy_status"];?>" placeholder="Write First Text" />
         <input type="hidden" id="second_input" onkeyup="compare_input();" class="form-control" value="<?php echo $row["occupancy_status"];?>" placeholder="Write Second Text" />


         </div>
<script>
  
// Compare two input fields in js


window.onload=function(){


  var f_input=document.getElementById('select').value;
  var s_input=document.getElementById('second_input').value;
  if(f_input==="UNOCCUPIED" || f_input==="REDDOORZ"){
      document.getElementById('date').style.display = "none";
    document.getElementById('dates').style.display = "none";
  }
};


</script>

    <!-- <button type="submit" onclick="return confirm('Are you sure you want to save it?')" name="btn_adds" class="btn btn-danger">Save Changes</button>-->
     <button type="button" id="btn" class="btn btn-danger">Save Changes</button>





          </form>
         </div>
        </div>
      </div>
    </div>
</form>


<script>
    

$('#btn').on('click',function(){

   Swal.fire({
             title: 'Are you sure you want to update it?',
             text: "You won't be able to revert this!",
             icon: 'info',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, save it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Updated!',
                      'Your file has been updated successfully.',
                      'success',       
                 ).then(function(){
                        $('#form').submit();
                       // window.location.href="addPro.php";
                  });
               }

           })
          

       })

</script>




<?php

/*
include_once 'MyFrameworks/DBQuery.php';


if(isset($_POST["btn_adds"]))
{  
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

     }    

*/
?>