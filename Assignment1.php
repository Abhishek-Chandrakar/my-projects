<?php 
    class Student {
        public $marks;

        function examResults($sub1, $sub2, $sub3) {

            if($sub1 >= 35 && $sub2 >= 35 && $sub3 >= 35) {
                $percentage = ($sub1+$sub2+$sub3)/3;
                echo "the student is passed on all 3 subjects with the marks: <br>maths: $sub1, <br>science: $sub2, <br>english: $sub3 <br> the overall percentage is: $percentage<br>";
                return;
            } else {
                if ($sub1 <= 35) {
                    echo "the student will fail in maths with $sub1 marks<br>";
                } elseif($sub2 <= 35) {
                    echo "the student will fail in science with $sub2 marks<br>";
                } else {
                    echo "the student will fail in english with $sub3 marks<br>";
                }
            }
        }
    }

    $student1 = new Student();
    $student1->examResults(56,74,89);
?>