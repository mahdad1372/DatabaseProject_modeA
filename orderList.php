<?php
require("./db.php");
require_once("./funtions.php");
deleteOrdersById();
$result = list_Order();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>Order List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>order_id</th>
    <th>user_id</th>
    <th>order_date</th>
    <th>status</th>
    <th>total_amount</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['order_id']."</td>
              <td>".$results['user_id']."</td>
              <td>".$results['order_date']."</td>
              <td>".$results['status']."</td>
              <td>".$results['total_amount']."</td>
              <td><a href='orderList.php?order_id=".$results['order_id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>