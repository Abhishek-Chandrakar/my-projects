<?php 
    class Father {
        protected $surname = "chandrakar";

        function living() {
            echo "I live in 4bhk flat in raipur";
        }
    }

    class Son extends Father {
            private $name;
            function __construct($name) {
                echo "my name is $name $this->surname <br>";
            }
        }

        $son1 = new Son("abhishek");
        $son1->living();
?>