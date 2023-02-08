<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл for</title>
</head>
<p>Цикл for - коли точно знаєш скліки часу(разів) його потріно виводити</p>

<body>
    <?php
    /*  for ($i = 0; $i<=20; $i+=2) {
        echo "$i<br>";
        
    } */

    for ($i = 2; $i < 100; $i++) {
        for ($j = 2; $j < $i; $j++) {
            if (($i % $j) != 0) {
                continue;
            } else {
                $flag = true;
                break;
            }
        }
        if (! $flag) echo "$i";
        $flag = false;
    }
    ?>
</body>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</html>