<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 40</title>
</head>

<body>
    <?php
    function recursion($counter)
    {
        if ($counter > 0) {
            echo ($counter--) . '<br>';
            recursion($counter);
        } else return;
    }
    recursion(8);


    //вложені ф-ції
    function outter()
    {
        function inner()
        {
            return "Hello world";
        }
    }

    echo outter(), inner();
    echo "<br>";

    //динамічне ім'я ф-ції
    function first()
    {
        return "First function";
    }
    function second()
    {
        return "Second function";
    }
    $newFunction = rand(0, 1) ? 'first' : 'second';
    echo $newFunction;
    echo "<br>";

    //anonimus function
    /* $arr = ['PHP', 'JS', 'C++', 'Python'];
    sort($arr);
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
 */
    class Point
    {
        public $x;
        public $y;
    }
    $fst = new Point;
    $fst->x = 12;
    $fst->y = 5;

    $snd = new Point;
    $snd->x = 1;
    $snd->y = 1;

    $thd = new Point;
    $thd->x = 4;
    $thd->y = 10;

    $arr = [$fst, $snd, $thd];

    usort($arr, function ($a, $b) {
        $dist_a = sqrt($a->x ** 2 + $a->y ** 2);
        $dist_b = sqrt($b->x ** 2 + $b->y ** 2);
        return $dist_a <=> $dist_b;
    });


    echo '<pre>';
    print_r($arr);
    echo '<pre>';
    ?>
</body>

</html>