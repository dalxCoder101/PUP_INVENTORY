<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class=" p-3 bg-light h5 font-weight-bold">
                    <a>List Of End of Warranty  </a>
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
                    </div>
                    <div class="col-lg-8 text-right">
                        <br>
                        <a href="?productadd" class="btn btn-dark text-white font-weight-bold">ADD <i class="fa fa-plus"></i></a>
                    </div>  
                </div>  
                <div class="row px-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Product</th>
                            <th scope="col">Stocks</th>
                            <th scope="col">Warranty</th>
                            <th scope="col">Date Entry</th>
                            <th scope="col">Status</th>
                            <th id="actions" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <?php 
                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM inventory_table WHERE IDProductName LIKE '%".$_POST["textbox_search"]."%' OR IDBarcode  LIKE '%".$_POST["textbox_search"]."%' ","Tables/products.php");
                        }
                        else{
                            SetDiv("SELECT * FROM inventory_table where IDStatus='NOT ACTIVE' ","Tables/products.php");
                        } 
                    ?>                        
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>