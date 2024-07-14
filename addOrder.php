<?php
require("./db.php");
require_once("./funtions.php");
create_Order();
?>
<!DOCTYPE html>
<html>
    <head>Add Order</head>
    <body>
        <form action="./addOrder.php" method="post">
            <P>
                <label>User Id</label>
                <input type="text" name="user_id" id="user_id"/>
            </P>
            <P>
                <label>status</label>
                <input type="text" name="status" id="status"/>
            </P>
            <P>
                <label>total_amount</label>
                <input type="text" name="total_amount" id="total_amount"/>
            </P>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>