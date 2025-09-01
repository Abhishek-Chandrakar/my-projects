<?php 
    class Bank {
        public $accno;
        public $name;
        public $balance = 0;

        function depositAmount($amt){
            $this->balance += $amt;
        }

        function deductAmount($amt){

            if ($this->balance <= 0) {
                echo "No balance in the account<br>";
                return;
            }elseif ($this->balance <= $amt) {
                echo "No balance in the account<br>";
                return;
            } else {
                $this->balance -= $amt;
                return;
            }

        }

        function checkBalance(){
            echo "Your Account balance is: $this->balance<br>";
        }
    }

    $bank1 = new Bank();
    $bank1->accno = 101;
    $bank1->name = "John, Smith";
    $bank1->balance = 500;

    $bank1->checkBalance();
    $bank1->depositAmount(500);
    $bank1->checkBalance();
    $bank1->depositAmount(100);
    $bank1->checkBalance();
    $bank1->depositAmount(5000);
    $bank1->checkBalance();
   

?>