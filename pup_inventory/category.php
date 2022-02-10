



<?php

if(isset($_POST["btn-add-category"]))
{  
    $category_name = strtoupper($_POST["category"]); 
    IUD("INSERT INTO categories (category_name) VALUES ('".$category_name."');");
    
    echo '<script>alert("INSERTED SUCCESSFULLY")</script>';

}

?>

<style>
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
		
		width: 650px;
		box-shadow: 0 0 20px 0 #E8E8E8;
	    border: 1px solid #1111;
	    padding: 10px;

	}
    .title{
    	background-color:#1111;
    	padding: 10px;
    	border-top-left-radius: 5px;
    	border-top-right-radius: 5px;
    	font-weight: bold;
    	color: gray;

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
   	   width: 40px;
   }
   tr{
   	  text-align: center;
   }

</style>
<div class="category-container">


<form id="myForm" method="post" action="#">
  <div class="sub-con">
  	 <div class="title">ADD NEW CATEGORY</div>
  	 <div class="input">
  	 	<input type="text" name="category" placeholder="Category Name" required>
  	 </div>
  	  <div class="btn">
  	  	    <button onclick="return confirm('Are you sure you want save this record? you can never revert this!')"  type="submit" name="btn-add-category" class="btn btn-primary" id="btn-submits">Add Category</button>
          
  	  </div>
  </div>

  </form>

   <div class="sub-cons">
   	   <div class="title">ALL CATEGORY</div>
   	   <div style="padding: 10px;">
       
       <table style="border: 1px solid #1111;" class="table">
  

     <thead>
                 <tr>
                         <th>#</th>
                         <th>Categories</th>
                         <th id="actions">Actions</th>

                </tr>
                      </thead>
                        <?php
                        if(isset($_POST["button_search"]))
                        {
                            SetDiv("SELECT * FROM categories WHERE IDProductName LIKE '%".$_POST["textbox_search"]."%' OR IDBarcode  LIKE '%".$_POST["textbox_search"]."%' ","Tables/category.php");
                        }
                        else{
                            SetDiv("SELECT * FROM categories ","Tables/category.php");
                        } 
                    ?>                 

</table>

   </div>
</div>
</div>