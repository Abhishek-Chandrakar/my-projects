<?php
class Calculator
{
    public $a;
    public $b;
    public $result = 0;

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function setValues($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function add()
    {
        $this->result = $this->a + $this->b;
        return $this->result;
    }

    function getResults()
    {
        echo "the addition of " . $this->a . " + " . $this->b . ": " . $this->result;
    }
}

$cal1 = new Calculator();
$cal1->setValues(34,25);
$cal1->add();

$cal1->getResults();

?>