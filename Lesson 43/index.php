<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* $date = '01.01.2021';
    echo 'day' . substr($date, 0, 2) . '<br>';
    echo 'mount' . substr($date, 3, 2) . '<br>';
    echo 'year' . substr($date, 6) . '<br>'; */
    /* day01-mount01-year2021 */

    //search
    /* $date = 'Hello world';
    echo strpos($date, 'world'); */
    //search 2
    /*  $str = 'PHP-інтерпретована мова';
    echo substr($str, strpos($str, 'інтерпрет')); */

    //підміна
    /*  $str = 'PHP-[b]інтерпретована[/b] мова. [b]та жирний текст[/b]';
    echo $str, '<br>';
    $str = str_replace(['[b]', '[/b]'], ['', ''], $str, $number);

    echo "Здійснено заміну " . $number . " рази"; */


    //delete
    $str = ' Hello, world!  ';
    echo strlen($str);
    echo '<br>';
    echo strlen(trim($str));
    ?>
</body>

</html>