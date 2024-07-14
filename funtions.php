<?php
require("./db.php");
function getuserlist(){
    global $conn;
    $sql = "SELECT * FROM users"; 
    $result = $conn->query($sql);
    return $result;
}
function deleteUserById(){
    global $conn;
    if(isset($_GET['user_id'])){
        $id =  $_GET['user_id'];
        echo $id;
        $sql_delete = "DELETE FROM users WHERE user_id = $id "; 
        $delete = $conn->query($sql_delete);
     }
}
function create_User(){
    global $conn;
    $sql = "CREATE TABLE Users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table Users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$password')";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
function create_Product(){
    global $conn;
    $sql = "CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT NOT NULL
);";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table Product created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $stock_quantity = $_POST['stock_quantity'];
    
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Products (name, description, price,stock_quantity) VALUES ('$name', '$description', '$price',$stock_quantity)";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>