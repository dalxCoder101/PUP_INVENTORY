
<?php

   /* if(isset($_POST["btn-release"]))
    {
          echo "<script>


              document.getElementById('txt-release').style.display='block';
       
    </script>";
    }
*/

?>

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg ">
            <div class="card">
                <div class=" p-3 bg-light h5 font-weight-bold">
                    <a>List Of Products </a>
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="row p-3">
                    <div class="col-lg-4">
                        <form method="POST">
                            <div class="font-weight-bold">Search</div>
                            <div class="d-flex">
                             <input name="textbox_search" placeholder="Search Products" class="form-control">
                             <button name="button_search" class="btn btn-dark text-white"><i class="fa fa-search"></i></button>

                            </div>
                        </form>

                        <div class="con">
                        <div class="box1" class="box">  
                        </div>
                        <div class="content">
                            <p style="margin-top: 10px;">Warranty Expired</p>
                        </div>
                              
                        </div>
                        <style>
                            select{
                               
                                position:relative;
                                top: 0px;
                                border: none;
                                padding: 7.5px;
                                border-radius: 4px;
                                color: #ffff;
                                cursor: pointer;
                            }
                            option{
                                background-color: #ffff;
                                color: #111;
                                cursor:pointer;
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
                               background-color: #1111;
                               color: #111;

                            }
                            th:hover{
                                background-color: #1111;
                            }
                            tr{
                                width: 100%;
                               
                            }
                            tr:hover{
                                background-color:#1111;
                                color: #111;

                            }
                            .imgBox{
                               
                                width: 150px;
                                height: 100px;
                                border: 1px solid  #111;
                            }
                            .imgBox img{
                                width: 100%;
                                height: 100%;

                            }
                            #txt-receive{
                                display: none;
                            }
                            #txt-release{
                                display: none;
                            }
                            #barcode:focus{
                                 border-color: #28a745;
                                  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                            }


                        </style>
                    </div>

                    <div class="col-lg-8 text-right">
                        <br>
                        <!--ADD BUTTON-->
                 <select class="btn btn-secondary" id="select"  onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                             
                            <option value="" selected disabled hidden>SELECT PRINT OPTION</option>
                             <option value="print.php">Print Record</option>
                             <option id="barcode-hide" value="print_barcode.php">Print Product Barcode</option>
                 </select>



                        <a href="?productadd" id="add" class="btn btn-success">ADD ITEM</a>
                    

<script>
function myFunction(){

     $("#myModals").modal("show");
     $('#myModals').on('shown.bs.modal', function () {
     $('#pass').trigger('focus')
    });



     focusMethod = function getFocus() {           
      document.getElementById("n2").focus();
  }
}
</script>


       <button type="button" onclick="myFunction()" class="btn btn-info" id="myBtn">SCAN BARCODE</button>

          <!-- Modal -->
           <div class="modal fade" id="myModals">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                         <h5 class="modal-title">Scan Product Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>       
        </div>
           <div onclick="focusMethod();" class="modal-body">
                 <!--modal body------------------------------------------------------------------------------>



<style>
    .over_lay{
       opacity: 0;
    }
</style>
     <input  type="text" onkeypress="return false;" class="over_lay" name="n2" id="n2" onkeyup="GetDetail(this.value)">
