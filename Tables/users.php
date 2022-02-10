
<?php


?>
<style>
    img{
        width: 70px;
        height: 70px;
    }
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
 
        <td> <?php echo$row["user_id"]?></td>
        <td> <?php echo$row["first_name"]?></td>
        <td> <?php echo$row["last_name"]?></td>
        <td> <?php echo$row["username"]?></td>
        <td> <?php echo$row["password"]?></td>
        <td> <?php echo$row["user_role"]?></td> 
        <td>
            <img src="Images/<?php echo $row['image'];?>" alt="product image">
        </td>
     

        <td class="action-hide">
         <!--<a id="view" class="btn btn-primary text-white"><i class="fa fa-eye"></i></a>-->
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

                      window.location.href="?user_delete&IDNum=<?php echo$row["user_id"]?>"

                  });
               }
           })
         
      }
</script>





        </td>
    </tr>
</tbody>