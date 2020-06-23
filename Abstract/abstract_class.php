<?php 
abstract class OurClass{
    function sayHi(){
        echo "Hi\n";
    }

    abstract function eat($name);
}

class MyClass extends OurClass{
    function eat($name){
       echo "I am eating $name";
    }

}

$mc=new MyClass();
$mc->eat('fish');



