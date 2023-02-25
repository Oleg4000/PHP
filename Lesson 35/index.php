<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка існування та видалення елементів масиву мовою PHP</title>
</head>
<body>
    <?php
    $arr=[5=>1,2,3];
    for ($i=0; $i<10; $i++){
        if (isset($arr[$i])){
            echo ("Елемент \$arr[$i] існує<br>");
        }else{
            echo ("Елемент \$arr[$i]  не існує<br>");
        }
    }
    ?>
   <!--  видалення елементів масиву -->
   <?php
   $arr2=[5=>1,2,3];
   unset ($arr2[6]);
   echo '<pre>';
   print_r($arr2);
   echo '</pre>';
   ?>
</body>
</html>