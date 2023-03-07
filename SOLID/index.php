<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLID</title>
</head>

<body>
    <?php
    //first viev
    /* function recursion($counter)
    {
        if ($counter > 0) {
            echo ($counter--) . '<br>';
            recursion($counter);
        } else return;
    }
    recursion(8); */
    //SOLID Model
    /*     Для переробки коду відповідно до принципів SOLID, нам потрібно розділити функціональні обов'язки на класи, щоб кожен клас відповідав лише за один аспект програми.

Принципи SOLID означають такі розшифровки:

S - Принцип одинарної відповідальності (Single Responsibility Principle)
O - Принцип відкритості/закритості (Open/Closed Principle)
L - Принцип підстановки Барбари Лісков (Liskov Substitution Principle)
I - Принцип розділення інтерфейсу (Interface Segregation Principle)
D - Принцип інверсії залежності (Dependency Inversion Principle)
Отже, для переробки коду під принципи SOLID, ми можемо розглянути наступний підхід:

Принцип одинарної відповідальності (SRP):
Ми створимо клас, який буде відповідати за рекурсивний процес, та винесемо його з функції recursion(). */
    /*  class RecursiveProcess
    {
        private $counter;

        public function __construct($counter)
        {
            $this->counter = $counter;
        }

        public function run()
        {
            if ($this->counter > 0) {
                echo ($this->counter--) . '<br>';
                $this->run();
            } else {
                return;
            }
        }
    } */
    //Принцип відкритості/закритості (OCP): Ми можемо внести зміни до функціоналу коду без зміни його основного вмісту, просто змінивши значення лічильника.
    /*  $recursiveProcess = new RecursiveProcess(8);
    $recursiveProcess->run(); */
    //Принцип інверсії залежності (DIP):
    //Ми можемо створити інтерфейс RecursiveProcessInterface та використовувати його замість конкретного класу RecursiveProcess.Це дозволить нам замінити реалізацію нашого процесу на будь-який інший клас, який реалізує цей інтерфейс, не змінюючи основний код.
    interface RecursiveProcessInterface
    {
        public function run();
    }

    class RecursiveProcess implements RecursiveProcessInterface
    {
        private $counter;

        public function __construct($counter)
        {
            $this->counter = $counter;
        }

        public function run()
        {
            if ($this->counter > 0) {
                echo ($this->counter--) . '<br>';
                $this->run();
            } else {
                return;
            }
        }
    }

    $recursiveProcess = new RecursiveProcess(9);
    $recursiveProcess->run();

    ?>
</body>

</html>