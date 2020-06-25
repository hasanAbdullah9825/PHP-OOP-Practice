<?php


class A{
    private static $name;
    static function sayHi(){
        echo "Hi from A\n";
        self::$name="hello";
        echo self::$name;
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi from B\n";
         parent::sayHi();
    }
}

B::sayHi();
