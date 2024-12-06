<?php

/*
Access Specifiers in PHP :
    1. Public --> access from everywhere
    2. Private --> access from within that class only
    3. Protected --> access from within that class 
                    and also from extended class
*/

class JPHP_Parent {
    public function __construct() {
        echo "From Parent Class Constructor"."<br>";
    }
    public $name="JPHP12";
    protected $age;
    private $pin;

    public function set_pin($pin1){
        $this->pin = $pin1;
    }
    public function get_pin(){
        return $this->pin;
    }

    public function message(){
        echo("Hello World From Parent Class"."<br>");
    }
}

class JPHP_Child extends JPHP_Parent {
    // public function __construct() {
    //     echo "From child class constructor"."<br>";
    // }
    public function set_age($age1){
        $this->age = $age1;
    }
    public function get_age(){
        return $this->age;
    }
    public function set_name($name1){
        $this->name = $name1;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_message(){
        $this->message();
    }
    // public function getPPin(){
    //     return $this->pin;
    // }
}
$obj = new JPHP_Child();
$obj->message();
// $obj->name = "Euphoria GenX";
echo "Initial Value :".$obj->name."<br>";
$obj->set_name("Euphoria GenX");
echo "Updated Value :".$obj->get_name()."<br>";
echo "Value after updation".$obj->name."<br>";
$obj->get_message();

$obj->name = "abc";
$obj->set_age(33);
echo $obj->get_age();
echo $obj->get_name();
// $obj->age = 10;
// $obj->pin = 1234;
// echo $obj->getPPin();
$obj->set_pin(1234);
echo $obj->get_pin();

?>