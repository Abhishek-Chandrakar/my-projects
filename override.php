<?php
class Doctor {
    function calculateFees($hours) {
        $hours *= 100;
        echo "the fees charge by a doctor is $hours <br>";
    }
}

class Specialist extends Doctor {
    function calculateFees($hours) {
        $hours *= 250;
        echo "the fees charge by a specialist is $hours <br>";
    }
}

$patient1 = new Doctor(); 
$patient2 = new Specialist();

$patient1->calculateFees(3);
$patient2->calculateFees(2);