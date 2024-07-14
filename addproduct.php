<?php
require("./db.php");
require_once("./funtions.php");
create_Product();
?>
<!DOCTYPE html>
<html>
    <head>Add Product</head>
    <body>
        <form action="./addproduct.php" method="post">
            <P>
                <label>name</label>
                <input type="text" name="name" id="name"/>
            </P>
            <P>
                <label>Description</label>
                <input type="text" name="description" id="description"/>
            </P>
            <P>
                <label>price</label>
                <input type="text" name="price" id="price"/>
            </P>
            <P>
                <label>Quantity</label>
                <input type="text" name="stock_quantity" id="stock_quantity"/>
            </P>
        
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>