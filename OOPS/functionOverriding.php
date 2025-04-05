<?php
class ParentClass{
    // final will stop overrifing of greet function "public final function greet();"
    public function greet(){
        echo "Hello from parent Class \n";
    }
}

class ChildClass extends ParentClass{
    public function greet()
    {
        echo "Hello from the Child class";
    }
}

$obj = new ChildClass();
$obj->greet(); //Hello fromthe child class

?>