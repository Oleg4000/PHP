<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 39</title>
</head>

<body>
    <?php
    function sum()
    {
        global $var;
        $var = 2;
        return $var;
    }
    echo  "<br> $var";
    $var = 6;
    echo sum(2);
    echo  "<br> $var";

    ?>



</body>

</html>