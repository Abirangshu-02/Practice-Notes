<?php
// php oops traits
// traits only use referance methods
trait Jphp12_trait {
    public function message(){
        echo "Hello World";
    }
    public function message1(){
        echo "Hello World";
    }
}

class Jphp_Child_class_5{
    use Jphp12_trait;
}

$obj = new Jphp_Child_class_5();
$obj->message();
$obj->message1();
?>