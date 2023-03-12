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
    abstract class Shape
    {
        abstract public function getArea();
    }

    class Rectangle extends Shape
    {
        private $width;
        private $height;

        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea()
        {
            return $this->width * $this->height;
        }
    }

    class Circle extends Shape
    {
        private $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }

        public function getArea()
        {
            return pi() * pow($this->radius, 2);
        }
    }

    $rectangle = new Rectangle(10, 20);
    $circle = new Circle(5);

    echo $rectangle->getArea(); // 200
    echo '<br>';
    echo $circle->getArea(); // 78.539816339745
    echo '<br>';

    ?>
</body>

</html>