<?php
// OOPS --> Object Oriented Programming Languages
/*
 * 1. Inheritance
 * 2. Abstraction
 * 3. Encapsulation
 * 4. Polymorphism
 * 
 * HelloWorld --> pascle case convention
 * helloWorld --> camel case convention
*/
class Jphp12 {
    public $name1;
    public $age1;
    public function __construct($name, $age) {
        echo "From constructor !!"."<br>";
        echo "name => ".$name."<br>";
        echo "age => ".$age."<br>";
        $this->name1 = $name;
        $this->age1 = $age;

        echo $this->name1."<br>";
        echo $this->age1."<br>";
    }
    public $a = 10;
    public $name = "Euphoria";
    public function __destruct(){
        echo "From destructor !!";
    }
    function message1(){
        echo "Hello World".$this->a."<br>";
    }
    function message2(){
        echo "Hello ".$this->name." 2"."<br>";
    }
    function add($num1, $num2){
        echo ($num1." + ".$num2." = ".($num1+$num2)."<br>");
    }
}
$name=" Euphorua";
$age = 43;
$obj = new Jphp12($name, $age); // object
$obj->message1();
$obj->message2();
$obj->add(12,14);
// echo $obj->$a;

?>