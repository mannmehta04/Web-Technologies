<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Displaying All Server Information:</h1>
        <?php

            foreach ($_SERVER as $key => $value) {
                echo "<p>$key: $value <p>";
            }
            
        ?>
    </body>
</html>