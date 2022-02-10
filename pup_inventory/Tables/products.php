
<?php



  //echo bar128($bar_code);

/*$role=$_SESSION['userRole'];
$status = $row["IDStatus"];
$warranty=$row["IDWarranty"];
$date_now=date('Y-m-d');
$quantity=$row["IDQuantity"];

if ($role == "OFFICE AD") {
if ($status=="NOT ACTIVE") {
   echo '<tbody><tr class="record" bgcolor="red" style="color: white;">';
}

else {
echo '<tr class="record" bgcolor="">';
}
}*/

    

?>
 
        <td> <?php echo$row["product_id"]?></td>
        <td> <?php echo$row["product_name"]?></td>
        <td> <?php echo$row["category"]?></td>
        <td> <?php echo$row["quantity"]?></td> 
        <td> <?php echo$row["buy_price"]?></td>
        <td> <?php echo$row["sale_price"]?></td>
        <td> <?php echo$row["date_purchased"]?></td>
<?php 

            
                            echo "<td style='border-color: black; border-bottom: inset; border-right: none; border-left: none; border-top:none ; background-color :white ;vertical-align: middle'><img alt='testing' src='barcode128.php?codetype=Code128&size=50&text=".$row['barcode']."&print=true'/></th>";

                            ?>


</td>
       
</td>

        <td class="action-hide">
         <!--<a id="view" class="btn btn-primary text-white"><i class="fa fa-eye"></i></a>-->
            <a id="update" href="?productedit&IDNum=<?php echo$row["product_id"]?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
            <a id="delete" href="?product_delete&IDNum=<?php echo$row["product_id"]?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
</tbody>
