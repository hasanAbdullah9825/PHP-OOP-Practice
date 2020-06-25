<?php
class MyClass{
    const CITY='Dhaka';
    function sayHi(){
        echo "Hi from ".self::CITY;
    }
}

$mc= new MyClass();
$mc->sayHi();
echo MyClass::CITY;