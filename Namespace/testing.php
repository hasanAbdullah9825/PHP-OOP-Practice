<?php

class cat{
function greet(){
    return "meaw";
}

}


class dog extends cat {
    function greet(){
        return "wowwf";
    }
    
    }

    $cat= new cat();
    echo $cat->greet();