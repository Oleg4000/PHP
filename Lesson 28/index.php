<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Створення масиву та звернення до його елементів на PHP</title>
</head>
<body>
    <?php
    //$arr = ['Hello', 'world', '!'];
    $var = 'Hello world !';
    $arr= (array ) $var;
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    ?>
</body>
</html>