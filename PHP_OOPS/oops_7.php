<?php
interface RBI {
    public function account_opening($cus_name, $cus_balance);
    public function deposite($deposite_amount);
    public function withdraw($withdraw_amount);
}

class SBI implements RBI {
    public $name;
    public $balance;
    public function account_opening($cus_name, $cus_balance){
        $this->name = $cus_name;
        $this->balance = $cus_balance;
    }
    public function deposite($deposite_amount){
        return $this->balance += $deposite_amount;
    }
    public function withdraw($withdraw_amount){
        if ($withdraw_amount > $this->balance) {
            echo "Insufficient Balance !"."<br>";
            return;
        }
        return $this->balance -= $withdraw_amount;
    }
    public function show_account_details(){
        echo "Account Name : ".$this->name."<br>";
        echo "Account Balance : ".$this->balance."<br>";
    }
}

$obj = new SBI();
$obj->account_opening("Euphoria GenX", 10000);
$obj->show_account_details();
$obj->withdraw(2000);
$obj->show_account_details();
$obj->withdraw(10000);
$obj->show_account_details();
?>