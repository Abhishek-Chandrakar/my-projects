<?php
class Calculator
{
    public $a;
    public $b;
    public $result = 0;

    function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        $this->result = $this->a + $this->b;
        return $this;
    }

    public function getResults()
    {
        echo "the addition of $this->a and $this->b is $this->result";
    }
}

$cal1 = new Calculator(34,25);
$cal1->add()->getResults();

