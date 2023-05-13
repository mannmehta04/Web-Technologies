<?php
    $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "22CP312";

    $conn = new mysqli($servername, $username, $password,$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully<br>";
?>