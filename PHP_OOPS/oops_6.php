<?php
// PHP Interfaces
interface Jphp_Interface {
    public function message();
    public function message2();
    public function message3($a,$b);
}

class Jphp_interface_class implements Jphp_Interface {
    public function message(){
        echo "Hello World<br>";
    }
    public function message2(){
        echo "Hello World-2<br>";
    }
    public function message3($a, $b){
        echo $a.$b;
    }
}

$obj = new Jphp_interface_class();
$obj->message();
$obj->message2();
$obj->message3("Hello","Tomy");
?>