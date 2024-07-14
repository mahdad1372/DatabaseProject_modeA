<?php
require("./db.php");
require_once("./funtions.php");
deleteOrderItemById();
$result = list_Order_Item();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>Order Item List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>order_item_id</th>
    <th>order_id</th>
    <th>product_id</th>
    <th>quantity</th>
    <th>price</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['order_item_id']."</td>
              <td>".$results['order_id']."</td>
              <td>".$results['product_id']."</td>
              <td>".$results['quantity']."</td>
              <td>".$results['price']."</td>
              <td><a href='orderitem_list.php?order_item_id=".$results['order_item_id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>