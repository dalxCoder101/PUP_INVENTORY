
<?php



?>

<script>


</script>
 
        <td> <?php echo$row["product_id"]?></td>
        <td> <?php echo$row["product_name"]?></td>
        <!--<td> <?php //$row["product_size"]?></td>-->
        <td> <?php echo$row["category"]?></td>
        <td> <?php echo$row["quantity"]?></td> 
        <td><?php echo$row["recieved_no"]?></td>
        <td><?php echo$row["release_no"]?></td>
        <td id="tl"><?php

        $num=$row["quantity"];
        $result="INSTOCK";

        if($num>=10 && $num<=50)
        {
               
            $result="REORDER LEVEL";
              
        }
        if($num>=1 && $num<10)
        {
            $result="CRITICAL";
        }
        IF($num==0)
        {
           $result="OUT OF STOCK";
        }
       
       

         if($result=="INSTOCK")
         {
                $Color = "GREEN";
                echo '<div style="Color:'.$Color.'">'.$result.'</div>';
         }
        
          if($result=="REORDER LEVEL")
         {
                $Color = "maroon";
                echo '<div style="Color:'.$Color.'">'.$result.'</div>';
         }

         if($result=="CRITICAL")
         {
                $Color = "orange";
                $bgcolor="orange";
                //echo '<div style="Color:'.$Color.';background-color:'.$bgcolor.';padding:10px">'.$result.'</div>';
                echo '<div style="Color:'.$Color.'">'.$result.'</div>';
         }
          if($result=="OUT OF STOCK")
         {
                $Color = "red";
                $bgcolor="orange";
                //echo '<div style="Color:'.$Color.';background-color:'.$bgcolor.';padding:10px">'.$result.'</div>';
                echo '<div style="Color:'.$Color.'">'.$result.'</div>';
         }
               
         ?>

                 


         </td>
       
         
<?php 
           
            echo "<td><img alt='testing' src='barcode128.php?codetype=Code128&size=50&text=".$row['barcode']."&print=true'/></th>";

                            ?>


</td>
       
</td>

        <td class="action-hide">
       
            <a style="margin-left: 0px;" href="?productedit&IDNum=<?php echo$row["product_id"]?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
            
           <a onclick="myFunctionDelete();" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>

     
      <script>
     
         function myFunctionDelete(){ 


      Swal.fire({
             title: 'Are you sure you want to delete it?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             allowOutsideClick: false,

             }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 
                      'Deleted!',
                      'Your file has been deleted successfully.',
                      'success',       
                 ).then(function(){

                      window.location.href="?product_delete&IDNum=<?php echo$row["product_id"];?>";
                  });
               }
           })





         
      }
</script>




            <a href="?product_release&IDNum=<?php echo$row["product_id"]?>" class="btn btn-info text-white"><i class="fas fa-sign-out-alt"></i></a>


             <!-- <a " href="?unit_delete&IDNum=<?php echo$row["tbl_unitID"]?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>-->

            <a href="?product_receive&IDNum=<?php echo$row["product_id"]?>" class="btn btn-primary text-white"><i class="fas fa-sign-out-alt"></i></a>
           <img src="">
        </td>
    </tr>
</tbody>