<?php
class Jphp13 {
    public $name1;

    function set_name($name){
        $this->name1 = $name;
    }
    function get_name(){
        return $this->name1;
    }
}

$obj = new Jphp13();
$obj->set_name("Euphoria");
echo $obj->get_name();

?>