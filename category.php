



<?php

/*if(isset($_POST["btn-add-category"]))
{  

  $category_name = strtoupper($_POST["category"]); 
     
     
     $row = GetData("SELECT * from categories where category_name='".$category_name."'");
   
    if($row)
     {
           
         echo '<script>alert("'.$category_name.' already existed!")</script>';  
               
     }
     else{
     

    
    IUD("INSERT INTO categories (category_name) VALUES ('".$category_name."');");
    
    echo '<script>alert("INSERTED SUCCESSFULLY")</script>';
   }

}*/

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

</style>
<div class="category-container">
<form id="form" method="post" action="add_Category.php">

  <div id="con" class="sub-con">
  	 <div id="class" class="title">ADD NEW CATEGORY</div>
  	 <div class="input">
  	 	<input maxlength="20" id="category" type="text" name="category" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder="Category Name" required>
  	 </div>
  	  <div class="btn">
  	  	    <!--<button id="category" onclick="return confirm('Are you sure you want save this record? you can never revert this!')"  type="submit" name="btn-add-category" class="btn btn-primary">Add Category</button>--->

             <button type="button" id="btn" class="btn btn-primary">Add product</button>
          
  	  </div>
  </div>

  </form>


<script>

function lettersOnly() 
{
            var charCode = event.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

                return true;
            else
                return false;
}




$('#btn').on('click',function(){

var category=document.getElementById("category").value;

if(category=="")
{
    Swal.fire('Category is empty!').then(function(){
              Swal.close();
              setTimeout(() => $("#category").focus(), 500);

              });
                   
                   return false;
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


   <div id="sub-cons" class="sub-cons">
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
</div>