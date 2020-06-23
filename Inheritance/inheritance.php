<?php
class Animal{

    protected $name;
    public function __construct($name){
        $this->name=$name;

    }
    public function eat(){
            echo " {$this->name} is Eating";
    }

    public function run(){
            echo "{$this->name} is running\n";
    }
    public function sleep(){
            echo "{$this->name} is sleeping\n";
    }
    public function greet(){

    }

    protected function addTitle($title){
        $this->name=$title." " .$this->name;

    }
    

}

class Human extends animal{
    public function greet(){
        $this->addTitle("Mr.");
          echo "$this->name says hi\n";
    }
    public function name(){
        echo "$this->name\n";
    } 
}

class cat extends Animal{
    public function greet(){
        echo "$this->name says mew\n";
    }
}


class dog extends Animal{
    public function greet(){
        echo "$this->name says vawww\n";
    }
}


 $rasel =new Human('Hasan');
 $rasel->greet();
 $rasel->name();

 $cat=new cat('Tom');
 $cat->greet();
 $cat->sleep();                                                                                                                                                                                                                                                                                                                                                                                                

 $dog=new dog('puppy');
 $dog->greet();

 $cat->sleep();

