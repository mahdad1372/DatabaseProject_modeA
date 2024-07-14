<?php
require("./db.php");
require_once("./funtions.php");
create_Order_item();
?>
<!DOCTYPE html>
<html>
    <head>Add Order item</head>
    <body>
        <form action="./addorderitem.php" method="post">
            <P>
                <label>order_id</label>
                <input type="text" name="order_id" id="order_id"/>
            </P>
            <P>
                <label>product_id</label>
                <input type="text" name="product_id" id="product_id"/>
            </P>
            <P>
                <label>quantity</label>
                <input type="text" name="quantity" id="quantity"/>
            </P>
            <P>
                <label>price</label>
                <input type="text" name="price" id="price"/>
            </P>
        
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>