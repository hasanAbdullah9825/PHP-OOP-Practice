<?php 

class MathCalculator{
    static $number;
    static $name;
    static function fibonachhi($n){
        self::$name="hasan";
        self::doSomething();
        self::$number=5;
        
        echo "fibonachhi series up to {$n}\n";
    }

    static function doSomething(){
        echo "doing something\n";
    }
    function factorial($n){
        self::doSomething();

        $this->doSomething();
        echo "calculating factorial of {$n}\n";
    }
}

// MathCalculator::fibonachhi(5);
 $mathc=new MathCalculator();
 $mathc->factorial(6);

//echo MathCalculator::$number;