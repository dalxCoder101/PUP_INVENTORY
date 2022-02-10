


<tbody>
    <tr>
        <td> <?php echo$row["IDNum"]?></td> 
        <td> <?php echo$row["IDBarcode"]?></td>
        <td> <?php echo$row["IDProductName"]?></td>
        <td> <?php echo$row["IDQuantity"]?></td>
        <td> <?php echo$row["IDWarranty"]?></td>
        <td> <?php echo$row["IDDateReceived"]?></td>
        <td> <?php echo$row["IDStatus"]?></td>
        <td>
            <a class="views" id="view" class="btn btn-primary text-white"><i  class="fa fa-eye"></i></a>
            <a id="update" href="?productedit&IDNum=<?php echo$row["IDNum"]?>" class="btn btn-success text-white"><i class="fa fa-edit"></i></a>
            <a id="delete" href="?product_delete&IDNum=<?php echo$row["IDNum"]?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
</tbody>
