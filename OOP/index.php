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

    $make = "Honda";
    $model = "Civic";
    $year = 2022;
    $doors = 4;



    class Vehicle
    {
        public $make;
        public $model;
        public $year;

        public function __construct($make, $model, $year)
        {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        public function getInfo()
        {
            return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year;
        }
    }

    class Car extends Vehicle
    {
        public $doors;

        public function __construct($make, $model, $year, $doors)
        {
            parent::__construct($make, $model, $year);
            $this->doors = $doors;
        }

        public function getInfo()
        {
            return parent::getInfo() . ", Doors: " . $this->doors;
        }
    }

    $car = new Car($make, $model, $year, $doors);
    echo $car->getInfo(); // Make: Honda, Model: Civic, Year: 2022, Doors: 4




    ?>
</body>

</html>