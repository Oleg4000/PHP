<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 39</title>
</head>

<body>
    <?php
    /*  function sum()
    {
        global $var; //global дозволяє зробити змінну зовнішньою
        $var = 2;
        return $var;
    }
    echo  "<br> $var";
    $var = 6;
    echo sum(2);
    echo  "<br> $var"; */

    /*  function sum()
    {
        static $var; //static дозволяє зробити змінну довго живучою тобто при наступному виклику вункції змінна буде памятати чвій попередній стан
        $var = 2;
        return $var;
    }
    echo  "<br> $var";
    $var = 6;
    echo sum(2);
    echo  "<br> $var"; */

    //повернення масиву функцією 
    function fotmatSize($bytes)
    {
        $kbytes = $bytes / 1024;
        $mbytes = $kbytes / 1024;
        $gbytes = $mbytes / 1024;
        return [$bytes, $kbytes, $mbytes, $gbytes];
    }
    echo '<pre>';
    list($bytes, $kbytes, $mbytes, $gbytes) = fotmatSize(54989777);
    echo "$bytes, <br>$kbytes, <br>$mbytes, <br>$gbytes";

    //другий спосіб

    $arr = fotmatSize(54989777);
    $bytes = $arr[0];
    $kbytes = $arr[1];
    $mbytes = $arr[2];
    $gbytes = $arr[3];
    echo "$bytes, <br>$kbytes, <br>$mbytes, <br>$gbytes";


    ?>



</body>

</html>