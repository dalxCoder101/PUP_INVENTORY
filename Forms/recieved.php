

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg ">
            <div class="card">
                <div class=" p-3 bg-light h5 font-weight-bold">
                    <a>List Of Received Products </a>
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="row p-3">
                    <div class="col-lg-4">
                        <form method="POST">
                            <div class="font-weight-bold">Search</div>

                            <div class="flex-container">
                            <div class="d-flex">
                        
                             <input name="textbox_search" placeholder="Search Received Products">
                             <button name="button_search" class="btn btn-dark text-white"><i class="fa fa-search"></i></button>
                             <div id="con" style="display:flex;align-items: center;margin-left: 30px;justify-content: space-between;width: 445px;">

                        </form>
                        
                        <div>
                            <form method="post" action="#">
                             <label>From:</label>

                             <input type="date" name="date_from" id="date_from">
                              </div>
                              <div>
                             <label>To</label>
                             <input type="date" name="date_to">
                            </div>
                            <div style="margin-top: -2px;">
                                <button name="btn-filter" style="background-color:black;color:#fff;padding: 5px 10px;border-radius: 5px;border: none;">Filter</button>
                            </div>
                        <!--  <form method="POST">
                               <button id="show" sname="btn-showAll" style="background-color:black;color:#fff;padding: 5px 10px;border-radius: 5px;border: none;">Show All</button>
                          </form>-->
                           
                          <style>
                           #btns{
                             display: none;
                           }
                             
                          </style>
                        
                            </div>

                            </div>
                            <div style="display:flex;width: 250px;justify-content: space-between;align-items: center;">
                            <div>
                            
                            </div>
                           <div>
                              
                                <a id="link-btn" class="print" href="print_received.php">Print</a>
                                 <button id="btns" type="submit" name="btn-print">Print</button>
                                 
                            </div>
                            </div>
                        </div>

                        </div>

                         </form>

                        </form>
                        



                        <div class="con">
                        <div class="box1" class="box">  
                        </div>
                        <div class="content">
                            <p style="margin-top: 10px;">Warranty Expired</p>
                        </div>
                              
                        </div>
                         
                       


                        <style>
                            .print{
                                background-color: dodgerblue;
                                padding: 10px 40px;
                                color: #ffff;
                                text-decoration: none;
                                text-transform: uppercase;

                            }
                            .print:hover{
                                background-color: #111;
                                color: #ffff;
                                text-decoration: none;
                            }
                            #btns{
                                background-color: dodgerblue;
                                padding: 10px 40px;
                                color: #ffff;
                                text-decoration: none;
                                text-transform: uppercase;
                                border: none;
                            }
                            #btns:hover{
                                background-color: #111;
                                color: #ffff;
                                text-decoration: none;
                            }
                         
                            .flex-container{
                                display: flex;
                                width: 1200px;
                                justify-content: space-between;
                            }
                            .delete{

                                background-color: red;
                                text-decoration: none;
                                padding: 10px;
                                color: #ffff;

                            }
                            .delete:hover{
                                text-decoration: none;
                                background-color: #111;
                                color: #ffff;
                            }

                            .con{
                                display: flex;
                                align-items: center;
                                position: relative;
                                left: 500px;
                                top: -60px;
                                
                            }
                            .box1{
                                content:'';height: 15px; width: 15px;
                                background-color: red;
                                border-radius: 50px;
                                display: none;
                                
                               
                            }
                            .content{
                                position: relative;
                                left: 10px;
                                top: 1.5px;
                                display: none;                        
                            }
                            th{
                                
                                color: #000;

                            }
                            tr{
                                width: 100%;
                            }
                            .imgBox{
                                background-color: red;
                                width: 150px;
                                height: 100px;
                            }
                            .imgBox img{
                                width: 100%;
                                height: 100%;

                            }
                        </style>
                    </div>

                    <div class="col-lg-8 text-right">
                        <br>
                    
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
         <img id="image" alt="image">
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


                <div class="row px-3">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Received Date</th>
                            <th scope="col">Received By</th>
                          

                        </tr>
                    </thead>

              
           
                    <?php 
                
                       

                      if(isset($_POST["btn-print"]))
                           {
                             $date_from= $_SESSION['date_f'];
                             $toDate=$_SESSION['date_t'];
                             $get="dale";
                                            
                             echo '<script>location.href = "filter_print_received.php?date_from='.$date_from.'&toDate='.$toDate.'&get='.$get.'"</script>';


                          }
                          unset($_SESSION['date_f']);
                           unset($_SESSION['date_t']);


                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM product_receive WHERE product_name LIKE '%".$_POST["textbox_search"]."%' OR p_id  LIKE '%".$_POST["textbox_search"]."%' ","Tables/received.php");

                              unset($_SESSION['date_f']);
                           unset($_SESSION['date_t']);

                        }
                       else if(isset($_POST["btn-showAll"]))
                        {
                            SetDiv("SELECT * FROM product_receive ","Tables/received.php");  
                           // unset($_SESSION['date_f']);

                        }
                        else if(isset($_POST["btn-filter"]))
                        {
                               $from=$_POST["date_from"];
                               $to=$_POST["date_to"];
                               
                               $_SESSION['date_f']=$from;
                               $_SESSION['date_t']=$to;


                        if($from>$to){
                           
                             echo '<script>alert("INVALID!")</script>';
                             SetDiv("SELECT * FROM product_receive ","Tables/received.php");  
                        }
                        else{
                       
                             echo "<script>

                           
                               document.getElementById('link-btn').style.display='none';
                                  document.getElementById('btns').style.display='block';


                              </script>";

                            
                              SetDiv("SELECT * FROM product_receive where date_receive between '".$from."' and '".$to."' ","Tables/received.php");
                          }

                        }
                        else{

                            SetDiv("SELECT * FROM product_receive ","Tables/received.php");
                        } 
                    ?>                        
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>