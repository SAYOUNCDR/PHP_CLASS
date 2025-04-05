<?php
interface Animal {
    public function makeSound();
}
class Dog implements Animal{
    public function makeSound()
    {
        return "Bhaw Bhaw \n";
    }
}

class Cat implements Animal{
    public function makeSound()
    {
        return "Meow Meow \n";
    }
}
$dog = new Dog();
echo $dog -> makeSound();

$cat = new Cat();
echo $cat -> makeSound();