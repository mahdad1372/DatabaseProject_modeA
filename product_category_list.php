<?php
require("./db.php");
require_once("./funtions.php");
deleteproductcategoryById();
$result = product_category_Item();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>Product Category List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>product_id</th>
    <th>category_id</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['product_id']."</td>
              <td>".$results['category_id']."</td>
              <td><a href='product_category_list.php?product_id=".$results['product_id']."&category_id=".$results['category_id']."'>Delete</a></td>

            </tr>";
        }
      }     
    ?>
</table>
       </div>
    </body>
</html>