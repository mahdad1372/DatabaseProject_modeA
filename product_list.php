<?php
require("./db.php");
require_once("./funtions.php");
deleteUserById();
$result = list_product();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>Product List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>Product_id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['product_id']."</td>
              <td>".$results['name']."</td>
              <td>".$results['description']."</td>
              <td>".$results['price']."</td>
              <td>".$results['stock_quantity']."</td>
              <td><a href='user_list.php?product_id=".$results['product_id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>