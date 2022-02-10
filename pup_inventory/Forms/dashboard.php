

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
        margin-top: 100px;
         

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

</style>
<div class="container">
    <div class="flexbox">
        <div class="flex-items item1">
           <div style="background-color:red" class="img-box">
              <img src="Images/user.png">
           </div>
           <div class="value v1">
                 <h1><?php echo GetData("Select Count(*) from inventory_table");?></h1>
                 <p>Users</p>
           </div>
        </div>

         <div class="flex-items item2">
             <div  style="background-color:green;"  class="img-box">
              <img src="Images/category.png">
           </div>
           <div class="value v2">
                 <h1><?php echo GetData("Select Count(*) from inventory_table");?></h1>
                  <p>Categories</p>

           </div>
         </div>
          <div class="flex-items item3">
               <div style="background-color:blue;" class="img-box">
              <img src="Images/products.png">
           </div>
           <div class="value v3">
                 <h1><?php echo GetData("Select Count(*) from inventory_table");?></h1>
                  <p>Products</p>
           </div>
          </div>
        
    </div>
</div>