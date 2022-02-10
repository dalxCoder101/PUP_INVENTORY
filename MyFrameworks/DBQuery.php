<?php 



    //  $connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    $connection=mysqli_connect("localhost","root","","inventory_system");

	function connection(){
	 	return	$con = mysqli_connect("localhost","root","","inventory_system");
	}

    


	function IUD($query){
	 	mysqli_query(connection(), $query); 		
	}      
	function SetDropdown($query,$selectedColumn){
		$command = mysqli_query(connection(),$query);
		echo "<select>";
		while($rows = $command-> fetch_assoc())
		{
			echo("<option>".$rows[$selectedColumn]."</option>");
		}
		echo "</select>";
	}  



    function SetDiv($query,$PHPFiles){   
		$command = mysqli_query(connection(),$query);
            if($command -> num_rows > 0)
            {
                while($row = $command-> fetch_assoc())
				 {
                       include $PHPFiles;
                }                  
            } 
			else
			{
				echo "<tbody><tr><th>No Data</th></tr></tbody>";	
			}         
    }

    function makedate()
    {
         return strftime("%Y-%m-%d",time());  
        
    }
   

    function GetData($query){
    	$command=mysqli_query(connection(),$query);
    	$GetData=mysqli_fetch_array($command);
    	return $GetData[0];
    }

	


	function GetDataIndex($query){      
		echo "<script>function setDataField(id,value){document.getElementById(id).value = value;}</script>";
		$command = mysqli_query(connection(), $query);   
		return $GetData = mysqli_fetch_array($command);
	}
