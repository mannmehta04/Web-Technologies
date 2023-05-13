<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            echo "Printed using Echo <br>";
            print("Printed uing Print Function <br><br>");

            $id = 312;
            $name = "Mann";
            $cpi = 9.20;
            $knowsPhp = true;
            $friends = array("302" => "Priya", "303" => "Shivraj", "304" => "Karma", "313" => "Kalp", "318" => "Ayush");            

            echo"Number Data Type; Id: $id <br>";
            echo"String Data Type; Name: $name <br>";
            echo"Float Data Type; CPI: $cpi <br>";
            echo"Boolean Data Type; knows Php?: $knowsPhp <br>";
            echo"<br>";

            $totalFriends= count($friends);
            echo"Displaying $totalFriends Friends Using Array and forEach loop:<br><br>";

            foreach ($friends as $key => $value) {
                echo " $key - $value <br>";
            }

            echo"<br>";
            echo"Displaying Data using Class:<br><br>";
            class Laptop {

                public $series;
                public $processor;
                public $graphics;
                public function __construct($series, $processor, $graphics) {
                    $this->series = $series;
                    $this->processor = $processor;
                    $this->graphics = $graphics;
                }

                public function message() {
                    return "I have Laptop with <b>" . $this->processor . "</b> and <b>" . $this->graphics . "</b> of <b>" . $this->series . "</b> Series <br>";
                }
            
            }

            $Buisness_Laptop = new Laptop("HP Elite Book","i7 12th Gen", "Intel Iris Xe");
            echo $Buisness_Laptop -> message();
            echo "<br>";

            $Gaming_Laptop = new Laptop("Asus ROG","i9 13th Gen", "Geforce RTX 4090");
            echo $Gaming_Laptop -> message();
        ?>
    </body>
</html>