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
    /*  $message = "Повідомлення текст";
    $mFu = function () use ($message) {
        //echo $message;
        $message = "New";
        return $message;
    };

    echo $mFu();
    echo '<br>';
    echo $message; */

    /*     function odd(int $number)
    {
        if ($number % 2 == 0) {
            return false;
        } else {
            return true;
        }
    }
    echo odd(4); */
    //підрахунок к-ті аргументів і повернення результату

    function sum(...$items)
    {
        $sum = 0;
        for ($i = 0; $i < count($items); $i++) {
            $sum += $items[$i];
        }
        return $sum;
    }
    echo sum(10, 5, 15);
    echo '<br>';
    $a = [5, 15, 25, 35, 15, 45];
    echo '<br>';

    //func_num_args()-Возвращает количество аргументов, переданных текущей пользовательской функции.
    function foo()
    {
        echo "Количество аргументов: ", func_num_args(), PHP_EOL;
    }

    echo foo(1, 2, 3, 4, 5, 6, 7, 8, 85, 19, 25, 65, 551541, 26511);



    echo '<br>';
    //Использование нескалярных типов в качестве значений по умолчанию
    function makecoffee($types = array("капучино"), $coffeeMaker = NULL)
    {
        $device = is_null($coffeeMaker) ? "вручную" : $coffeeMaker;
        return "Готовлю чашку " . join(", ", $types) . " $device.\n";
    }
    echo makecoffee();
    echo makecoffee(array("капучино", "лавацца"), "в чайнике");
    ?>
</body>

</html>