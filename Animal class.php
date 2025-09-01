<?php 
    class Animal {
        protected bool $name;
        protected bool $hunt = false;

        function doesHunting() {
            if($this->hunt == true) {
                echo "Yes, It Hunts. <br>";
            } else {
                echo "no, It not hunts. <br>";
            }
        }
    }

    class Dog extends Animal {
        function __construct($name, $hunt) {
            $this->name = $name;
            $this->hunt = $hunt;
        }

        function makeSound() {
            echo "bhawww! bhawwwww! <br>";
        }
    }

    class Tiger extends Animal {
        function __construct($name, $hunt) {
            $this->name = $name;
            $this->hunt = $hunt;
        }

        function makeSound() {
            echo "Grrr! Grrrrrr! <br>";
        }
    }

    $dog1 = new Dog("German Shephard", false);
    $dog1->makeSound();

    $tiger1 = new Tiger("white tiger",true);
    $tiger1->makeSound();
?>