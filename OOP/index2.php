<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class BankAccount
    {
        private $balance;

        public function deposit($amount)
        {
            $this->balance += $amount;
        }

        public function withdraw($amount)
        {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
            } else {
                echo "Insufficient funds";
            }
        }

        public function getBalance()
        {
            return $this->balance;
        }
    }

    $account = new BankAccount();
    $account->deposit(1000);
    $account->withdraw(500);
    echo $account->getBalance(); // 500
    ?>
</body>

</html>