<?php 
    class Car {
        private $engine = "4.0L Naturally Aspirated Flat-6";
        private $speed;

        function __construct($speed){
            $this->speed = $speed;
        }

        function getEngine() {
            echo "the porsche engine is " . $this->engine . "<br>";
            return $this->engine;
        }

        function getSpeed() {
            echo "the porsche current speed is " . $this->speed . "km/h" . "<br>";
            return $this->speed;
        }

        function increaseSpeed($i) {
            return $this->speed += $i;
        }

        function DecreaseSpeed($d) {
            return $this->speed -= $d;
        }
    }

    $car1 = new Car(70);
    $car1->getEngine();
    // $car1->getSpeed();

    $car1->increaseSpeed(30);
    $car1->getSpeed();

?>