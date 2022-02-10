

<?php
$con=mysqli_connect("localhost","root","","inventory_system");
$result=mysqli_query($con,"SELECT * from product");

?>

<style>
	.container{
		display: flex;
		justify-content: space-between;
	/*	background-color: red;*/
		flex-wrap: wrap;
		
	}
	.container .img-box{
		width: 150px;
		height:145px;
		margin-top: 10px;
	}
	.container .img-box img{
		width: 100%;
		height: 100%;
	}

</style>

<style media="print">
	@page{
		size: auto;
		margin: 0mm;
	}
</style>
<html>
<body onload="window.print();">

  <div class="btn">
  	 <a href="./demo.php?products">Back</a>
  </div>
	   <div class="container">    	
		<?php
          
       while($rows=mysqli_fetch_array($result)){

  echo "

   </style>

       <div class='img-box'>

 
         <img alt='testing' src='barcode128.php?codetype=Code128&size=50&text=".$rows['barcode']."&print=true'  width='155' height='155'/>
         </div>
         ";


       }

		?>
	</div>
</body>

</html>
