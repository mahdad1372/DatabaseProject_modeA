<?php
require("./db.php");
require_once("./funtions.php");
product_category();
?>
<!DOCTYPE html>
<html>
    <head>Add Product Category</head>
    <body>
        <form action="./addproduct_category.php" method="post">
            <P>
                <label>Product id</label>
                <input type="text" name="product_id" id="product_id"/>
            </P>
            <P>
                <label>category_id</label>
                <input type="text" name="category_id" id="category_id"/>
            </P>
        
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>