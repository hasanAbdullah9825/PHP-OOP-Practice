<?php
 namespace Animals;
//namespace collection_animals;

// use  Animals\cat2\cat;
include_once "cat.php";
include_once "cat2.php";
include_once "dog.php";

$cat =new Cat();
echo $cat->greet();

// $dog=new dog();
// echo $dog->greet();