<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перемикач switch</title>
</head>

<body>
    <p>Перемикач switch-ідеальна заміна else if </p>
    <?php
    $char = 'R';
    switch ($char) {
        case 'php':
    ?>
            <h1>Language PHP</h1>
        <?php
            break;
        case 'js':
        ?>
            <h1>Language JavaScript</h1>

        <?php
            break;
        case 'c#':
        ?>
            <h1>Language c#</h1>
        <?php
            break;
        default:
        ?>
            <h1>Невідома мова</h1>
    <?php
    }
    ?>


    <?php
    $number = 80;
    switch (true) {
        case ($number > 0 && $number <= 10):
            echo "$number менше 10 і більше 0";
            break;
        case ($number > 0 && $number <= 100):
            echo "$number менше 100 і більше 10";
            break;
        case ($number > 0 && $number <= 1000):
            echo "$number менше 1000 і більше 100";
            break;
        default:
            echo "$number менше 1000 і більше 100";
            break;
    }
    ?>
</body>

</html>