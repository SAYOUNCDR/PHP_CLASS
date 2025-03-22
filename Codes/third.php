<?php
// $a=10;
// echo $a; //output is 10


// $a=10;
// $b=$a;
// echo $b; //output 10
// $b+=10;
// echo $b;

// function addFive(&$num) //CALL BY REFERENCE VALUE CHANGE
// {
//     $num += 5;
// }

// $value = 10;
// addFive($value); //CALL BY VALUE NO CHANGE (REMOVE & FROM FUNCTION ARGUMENTS)
// echo $value;


// function &getValue(){
//     static $val =100;
//     return $val;  
// }

// $a=&getValue(); //$a is now reference to $val
// $a+=50; //This modifies $val directly
// echo getValue(); //output: 150


// local block -> global 
// function localToGlobal(){
//     global $a;
//     $a = 10;
// }

// localToGlobal(); // Call the function to initialize $a
// echo $a; // Now $a is defined and has a value


// $var = 10;
// function printGlobal()
// {
    // echo $var; // will throw error undefined 
//     global $var;
//     echo $var; //Now will not throw error
// }
// printGlobal();


function myFunction(){
    $globalParts="I'm global";
    echo $globalParts;
}

myFunction();