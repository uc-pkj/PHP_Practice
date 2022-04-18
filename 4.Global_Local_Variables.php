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
    echo "Global & Local Variables<br>";
    $Name = "Pankaj";
    echo "Call_Outside (global variable) $Name <br>";
    
    function name() {
    #echo "Call_Inside function (global variable) $Name <br>"; // can't access because $Name is global scope and cannot be accessed within a function.
    global $Name2; //now it is a global variable.
    $Name2 = "error";
    echo "call inside local variable $Name2 <br>";
    }
    name();
    echo "call outside local variable $Name2"; //cannot be accessable because it is local variable
?>
</body>
</html>