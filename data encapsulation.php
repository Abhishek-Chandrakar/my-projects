<?php 
class Student {
    private $id;
    private $name;
    private $class;

    public function getId() {
        echo "the student id is: $this->id <br>";
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        echo "the student name is: $this->name <br>";
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getClass() {
        echo "the student class is: $this->class <br>";
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }
}

$student1 = new Student();
$student1->setName("abhishek chandrakar");

$student1->getName();

