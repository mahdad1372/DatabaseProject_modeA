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
function deleteProductById(){
    global $conn;
    if(isset($_GET['product_id'])){
        $id =  $_GET['product_id'];
        echo $id;
        $sql_delete = "DELETE FROM Products WHERE product_id = $id "; 
        $delete = $conn->query($sql_delete);
     }
}
function list_product(){
    global $conn;
    $sql = "SELECT * FROM Products"; 
    $result = $conn->query($sql);
    return $result;
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
function deleteCategoryById(){
    global $conn;
    if(isset($_GET['category_id'])){
        $id =  $_GET['category_id'];
        echo $id;
        $sql_delete = "DELETE FROM Categories WHERE category_id = $id "; 
        $delete = $conn->query($sql_delete);
     }
}
function list_Category(){
    global $conn;
    $sql = "SELECT * FROM Categories"; 
    $result = $conn->query($sql);
    return $result;
}
function create_Category(){
    global $conn;
    $sql = "CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(100)
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
    
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Categories (name, description) VALUES ('$name', '$description')";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
function deleteOrdersById(){
    global $conn;
    if(isset($_GET['order_id'])){
        $id =  $_GET['order_id'];
        echo $id;
        $sql_delete = "DELETE FROM Orders WHERE order_id = $id "; 
        $delete = $conn->query($sql_delete);
     }
}
function list_Order(){
    global $conn;
    $sql = "SELECT * FROM Orders"; 
    $result = $conn->query($sql);
    return $result;
}
function create_Order(){
    global $conn;
    $sql = "CREATE TABLE Orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50),
    total_amount DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table Product created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $user_id = $_POST['user_id'];
        $status = $_POST['status'];
        $total_amount = $_POST['total_amount'];
    
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Orders (user_id, status,total_amount) VALUES ('$user_id', '$status', '$total_amount')";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>