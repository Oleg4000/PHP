<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл do while</title>
</head>
<p>Цикл do while-цикл з пост умовою</p>

<body>
    <?php
    $i = 0;

    do {
        echo "$i<br>";
    } while (++$i <= 5);//пост умова  цикл буди виконуватися доки остання умова не буде  підтверджена
    ?>
</body>

</html>