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
    ?>
</body>

</html>