<?php 
    include './connection.php';

    // $sql = "INSERT INTO laptop (laptopName, laptopSeries, price, warranty) VALUES ('Asus Strix G15', 'ROG', 99000, '2')";
    $sql = "INSERT INTO laptop (laptopName, laptopSeries, price, warranty) VALUES ('Asus TUF G17', 'TUF', 110000, '3')";
    
    if (mysqli_query($conn, $sql)) 
    {
        echo "Data Inserted Successfully.";
    }

?>