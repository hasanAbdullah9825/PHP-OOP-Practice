<?php
 class Fund{
     private $fund;
     function __construct($initialfund=0){
         $this->fund=$initialfund;

     }
     public function addFund($money){
         $this->fund+=$money;
     }
     public function deductFund($money){
         $this->fund-=$money;
     }

     public function getTotal(){
         echo "Total fund is {$this->fund}\n";
     }
 }

 $ourFund=new Fund(100);
 //$ourFund->fund=200;
 $ourFund->getTotal();
 $ourFund->addFund(10);
 $ourFund->getTotal();
 $ourFund->deductFund(10);


