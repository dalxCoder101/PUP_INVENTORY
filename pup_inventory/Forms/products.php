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
                        </style>
                    </div>
                    <div class="col-lg-8 text-right">
                        <br>
                        <!--ADD BUTTON-->
                        <a href="?productadd" id="add" class="btn btn-primary font-weight-bold">ADD <i class="fa fa-plus"></i></a>

                        <a href="print.php" id="print" class="btn btn-secondary font-weight-bold">PRINT <i class="fa fa-print"></i></a>
                       <button onclick="window.print()">Print this page</button>
                        <!--<a href="print.php">print</a>-->
                    </div>  
                </div>  
                <div class="row px-3">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Instock</th>
                            <th scope="col">Buying Price</th>
                            <th scope="col">Selling Price</th>
                            <th scope="col">Date purchased</th>
                            <th scope="col">Barcode</th>
                            <th id="actions" scope="col">Actions</th>

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