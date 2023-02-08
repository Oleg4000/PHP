<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Читання з файлу та запис у файл на PHP</title>
</head>
<p>Читання з файлу та запис у файл на PHP</p>
<body>
    <?php
    $homepage= file_get_contents('text.txt');
    echo $homepage;
    $homepage .="\n\tNew row";
    $filename=date("Y-m-d-H-i-s").'.txt';
    file_put_contents($filename, $homepage);
    ?>
</body>
</html>