<!DOCTYPE html>
<html>

<body>

    <?php
    #The json_decode() function is used to decode or convert a JSON object to a PHP object.
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
    ?>

</body>

</html>