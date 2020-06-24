<?php
class OurClass{
 final function doSomething(){
    echo "doing something";
}
}
class MyClass extends OurClass{
    function doSomething(){//here you will get an error
        echo "doing something";
    }
}