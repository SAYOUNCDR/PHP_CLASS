<?php
interface A{
    public function methodA();
}
interface B{
    public function methodB();
}
class MyClass implements A, B{
    public function methodA()
    {
        return "Method A from interface A \n";
    }
    public function methodB()
    {
        return "Method B from interface B \n";
    }
}
$object = new MyClass();
echo $object -> methodA();
echo $object -> methodB();
// Output:  Method A from interface A
//          Method B from interface B
?>