<?php
class DistrictCollection implements countable{
    private $districts;
    function __construct(){
        $this->districts=array();
    }

    function add($district){
        array_push($this->districts,$district);
    }
    function count(){
        return count($this->districts);
    }

    
}

$districts=new DistrictCollection();
$districts->add('sylhet');
$districts->add('Razshahi');
$districts->add('Barishal');


echo count($districts);