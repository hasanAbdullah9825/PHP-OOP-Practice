
<?php
interface BaseAnimal{
    function isAlive();
    function canEat();
    function breed();
   
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat(){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

abstract class abstractHuman implements BaseHuman{
    abstract function run();
    function eat(){
        echo "I am eating";
    }
}


class Human extends abstractHuman{
    function isAlive(){}
    function canEat(){}
    function breed(){}
    function canTalk(){}
    function run(){}
}

// $h1=new Human();
// echo $h1 instanceof Animal;
// echo $h1 instanceof BaseAnimal;