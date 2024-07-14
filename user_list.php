<?php
require("./db.php");
if(isset($_GET['id'])){
   $id =  $_GET['id'];
   $sql_delete = "DELETE FROM users WHERE id = $id "; 
   $delete = $conn->query($sql_delete);
}
$sql = "SELECT * FROM users"; 
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>User List</head>
    <body>
       <div>
       <table>
  <tr>
    <th>ID</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Delete</th>
  </tr>
  <!-- PHP CODE TO FETCH DATA FROM ROWS -->
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['id']."</td>
              <td>".$results['firstname']."</td>
              <td>".$results['lastname']."</td>
              <td>".$results['email']."</td>
              <td><a href='user_list.php?id=".$results['id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>