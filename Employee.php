<!-- Calculates the Employee Salary -->
<?php
class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays): int
    {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
    }
}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = "john, smith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);

echo "$emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves.<br>";
echo "$emp1->name salary is $salary<br><br>";

$emp2 = new Employee();
$emp2->id = 102;
$emp2->name = "johnny";
$emp2->totalLeaveTaken = 0;
$salary = $emp2->getSalaryAmount(20);

echo "$emp2->name has worked for $emp2->workingDays and taken $emp2->totalLeaveTaken leaves.<br>";
echo "$emp2->name salary is $salary";
?>