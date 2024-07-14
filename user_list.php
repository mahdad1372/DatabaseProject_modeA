<?php
require("./db.php");
require_once("./funtions.php");
deleteUserById();
$result = getuserlist();
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
    <th>Name</th>
    <th>Email</th>
    <th>password</th>
    <th>created_at</th>
    <th>Delete</th>
  </tr>
  <?php 
      $nums = mysqli_num_rows($result);
      if($nums>0){
        while($results=mysqli_fetch_assoc($result)){
            echo "
            <tr>
              <td>".$results['user_id']."</td>
              <td>".$results['name']."</td>
              <td>".$results['email']."</td>
              <td>".$results['password']."</td>
              <td>".$results['created_at']."</td>
              <td><a href='user_list.php?user_id=".$results['user_id']."'>Delete</a></td>
            </tr>";
        }
      }     
    ?>

 
</table>
       </div>
    </body>
</html>