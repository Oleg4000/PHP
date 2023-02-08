<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 22 </title>
</head>

<body>
    <p>Тернарний оператор</p>
    <?php
    /*  $x = -450;
   //три умови 
   $x = $x <0?-$x:$x;
   echo $x; */
    //??-перевірка чи в змінній не null
    $n = 0;
    finish:
    $y = 2;
    $y = $y ?? 1;
    echo $y;
    $n++;
    if ($n > 6) {
        goto end;
    }
    //go to-перехід на мітку назва якої вказує на мітку
    goto finish;
    end:;
    ?>
</body>

</html>