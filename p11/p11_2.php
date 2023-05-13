<html>
    <head>
        <title>Movie Data</title>
        <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }

        table{
            border-radius: 5px;
        }

        table:nth-child(13):hover{
            background-color: blue;
        }
        </style>
    </head>
    <body>
        <form action="" method="post">
        <table border="5px" cellpadding="4px" align="center">
            <tr>
                <th colspan="2">Movie Data Insertion</th>
            </tr>

            <tr>
                <td>Enter Movie Name:</td>
                <td><input type="text" name="movieName" required></td>
            </tr>

            <tr>
                <td>Director Name:</td>
                <td><input type="text" name="director" required></td>
            </tr>

            <tr>
                <td>Enter your Ratings:</td>
                <td><input type="floatval" name="ratings" required></td>
            </tr>

            <tr>
                <td>Leading Actor:</td>
                <td><input type="text" name="leadingActor" required></td>
            </tr>

            <tr>
                <td>Year:</td>
                <td><input type="text" name="year" required></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="sendData">SUBMIT</button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>

<?php
    include './connection.php';

    if(isset($_POST["sendData"])){

        $name = $_POST["movieName"];
        $director = $_POST["director"];
        $ratings = $_POST["ratings"];
        $leadingActor = $_POST["leadingActor"];
        $year = $_POST["year"];

        $sql = "INSERT INTO movies (movieName, director, ratings, leadingActor, year) VALUES ('$name', '$director', $ratings,'$leadingActor', $year)";
        
        if (mysqli_query($conn, $sql)) 
        {
            // echo "Data Inserted Successfully.";
        }

    }
?>