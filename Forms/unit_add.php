


<?php
  $page_title = 'Add Product';
  $con=mysqli_connect("localhost","root","","inventory_system");
  $result=mysqli_query($con,"SELECT * from tbl_unit");

?>

<style>
    .container{
        
       padding: 20px;
        border: 1px solid #1111;
       margin-top: 10px;
    }
    #error{
       display: flex;
       justify-content: center;

    }
</style>

<form id="form" method="post" action="addUnit.php" enctype="multipart/form-data">
  <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <div style="display: flex;align-items: center;" id="error">
              <div>
                 <p style="color:#ffff;margin-top: 7px;" id="error_message"></p>
             </div>
            </div>
            <div style="background-color:#1111;padding:10px">
                 <span>Add Unit</span>
            </div>
         </strong>
        </div>


        <div style="padding:10px" class="panel-body">
         <div class="col-md-12">
          <form method="post" action="add_product.php" class="clearfix">

             <div class="form-group">
                  <label class="float-left" for="exampleInputBuilding">Building No.</label>
                 <!-- <input type="number" maxlength="2" minlength="2" class="form-control" name="building_no" id="building" placeholder="Building No." required>-->

                   <input onkeypress="return validationNum(event)" type="tel" min="1" id="building" maxlength="2" class="form-control" name="building_no" placeholder="Building No." required>
                  </div>

            <div class="form-group">
                  <label class="float-left" for="exampleInpuyUnit">Unit No</label>
                  <input onkeypress="return validationNum(event)" type="tel" min="1"  maxlength="4" name="unit_no" class="form-control" id="unit" placeholder="Unit No." required>


           </div>
           <div class="form-group">
                     <label for="exampleFormControlSelect2">Occupancy Status</label>

              <select onchange="showDiv(this)" class="form-control" id="occupancy" name="occupancy" required>
              <option value="" selected disabled hidden>Select Occupancy Status</option>
              <option value="Unoccupied">Unoccupied</option>
              <option value="Turned-over Occupied">Turned-over Occupied</option>
              <option value="Turned-over Unoccupied">Turned-over Unoccupied</option>
              <option value="RedDoorz">RedDoorz</option>
             

    </select>


<script type="text/javascript">
function showDiv(select){
   if(select.value=="Unoccupied" || select.value=="RedDoorz" ){
    document.getElementById('date').style.display = "none";
    document.getElementById('dates').style.display = "none";
   } else{

    document.getElementById('date').style.display = "block";
    document.getElementById('dates').style.display = "block";

 
  
   }
} 
</script>

   
         </div>
         <div class="form-group" id="date">
           <label class="float-left" for="exampleStartDate">Start Date</label>
           <input type="date" name="start_date" class="form-control">
         </div>
            <div class="form-group" id="dates">
           <label class="float-left" for="exampleStartDate">End Date</label>
           <input id="end_date" type="date" name="end_date" class="form-control">
         </div>

              <button type="button" id="btn" class="btn btn-danger">Add Unitt</button>

          </form>
         </div>
        </div>
      </div>
    </div>
</form>



<!--PRODUCT EDIT FORM INPUT FIELDS VALIDATION --------------->
<script>



   function validationNum(evt)
   {
      var getNumCd = (evt.which) ? evt.which : event.keyCode;
      if (getNumCd != 46 && getNumCd > 31 
        && (getNumCd < 48 || getNumCd > 57))
         return false;
      return true;
   }


$('#btn').on('click',function(){


var building_no=document.getElementById("building").value;
var unit_no=document.getElementById("unit").value;
var occupancy=document.getElementById("occupancy").value;
var date=document.getElementById("date").value;
var dates=document.getElementById("end_date").value;


if(building_no==""){

    Swal.fire('Building No is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#building").focus(), 500);

              });
                   
              return false;
}
if(unit_no=="")
{
       Swal.fire('Unit No is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#unit").focus(), 500);

              });
                   
              return false; 
}
if(occupancy=="")
{
         Swal.fire('occupancy is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#occupancy").focus(), 500);

              });
                   
              return false;
}
if(occupancy=="Turned-over Occupied")
{
   if(date>dates)
   {
        Swal.fire('greater than!').then(function(){
              Swal.close();
              setTimeout(() => $("#end_date").focus(), 500);

              });
                   
              return false;
   }
}
   

   Swal.fire({
             title: 'Are you sure you want to save it?',
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
                      'Saved!',
                      'Your file has been saved successfully.',
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


function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}


if(isset($_POST["btn_adds"]))
{  


    $var_building_no=strtoupper($_POST['building_no']);
    $var_unit_no=strtoupper($_POST['unit_no']);
    $var_occupancy=strtoupper($_POST['occupancy']);
   
  

    $row_validate = GetData("SELECT * from tbl_unit  where building_no='".$var_building_no."'and unit_no='".$var_unit_no."'");

    if($row_validate)
    {
            
                echo '<script>alert("Building '.$var_building_no.' unit '.$var_unit_no.' already occupied!")</script>';
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


    
    IUD("INSERT INTO tbl_unit (building_no,unit_no,occupancy_status,start_date,end_date) VALUES ('".$var_building_no."','".$var_unit_no."','".$var_occupancy."','".$var_start_date."','".$var_end_date."');");

    
     echo '<script>window.location.href="demo.php?units";</script>';
 
}

*/
?>