<?php 
    class Bank {
        private $balance;

        function __construct($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function depositAmount($amt) {
            $this->balance += $amt;
            echo "deposit amount: " . $amt . PHP_EOL;
            echo "balance: " . PHP_EOL;
            return $this->balance;
        }

        public function deductAmount($amt) {
            if($amt > $this->balance) {
                echo "Your account does not have sufficient Amount";
            }
            elseif($amt <= 0) {
                echo "Invalid Amount";
            }else {
                $this->balance -= $amt;
            }
        }
    }

    $user1 = new Bank(5000);
    $user1->depositAmount(5000);

    echo $user1->getBalance();
?>