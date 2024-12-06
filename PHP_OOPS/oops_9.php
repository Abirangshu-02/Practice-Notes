<?php
class Jphp_Class_3 {
    static $var=10;
    public static function message(){
        echo "Hello World";
    }
    public static function message1(){
        self::message();
        self::$var;
    }
}

// class Jphp_Class_4 {
//     public function __construct() {
//         Jphp_Class_3::message();
//     }
// }

// $obj =  new Jphp_Class_3();
// $obj->message();

// $obj = new Jphp_Class_4();
Jphp_Class_3::message1();

?>