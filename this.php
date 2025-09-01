<?php 
    class Student {
        public $name;
        public $class;

        function getName(): string {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }

        function getClass() {
            return $this->class;
        }

        function setClass($class) {
            $this->class = $class;
        }

        function printDetails() {
            echo "the student name is <b>$this->name</b> and its class is <b>$this->class</b><br>";
        }
    }

    $student1 = new Student();
    $student2 = new Student();

    $student1->setName("abhishek");
    $student1->setClass("10th");

    $student2->setName("ankush");
    $student2->setClass("10th");

    $student1->printDetails();
    $student2->printDetails();
?>