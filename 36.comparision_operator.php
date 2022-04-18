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
    echo "comparision operator";

    #equals to
    $x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

#identical
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal

#not equals
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

#not equals
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal

#not identical
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal

#SOME OTHER OPERAOTS
# <	Less than	$x < $y	
# >=	Greater than or equal to	$x >= $y	
# <=	Less than or equal to	$x <= $y	
# <=>	Spaceship	$x <=> $y
?>
</body>
</html>