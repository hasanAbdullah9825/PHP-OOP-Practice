<?php
class DistrictCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts=array();
    }

    function add($district){
        array_push($this->districts,$district);
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts=new DistrictCollection();
$districts->add('sylhet');
$districts->add('Razshahi');
$districts->add('Barishal');


foreach($districts as $district){
    echo $district."\n" ;
}