<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вчимо мову PHP, Злиття та порівняння масивів на мові php</title>
</head>

<body>
    <?php
    $first = ['red',  'blue'];
    $second = ['brown',  'green'];
    /* $con = array_merge ($first, $second);
    echo '<pre>';
    print_r($con);
    echo '</pre>'; */
    if ($first == $second) {
        echo "рівні";
    } else {
        echo "не рівні";
    }
    ?>
</body>

</html>