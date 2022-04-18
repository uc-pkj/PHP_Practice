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
    echo "Static Keyword<br><br>";

    function hello()
    {
        static $x = 10;
        echo $x;
        $x++;
    }

    hello();
    echo ("<br>");
    hello();
    echo ("<br>");
    hello();
    echo ("<br>");
    hello();

    ?>
</body>

</html>