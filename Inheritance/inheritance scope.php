<?php
class ParentClass{

    protected $name;
     
    function __construct($name){
        $this->name=$name;
        $this->sayHi();

    }

    function sayHi(){
        echo "say Hi from  $this->name";
    }

}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "\nHello";
    }
}

$object = new ChildClass("ABCD");

