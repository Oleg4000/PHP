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
    //поточний вигляд
    /*  function recursion($counter)
    {
        if ($counter > 0) {
            echo ($counter--) . '<br>';
            recursion($counter);
        } else return;
    }
    recursion(8); */



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
    //Вид (View):
    class CounterView
    {
        public function displayCounter($counterValue)
        {
            echo $counterValue . '<br>';
        }
    }
    //Контролер (Controller):
    class CounterController
    {
        private $model;
        private $view;

        public function __construct($model, $view)
        {
            $this->model = $model;
            $this->view = $view;
        }

        public function recursion()
        {
            $counterValue = $this->model->getCounterValue();
            if ($counterValue > 0) {
                $this->view->displayCounter($counterValue);
                $this->model->decrementCounter();
                $this->recursion();
            }
        }
    }

    // Використання контролера
    $model = new CounterModel(8);
    $view = new CounterView();
    $controller = new CounterController($model, $view);
    $controller->recursion();

    ?>
</body>

</html>