<!-- <input type="text" onkeypress="return false;"/>-->


  <div class="form-group">
       <label class="float-left"for="exampleInputEmail1">Product Barcode</label>
       <input  type="text" class="form-control" id="barcodes" onkeyup="GetDetail(this.value)" placeholder="Enter Product Barcode">
       
  </div>


  <div class="form-group">
       <label class="float-left" for="exampleInputPassword1">Product Name</label>
       <input type="text" id="product_name" class="form-control" placeholder="Product Name" readonly>
  </div>
    <div class="form-group">
       <label class="float-left" for="exampleInputEmail1">Category</label>
       <input type="text" class="form-control category" id="product_category" placeholder="Category" readonly>
  </div>
  <div class="form-group">
       <label class="float-left" for="exampleInputPassword1">Instock</label>
       <input type="text" id="stock" class="form-control" placeholder="Stock" readonly>
       <input type="hidden" name="" id="product_id" placeholder="product id">
       <input type="hidden" id="default_release" name="">
       <input type="hidden" id="received_quantity" name="" placeholder="received quantity">


          

  </div>
  <div class="btn">
           <button onclick="getRelease()" data-toggle="modal" href="#myModal2" class="btn btn-secondary">Release</button>
             <button onclick="getReceive()" data-toggle="modal" href="#myModal3" class="btn btn-primary">Receive</button>


    <script>
        function getRelease(){
            var inputValue=document.getElementById('stock').value;
            var output = document.getElementById('output');

            var p_id=document.getElementById('product_id').value;
            var get_pID=document.getElementById('p_id');

            var default_release=document.getElementById('default_release').value;
            var get_defaultRelease=document.getElementById('d_release');

            var product_name=document.getElementById('product_name').value;
            var getP_name=document.getElementById('p_name');

            var product_category=document.getElementById('product_category').value;
            var getP_category=document.getElementById('p_category');
         
         /* PASS VALUE */

            output.value=inputValue;
            getP_name.value=product_name;
            getP_category.value=product_category;
            get_pID.value=p_id;
            get_defaultRelease.value=default_release;


        }

        
      function getReceive()
      {
         var default_receive_quantity=document.getElementById('received_quantity').value;
         var get_default_receive_quantity=document.getElementById('default');

         var quantity=document.getElementById('stock').value;
         var getQuantity=document.getElementById('quantity');

         var p_id=document.getElementById('product_id').value;
         var get_pID=document.getElementById('id');

         var product_name=document.getElementById('product_name').value;
         var getPname=document.getElementById('pName');
         var product_category=document.getElementById('product_category').value;
         var getPcategory=document.getElementById('pCategory');



         get_pID.value=p_id;
         getPname.value=product_name;
         getPcategory.value=product_category;
         getQuantity.value=quantity;
         get_default_receive_quantity.value=default_receive_quantity;
      }


    </script>

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


<?php

/*
function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}

if(isset($_POST["btn_rele"]))
{

    $var_release=$_POST["txt_quantity"];
    $var_defaultRelease=$_POST["default_quantity"];
    $var_product_name=$_POST["p_name"];
    $var_product_category=$_POST["p_category"];
    $var_product_id=$_POST['product_id'];
    $var_dRelease=$_POST["default_release"];
    $var_date=make_date();


    $var_result=$var_defaultRelease-$var_release;
    $var_release_numResult=$var_dRelease+$var_release;
    
    if($var_release>$var_defaultRelease)
    {
         echo '<script>alert("Insufficient Stock!")</script>';
         echo '<script>window.location.href="demo.php?products";</script>';
         return;

    }

    IUD("INSERT INTO product_release(p_name,p_category,p_quantity,date_release) VALUES ('".$var_product_name."','".$var_product_category."','".$var_release."','".$var_date."');");


    IUD("UPDATE product SET quantity='".$var_result."',release_no='".$var_release_numResult."' WHERE product_id = '".$var_product_id."'");
    echo '<script>alert("Successfully Release!")</script>';
    echo '<script>window.location.href="demo.php?products";</script>';
}
*/

?>


<form id="form" method="post" action="addRelease.php">
<div class="modal fade" id="myModal2" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Release Product</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div><div class="container"></div>
            <div class="modal-body">
              <!--modal body---------------------------------------------------------->
               <input type="hidden" id="output" name="default_quantity">
               <input type="hidden" id="p_id" name="product_id">
               <input id="release_id" type="text" onkeypress="return validationNum(event)" min="1" class="form-control" name="txt_quantity" placeholder="Release Quantity" required>
               <input type="hidden" id="d_release" name="default_release" placeholder="default_quantity">


               <!--RELEASE FIELDS --->
               <input type="hidden" id="p_name" name="p_name" placeholder="Product Name">
               <input type="hidden" id="p_category" name=" p_category" placeholder="category">

                <input type="hidden" name="first_name" value="<?php echo $_SESSION['first_name']; ?>">
                   <input type="hidden" name="last_name" value="<?php echo $_SESSION['last_name']; ?>">
             
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Close</a>

           <!--   <button onclick="return confirm('Are you sure you want to Release?')" type="submit" class="btn btn-primary" id="output" name="btn_rele">Release Product</button>-->

                  <button type="button" id="btn" class="btn btn-primary">Release Item</button>

            </div>
          </div>
        </div>

</div>

</form>



