<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Program</title>
</head>

<body>
    <?php
    echo "Array Functions";

    #INDEXED ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }


    #ASSOSIATIVE ARRAY
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.";


    #MULTIDIMONSIONAL ARRAY// A two-dimensional array
    $cars = array(
        array("Volvo", 100, 96),
        array("BMW", 60, 59),
        array("Toyota", 110, 100)
    );
    echo $cars[0][0] . ": Ordered: " . $cars[0][1] . ". Sold: " . $cars[0][2] . "<br>";
    echo $cars[1][0] . ": Ordered: " . $cars[1][1] . ". Sold: " . $cars[1][2] . "<br>";
    echo $cars[2][0] . ": Ordered: " . $cars[2][1] . ". Sold: " . $cars[2][2] . "<br>";

    ?>
</body>

</html>