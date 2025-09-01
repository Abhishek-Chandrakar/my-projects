<?php
class Bank
{
    protected $balance;

    final function getBalance()
    {
        $this->balance;
    }

    final function deposit($amt)
    {
        $this->balance += $amt;
        echo "The amount $amt will be successfully deposited <br>";
    }

    final function credit($amt)
    {
        if ($amt > $this->balance) {
            echo "Your account does not have sufficient amount! <br>";
        } elseif ($amt <= 0) {
            echo "Invalid amount <br>";
        } else {
            $this->balance -= $amt;
            echo "The amount $amt will be successfully credited";
        }
    }
}

class User extends Bank
{
    function __construct($balance)
    {
        $this->balance = $balance;
    }
}

$user1 = new User(50000);
$user1->deposit(5000);
$user1->getBalance();
$user1->credit(2000);
$user1->getBalance();
