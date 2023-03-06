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


    /*   function myFunction(int $a, int $b): int
    {
        $sum = $a + $b;
        return $sum;
    }

    echo myFunction(5.5, 9.7); */

    /* 
    function sum(&$a)
    {
        $a = $a + 10;
        return $a;
    }
    $b = 10;
    echo sum($b);
    echo '<br>';
    echo $b; */


    /*     function outArguments(...$items)
    {
        foreach ($items as $arg) {
            echo "$arg<br>";
        }
    }

    outArguments('PHP', 'JS', 'C++', 'Python'); */

    function outArguments($a, $b, $c, $d)
    {
        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        echo "$d<br>";
    }

    $items = ['PHP', 'JS', 'C++', 'Python'];
    outArguments(...$items);
    ?>
</body>

</html>