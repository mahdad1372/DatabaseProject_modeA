<?php
require("./db.php");
require_once("./funtions.php");
create_Category();
?>
<!DOCTYPE html>
<html>
    <head>Add Category</head>
    <body>
        <form action="./addcategory.php" method="post">
            <P>
                <label>name</label>
                <input type="text" name="name" id="name"/>
            </P>
            <P>
                <label>Description</label>
                <input type="text" name="description" id="description"/>
            </P>
        
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>