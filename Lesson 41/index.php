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
    $message = "Повідомлення текст";
    $mFu = function () use ($message) {
        //echo $message;
        $message = "New";
        return $message;
    };

    echo $mFu();
    echo '<br>';
    echo $message;
    ?>
</body>

</html>