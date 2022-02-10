

<!--<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <div class="card py-4 bg-success">
                <div class="row">
                    <div class="col-9 px-4">
                        <div class="h5 text-white">Inventories</div>
                        <div class="h2 font-weight-bold text-white">
                            <?php echo GetData("Select Count(*) from inventory_table");?>                        
                        </div> 
                    </div>
                    <div class="col-3 px-1">
                        <i class="fa fa-cubes fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card py-3 bg-primary">
                <div class="row">
                    <div class="col-9 px-5">
                        <div class="h5 text-white">Users</div>
                        <div class="h2 font-weight-bold text-white">
                            <?php echo GetData("Select Count(*) from user_table");?>                                               
                        </div> 
                    </div>
                    <div class="col-3 px-1">
                        <i class="fa fa-users fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-2">
            <div class="card py-3 bg-secondary">
                <div class="row">
                    <div class="col-9 px-5">
                        <div class="h5 text-white">Daily Order</div>
                        <div class="h2 font-weight-bold text-white">
                            <?php
                              echo GetData("Select Count(*) from inventory_table");
                            ?> 
                        </div> 
                    </div>
                    <div class="col-3 px-1">
                        <i class="fa fa-cube fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-2">
            <div class="card py-3 bg-danger">
                <div class="row">
                    <div class="col-9 px-5">
                        <div class="h5 text-white">Deactive Item</div>
                        <div class="h2 font-weight-bold text-white">
                            <?php echo GetData("Select Count(*) from inventory_table WHERE IDStatus ='NOT ACTIVE'");?> 
                        </div> 
                    </div>
                    <div class="col-3 px-1">
                        <i class="fa fa-times fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>                 
    </div>
</div>

-->
<style>

  .container{
        margin-top: 45px;
         

    }
    .flexbox{
        display: flex;
        justify-content: space-around;


    }
    .flexbox .flex-items{
         
         display: flex;
         align-items: center;
         box-shadow: 0 0 20px 0 #E8E8E8;
         margin-left: 20px;

    }

    .img-box{
        width: 140px;
        height: 125px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img-box img{
        width: 75px;

    }
   .value{
      padding: 0px 90px 0px 90px;
      display: flex;
      flex-direction: column;
      align-items: center;
   }

    .category-container{
        
        content: '';
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: space-around;
            padding: 80px 0;
    }
    .sub-con{
        
        border-radius: 5px;
        width: 450px;
        height: 230px;
        box-shadow: 0 0 20px 0 #E8E8E8;
        border: 1px solid #1111;
        
    }
    .sub-cons{
        
        width: 750px;
        box-shadow: 0 0 20px 0 #E8E8E8;
        border: 1px solid #1111;
        padding: 10px;

    }
    .title{
        background-color:dodgerblue;
        padding: 10px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        font-weight: bold;
        color: #ffff;

    }
    .input{
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    input{
        width: 400px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #1111;
    }
   .btn{
      margin-top: 10px;
      margin-left: 141px;
   }
   th{
       text-align: center;
       width: 80px;
   }
   td{
       text-align: center;
       width: 80px;
   }
   .category-container{
      display: flex;
      justify-content: center;

   }
   #con{
     position: relative;
     right: 40px;
   }
   table{
         box-shadow: 0 0 20px 0 #E8E8E8;
   }


</style>
<div class="container">
    <div class="flexbox">
        <div class="flex-items item1">
           <div style="background-color:red" class="img-box">
              <img src="Images/user.png">
           </div>
           <div class="value v1">
                 <h1><?php echo GetData("Select Count(*) from user_table");?></h1>
                 <p>Users</p>
           </div>
        </div>

         <div class="flex-items item2">
             <div  style="background-color:green;"  class="img-box">
              <img src="Images/category.png">
           </div>
           <div class="value v2">
                 <h1><?php echo GetData("Select Count(*) from categories");?></h1>
                  <p>Categories</p>

           </div>
         </div>
          <div class="flex-items item3">
               <div style="background-color:blue;" class="img-box">
              <img src="Images/products.png">
           </div>
           <div class="value v3">
                 <h1><?php echo GetData("Select Count(*) from product");?></h1>
                  <p>Products</p>
           </div>
          </div>
        
    </div>
</div>

<div style="display:flex;justify-content: space-around;margin-top: 55px;" class="con" id="table-container">

<div>
 <div class="title">LATEST RELEASE</div>
       <div style="padding: 10px;">
       
       <table style="border: 1px solid #1111; width: 600px;font-size: 13px;" class="table">
  

     <thead>
                 <tr>
                         <th style="width:10px">Product Name</th>
                         <th style="width:-10px">Quantity</th>
                         <th>Category</th>
                         <th>Received Date</th>

                </tr>
                      </thead>
                        <?php
                       
                         /*   SetDiv("SELECT * FROM product_release where id=(Select max(id) from product_release order by id DESC) ","Tables/latest_release.php");*/
                          

                           SetDiv("SELECT * FROM product_release order by id desc  limit 5","Tables/latest_release.php");

         
                    ?>                 

</table>

   </div>
</div>


<div>


   <div class="title">LATEST RECEIVED</div>
       <div style="padding: 10px;">
       
       <table style="border: 1px solid #1111; width: 600px;font-size:13px;" class="table">
  

     <thead>
                 <tr>
                         <th>Product Name</th>
                         <th>Quantity</th>
                         <th>Category</th>
                         <th>Received Date</th>
                </tr>
                      </thead>
                        <?php
                      
                            
        /*    SetDiv("SELECT * FROM product_receive where p_id=(Select max(p_id) from product_receive order by p_id desc) ","Tables/latest_receive.php");*/

          
            SetDiv("SELECT * FROM product_receive order by p_id desc  limit 5","Tables/latest_receive.php");

           

             
           ?>                 

</table>

   </div>

</div>

   </div>