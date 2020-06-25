<?php
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='',$age='',$class='')
    {
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;

    }
    function __get($prop){
        return $this->$prop;
    }
    function __set($prop,$value){
        return $this->$prop=$value;
    }


}

$st=new Student('hasan',12,'5');


echo $st->name;
$st->name="kamal";
echo $st->name;





