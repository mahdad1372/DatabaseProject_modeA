<?php
require("./db.php");
require_once("./funtions.php");
create_User();
?>
<!DOCTYPE html>
<html>
    <head>Add user</head>
    <body>
        <form action="./index.php" method="post">
            <P>
                <label>name</label>
                <input type="text" name="name" id="name"/>
            </P>
            <P>
                <label>email</label>
                <input type="text" name="email" id="email"/>
            </P>
            <P>
                <label>password</label>
                <input type="text" name="password" id="password"/>
            </P>
        
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>