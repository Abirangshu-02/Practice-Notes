<?php
// PHP OOPS Abstraction
/* (Account Opening, Deposite, Withdraw)
 * RBI  abstract_class(account_opening, deposite, withdraw)
 *    --> SBI
 *    --> BOB
 * 
 * 
 */
abstract class Abstract_Parent_Class {
    // public $var = 100;
    /* abstract method --> we defind this kind of methods in an abstract class 
    but not implement it in that class. */
    abstract public function message();
}

class Abstract_Child_Class extends Abstract_Parent_Class {
    public function message()
    {
        echo "Hello World";
    }
}

$obj = new Abstract_Child_Class();
echo $obj->message();

?>