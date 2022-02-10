
        <td><?php echo$row["category_id"]?></td>
        <td><?php echo$row["category_name"]?></td>


      <td class="action-hide">
         
         <div style="width: 100px;display: flex;justify-content: center;">
          <div style="width:100%">
             <a style="position:relative;left: 25px;" id="update" href="?productedit&IDNum=<?php echo$row["category_id"]?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
             </div>
             <div>
             <a style="position: relative;right: 20px;" id="delete" onclick="return confirm('Are you sure you want to Delete')" href="?category_delete&IDNum=<?php echo$row["category_id"]?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
             </div>
         </div>
        </td>
      
    </tr>
</tbody>
