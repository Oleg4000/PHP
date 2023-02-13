<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкція list та як поміняти місцями значення змінних</title>
</head>

<body>
    <?php
    /*   $arr=[1,2,3];
        list($one,$two,$three)=$arr;
        echo $two ."<br>";
        echo $three; */
    $x = 7;
    $y = 3;
    echo "before";
    echo "x: $x<br>";
    echo "y: $y<br>";
    list($y, $x) = [$x, $y];

    echo "after";
    echo "x: $x<br>";
    echo "y: $y<br>";
    ?>
</body>

</html>