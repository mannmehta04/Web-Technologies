<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
            Username:&emsp;&emsp;&nbsp;<input type="text" name="user" required><br>
            Password:&emsp;&emsp;&nbsp;<input type="password" name="pass" required><br>
            <input type="submit" value="Verify">
        </form>
    </body>
</html>

<?php
session_start();
if(isset($_POST["user"])){
    $fetchedUsername = $_POST["user"];
    $_SESSION["sessionId"] = $fetchedUsername;
    header('Location: ./p10_2.php');
}
?>