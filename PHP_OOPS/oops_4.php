<?php
// class constants
// :: --> schope resolution operator
class MyClass1 {
    const var = 600;
    static $var1 = 100;
    static function message(){
        echo "From Euphoria";
    }
}
// $obj = new MyClass1();
// MyClass1::var=100;
MyClass1::message();
echo MyClass1::$var1;
?>