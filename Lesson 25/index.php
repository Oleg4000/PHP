<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 25 Цикл While</title>
</head>

<body>
    <?php
    $i = 0;
    while ($i <= 5) {
        $i++;
        if ($i > 4) continue; //зупинити коли дойшло до 4 розрив циклу
        if ($i > 5) break; //вихід з циклу, break 2- вихід з рівня вкладеності
        echo "$i<br>"; //вихід з циклу,
        
    }
    ?>
</body>

</html>