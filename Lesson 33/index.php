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
    /* $number = ['1', '2', '3','4','HELLO'];
    for ($i = 0; $i < count($number); $i++){
        echo "$number[$i] <br>";
    } */
    //------------------------
    /*   $arr = [
        'auto'=>'BMW',
        'plane'=>'B-21',
        'ship'=>'Black Pearl'
    ];
    foreach($arr as $key =>$value){
        echo "$key:$value <br>";
    } */
    //-------------------------------------
    $transport = [
        'Auto' => ['BMW', 'Mercedes', 'Douge', 'Ford', 'Audi'],
        'Plane' => ['Wish', 'AN-225', 'Boieng-747', 'Airbus-380', 'b-21'],
        'Ship' => ['Авіаносець', 'Фрегат', 'Есмінець']
    ];
    foreach ($transport as $key => $array) {

        
       /*  foreach ($array as $value) {
            echo "<li>$value</li>";
        } */
        //another way
        echo "<b>$key</b><br>";
        for($i=0; $i<count($array); $i++){
            echo "<li>$array[$i]</li>";
        }
    }

    //another way
    ?>
</body>

</html>