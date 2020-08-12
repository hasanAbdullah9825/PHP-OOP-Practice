<?php
class student{

    function __construct($name,$age){
        $this->name=$name;
        if($age<4){
            throw new Exception('Invalaid age');
        }
        $this->age=$age;

    }
}

try{
    $st= new student('hasan',10);
    
}
catch(Exception $e){
    echo $e;
}