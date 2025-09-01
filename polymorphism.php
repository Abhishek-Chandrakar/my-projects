<!--Example of the Polymorphism - many + forms -->

<?php
interface Car
{
    public function color();
}

class Porsche
{
    public function color($cname)
    {
        echo "the color of the car is: $cname <br>";
    }
}

class Ferrari
{
    public function color($cname)
    {
        echo "the color of the car is: $cname <br>";
    }
}

class SUV
{
    public function color($cname)
    {
        echo "the color of the car is: $cname <br>";
    }
}

$car1 = new Porsche();
$car1->color("black");
