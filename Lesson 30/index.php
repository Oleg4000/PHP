<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Багатовимірні масиви на мові PHP</title>
</head>

<body>
    <?php
    $transport = [
        'Auto' => ['BMW', 'Mercedes', 'Douge', 'Ford', 'Audi'],
        'Plane'=>['Wish','AN-225', 'Boieng-747', 'Airbus-380', 'b-21' ],
        'Ship'=>['Авіаносець', 'Фрегат','Есмінець']
    ];

   /*  echo '<pre>';
    print_r($transport);
    echo '</pre>'; */
    echo $transport ['Plane'][2];
    ?>
</body>

</html>