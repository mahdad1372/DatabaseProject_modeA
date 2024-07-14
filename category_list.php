<?php
require("./db.php");
require_once("./funtions.php");
deleteCategoryById();
$result = list_Category();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>Category List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>Category_id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['category_id']."</td>
              <td>".$results['name']."</td>
              <td>".$results['description']."</td>
              <td><a href='user_list.php?category_id=".$results['category_id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>