<?php
session_start();

    if(isset($_SESSION["sessionId"])){
            $user = $_SESSION["sessionId"];

            echo"<h2>Welcome, $user! <br></h2>";
    }
    else{
        echo "you need to log in!";
    }
?>