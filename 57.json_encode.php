<!DOCTYPE html>
<html>

<body>

    <?php
    #The json_encode() function is used to encode a value to JSON format.
    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

    echo json_encode($age);
    ?>

</body>

</html>