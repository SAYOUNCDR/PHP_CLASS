<?php
//What is PHP Class
//What is PHP Object

class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Amount Deposited \n";
    }

    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            echo "Insufficient funds! Cannot withdraw $$amount \n";
        } else {
            $this->balance -= $amount;
            echo "Withdraw: $amount \n";
        }
    }

    public function getBalance()
    {
        echo "Account Number: " . $this->accountNumber ."\n";
        echo "Current Balance: " . $this->balance ."\n";
    }
}

$account1 = new BankAccount("123456789", 1000);
$account2 = new BankAccount("987654321", 500);

$account1->deposit(600);
$account1->getBalance();