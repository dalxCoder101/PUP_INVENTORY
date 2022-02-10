
<?php



?>
<style>

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
 </style>
        <td> <?php echo$row["building_no"]?></td>
        <td> <?php echo$row["unit_no"]?></td>
        <td> <?php echo$row["occupancy_status"]?></td>
        <td> <?php echo$row["start_date"]?></td> 
        <td><?php echo$row["end_date"]?></td>
        
         

</td>
       
</td>

        <td class="action-hide">
         <!--<a id="view" class="btn btn-primary text-white"><i class="fa fa-eye"></i></a>-->
            <a  href="?unit_edit&IDNum=<?php echo$row["tbl_unitID"]?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>

            
             <!--<a onclick="return confirm('Are you sure you want to Delete')" href="?unit_delete&IDNum=<?php //echo$row["tbl_unitID"]?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>-->


            <!--  <a onclick="myFunctionDelete();" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>-->


                            
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

                      window.location.href="?unit_delete&IDNum=<?php echo$row["tbl_unitID"]?>"

                  });
               }
           })





         
      }
</script>







        </td>
    </tr>
</tbody>