<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));


}
function lettersOnly() 
{
            var charCode = event.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

                return true;
            else
                return false;
}


  /* function validationNum(evt)
   {
      var getNumCd = (evt.which) ? evt.which : event.keyCode;
      if (getNumCd != 46 && getNumCd > 31 
        && (getNumCd < 48 || getNumCd > 57))
         return false;
      return true;
   }*/



$('#btn').on('click',function(){

var release_id=document.getElementById("release_id").value;

if(release_id<=0){
       Swal.fire('Product Quantity is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#received_id").focus(), 500);

              });
                   
                   return false;
}


if(received_id<=0)
{
      Swal.fire('Product Quantity is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#received_id").focus(), 500);

              });
                   
                   return false;
}




   Swal.fire({
             title: 'Are you sure you want to release it?',
             text: "You won't be able to revert this!",
             icon: 'info',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, release it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Released!',
                      'Item has been successfully released!',
                      'success',       
                 ).then(function(){
                        $('#form').submit();
                       // window.location.href="addPro.php";
                  });
               }
          

    })
          

       })


</script>


<form id="forms" method="POST" action="addReceive.php">
<div class="modal fade" id="myModal3" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Receive Product</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div><div class="container"></div>
            <div class="modal-body">
              <!--modal body---------------------------------------------------------->
               <input id="received_id" type="text" onkeypress="return validationNum(event)" id="output" min="1" class="form-control" name="txt_quantity" placeholder="Receive Quantity" required>
               <input type="hidden" id="default" name="default_received_quantity">
               <input type="hidden" id="quantity" name="quantity" placeholder="quantity">
               <input type="hidden" id="id" name="p_id" placeholder="Product ID">

               
               <!--RECEIVE FIELDS --->
               <input type="hidden" id="pName" name="pName" placeholder="Product Name">
               <input type="hidden" id="pCategory" name="pCategory" placeholder="category">

                <input type="hidden" name="first_name" value="<?php echo $_SESSION['first_name']; ?>">
                   <input type="hidden" name="last_name" value="<?php echo $_SESSION['last_name']; ?>">
             
     
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Close</a>


                <button type="button" id="btns" class="btn btn-primary">Recieved Item</button>

    
            </div>
          </div>
        </div>

    </div>

</form>


  <script>

 function validationNum(evt)
   {
      var getNumCd = (evt.which) ? evt.which : event.keyCode;
      if (getNumCd != 46 && getNumCd > 31 
        && (getNumCd < 48 || getNumCd > 57))
         return false;
      return true;
   }
$('#btns').on('click',function(){


var received_id=document.getElementById("received_id").value;


if(received_id<=0)
{
      Swal.fire('Product Quantity is invalid!').then(function(){
              Swal.close();
              setTimeout(() => $("#received_id").focus(), 500);

              });
                   
                   return false;
}



   Swal.fire({
             title: 'Are you sure you want to receive it?',
             text: "You won't be able to revert this!",
             icon: 'info',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, received it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Received!',
                      'Item has been successfully received!',
                      'success',       
                 ).then(function(){
                        $('#forms').submit();
                       // window.location.href="addPro.php";
                  });
               }
          

    })
          

       })








   function GetDetail(str){

  var n1 = document.getElementById('barcodes');
  var n2 = document.getElementById('n2');
  n1.value = n2.value;





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
            document.getElementById('n2').select();
            document.getElementById("product_category").value=myObj[1];
            document.getElementById("stock").value=myObj[2];

            document.getElementById('image').src = "Images/" + myObj[3] +"";
            document.getElementById("product_id").value=myObj[4];
            document.getElementById("default_release").value=myObj[5];
            document.getElementById("received_quantity").value=myObj[6];
                   
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
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <!--<th scope="col">Size</th>-->
                            <th scope="col">Category</th>
                            <th scope="col">Instock</th>
                            <th scope="col">Recieved</th>
                            <th scope="col">Release</th>
                           <!-- <th scope="col">Date purchased</th>-->
                            <th scope="col">Barcode</th>
                            <th scope="col">Status</th>
                            <th id="actions" scope="col">Edit|Delete|Release|Recieve</th>

                        </tr>
                    </thead>
                    <?php 
                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM product WHERE product_name LIKE '%".$_POST["textbox_search"]."%' OR product_id  LIKE '%".$_POST["textbox_search"]."%' ","Tables/products.php");
                        }
                        else{

                            SetDiv("SELECT * FROM product ","Tables/products.php");
                        } 
                    ?>                        
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>

