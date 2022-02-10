<?php



$userRole=$_SESSION['userRole'];
if($userRole=='WAREHOUSE ADMIN'){

   // echo '<script>window.location.href="demo.php?products";</script>';
}
if($userRole=='SITE ENGINEER'){
    echo '<script>window.location.href="demo.php?products";</script>';
}


?>


<br>
<!--<h1><?php //echo $userRole;?></h1>-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg ">
            <div class="card">
                <div class=" p-3 bg-light h5 font-weight-bold">
                    <a>Manage Units</a>
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="row p-3" >
                     <form method="post" action="#">
   <div style="display: flex;align-items: center;justify-content: space-around;">
                    <div class="col-lg-4">
                        <form method="POST">
                            <div class="d-flex">
                             <input name="textbox_search" placeholder="Search" class="form-control">
                             <button name="button_search" class="btn btn-dark text-white"><i class="fa fa-search"></i></button>

                            </div>
                        </form>
  
                    </div>

                   
                  <style>
                        #btns{
                            display: none;
                        }
                    </style>
              
          
                    <div class="date" style="display:flex;width: 450px;justify-content: space-between;align-items: center;">
                         
                        <div>
                             <label>From:</label>
                             <input type="date" name="date_from" id="date_from">
                        </div>
                        <div>
                             <label>To</label>
                             <input type="date" name="date_to">
                        </div>
                         <div>
                            
                               <button name="btn-filter" style="background-color:black;color:#fff;padding: 3px 10px;border-radius: 5px;border: none;">Filter</button>
                        </div>
                       

                    </div>

                  
                     <div style="margin-left:80px;display: flex;justify-content: space-around;width:180px;">
                        <div>
                            <a href="print_unit.php" id="print" class="btn btn-secondary font-weight-bold">PRINT <i class="fa fa-plus"></i></a>
                        </div>
                        <div>
                           <button id="btns" type="submit" class="btn btn-secondary font-weight-bold" name="btn-print">PRINT <i class="fa fa-plus"></i></button>
                        </div>
                        <div>
                        <a href="?unit_add" id="add" class="btn btn-primary font-weight-bold">ADD <i class="fa fa-plus"></i></a>
                       </div>
                         </form>
                     </div>
   
           </div>


            <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Scan Product Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>       
          </div>



 <div class="modal-body">
                 <!--modal body------------------------------------------------------------------------------>
  <div class="form-group">
       <label class="float-left" for="exampleInputEmail1">Product Barcode</label>
       <input type="email" class="form-control" id="barcode" onkeyup="GetDetail(this.value)" placeholder="Enter Product Barcode">
  </div>
  <div class="form-group">

       <label class="float-left" for="exampleInputPassword1">Product Name</label>
       <input type="text" id="product_name" class="form-control" placeholder="Product Name">
  </div>
    <div class="form-group">
       <label class="float-left" for="exampleInputEmail1">Category</label>
       <input type="text" class="form-control" id="product_category" placeholder="Category">
  </div>
  <div class="form-group">
       <label class="float-left" for="exampleInputPassword1">Instock</label>
       <input type="text" id="stock" class="form-control" placeholder="Stock">
  </div>
  <div class="form-group">
    <div class="float-left imgBox">
         <img style="background-color:#ffff" src="" id="image">
       </div>
  </div>
     </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           
      </div>
    </div>
  </div>
</div>
 </div>  
        </div>  


  <script>
    
   function GetDetail(str){
    if(str.length==0){
         document.getElementById("product_name").value="";
         document.getElementById("product_category").value="";
      return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      
      xmlhttp.onreadystatechange=function(){
         if(this.readyState==4 && this.status==200){
            var myObj=JSON.parse(this.responseText);

            let value=myObj[2];
            let location="Images/";
            let img=myObj[3];
            let result=location+img;
            document.getElementById("product_name").value=myObj[0];
            document.getElementById("product_category").value=myObj[1];
            document.getElementById("stock").value=result;

            document.getElementById('image').src = "Images/" + myObj[3] +"";
                   
         }
      };
      xmlhttp.open("GET","fetch_barcode.php?barcode=" + str,true);
      xmlhttp.send();
    }
  }
  
</script>



                <div class="row px-3">
                <table id="table" class="table">
                    <thead>
                        <tr>
                          
                            <th scope="col">Building No.</th>
                            <th scope="col">Unit No</th>
                            <th scope="col">Occupancy Status</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th id="edits" scope="col">Edit</th>

                        </tr>
                    </thead>
                    <?php 
                       if(isset($_POST["btn-print"]))
                       {


                           $date_from= $_SESSION['date_f'];
                             $toDate=$_SESSION['date_t'];
                          
                                            
                             echo '<script>location.href = "filter_print_unit.php?date_from='.$date_from.'&toDate='.$toDate.'"</script>';

                       }

                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM tbl_unit WHERE building_no LIKE '%".$_POST["textbox_search"]."%' OR occupancy_status  LIKE '%".$_POST["textbox_search"]."%' ","Tables/units.php");
                        }

                       else if(isset($_POST["btn-filter"]))
                        {
                            $date_from=$_POST["date_from"];
                            $date_to=$_POST["date_to"];

                            $_SESSION['date_f']=$date_from;
                            $_SESSION['date_t']=$date_to;

                           echo "<script>

                                 
                                    document.getElementById('print').style.display='none';
                                    document.getElementById('btns').style.display='block';

                              </script>";
                            
                        SetDiv("SELECT * FROM tbl_unit where start_date='".$date_from."' and end_date= '".$date_to."' ","Tables/units.php");

                
                        }
                        else{

                            SetDiv("SELECT * FROM tbl_unit ","Tables/units.php");
                        } 
                    ?>                        
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>