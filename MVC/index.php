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
    //(Model)
    class CounterModel
    {
        private $counter;

        public function __construct($counter)
        {
            $this->counter = $counter;
        }

        public function decrementCounter()
        {
            $this->counter--;
        }

        public function getCounterValue()
        {
            return $this->counter;
        }
    }

    ?>
</body>

</html>