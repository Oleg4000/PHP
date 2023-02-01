<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 16</title>
</head>

<body>
    <p>Оператори порівняння</p>
    <?php
    $x = 1;
    $y = '1';
    echo $x < $y; //true
    echo $x <= $y; //false
    echo $x > $y;//true
    echo $x >= $y;//false

    echo $x == $y; //порівняння без типу
    echo $x != $y; //чи не дорівнює х=у
    echo $x <> $y;//чи не дорівнює х=у
    echo $x === $y;// повна рівність
    echo $x !== $y;//чи не дорівнює х=у чи їхній тип часом не різний
    echo $x <=> $y;//повертає числове значення 0/1
    ?>

    
</body>

</html>