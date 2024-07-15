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
function deleteOrderItemById(){
    global $conn;
    if(isset($_GET['order_item_id'])){
        $id =  $_GET['order_item_id'];
        echo $id;
        $sql_delete = "DELETE FROM Order_Items WHERE order_item_id = $id "; 
        $delete = $conn->query($sql_delete);
     }
}
function list_Order_Item(){
    global $conn;
    $sql = "SELECT * FROM Order_Items"; 
    $result = $conn->query($sql);
    return $result;
}
function create_Order_item(){
    global $conn;
    $sql = "CREATE TABLE Order_Items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table Product created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $order_id = $_POST['order_id'];
        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
    
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Order_Items (order_id, product_id,quantity,price) VALUES ('$order_id', '$product_id', '$quantity', '$price')";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
function deleteproductcategoryById(){
    global $conn;
    if(isset($_GET['product_id'],$_GET['category_id'])){
        $id_product =  $_GET['product_id'];
        $id_category =  $_GET['category_id'];
        $sql_delete = "DELETE FROM Product_Categories WHERE product_id  = $id_product AND category_id  = $id_category"; 
        $delete = $conn->query($sql_delete);
     }
}
function product_category_Item(){
    global $conn;
    $sql = "SELECT * FROM Product_Categories"; 
    $result = $conn->query($sql);
    return $result;
}
function product_category(){
    global $conn;
    $sql = "CREATE TABLE Product_Categories (
    product_id INT,
    category_id INT,
    PRIMARY KEY (product_id, category_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table Product_Categories created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $product_id = $_POST['product_id'];
        $category_id = $_POST['category_id'];
    
        // SQL query to insert the data into the Users table
        $sql = "INSERT INTO Product_Categories (product_id, category_id) VALUES ('$product_id', '$category_id')";
    
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>