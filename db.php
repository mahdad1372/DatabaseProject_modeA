<?php
$host = "localhost";
$username = "root";
$password="";
$db_name="db_project";
$conn = mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
    die ("database couldn't connect successfully");
}else{
    echo "database connected succesfully";
}
?>