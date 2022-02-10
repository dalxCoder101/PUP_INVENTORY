
        <td><?php echo$row["category_id"]?></td>
        <td><?php echo$row["category_name"]?></td>


      <td class="action-hide">
         
         <div style="width: 100px;display: flex;justify-content: center;">
          <div style="width:100%">


            
             <a style="position:relative;left: 25px;" id="update" href="?category_edit&IDNum=<?php echo$row["category_id"]?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
             </div>
             <div>


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

                      window.location. href="?category_delete&IDNum=<?php echo$row["category_id"]?>";

                  });
               }
           })





         
      }
</script>










             </div>
         </div>
        </td>
      
    </tr>
</tbody>
