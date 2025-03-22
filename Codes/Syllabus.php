<?php
// DataTypes
// $string = "Hello";
// $integer = 100;
// $float = 10.5;
// $boolean = true;
// $array = array("Apple", "Banana", "Orange");
// $object = new stdClass(); // Creating an empty object
// $nullVar = NULL;

// var_dump($string, $integer, $float, $boolean, $array, $object, $nullVar);


// //Variable
// $name = "John";
// $age = 25;
// echo "My name is $name and I am $age years old.\n";

// //Constants
// define("SITE_NAME", "MyWebsite");
// echo SITE_NAME . "\n";

// //PHP Expressions
// $x = 10;
// $y = 5;
// $sum = $x + $y; // Expression
// echo "Sum: $sum\n";


// //PHP Operators
// // Arithmetic Operators (+, -, *, /, %)
// // Comparison Operators (==, !=, >, <, >=, <=)
// // Logical Operators (&&, ||, !)
// // Assignment Operators (=, +=, -=, *=, /=, %=)

// $a = 10;
// $b = 5;
// echo "Addition: " . ($a + $b) . "\n";

// $res = ($a > $b) ? "A is greater" : "B is greater";
// echo $res . "\n";


// //Control Statments
// //If-Elseif-Else Statement, Switch Statement
// $age = 25;
// if ($age < 18) {
//     echo "You are a minor.\n";
// } elseif ($age >= 18 && $age < 60) {
//     echo "You are an adult.\n";
// } else {
//     echo "You are a senior citizen.\n";
// }

// //Swich Case
// $day = "Monday";
// switch ($day) {
//     case "Monday":
//         echo "Today is Monday.\n";
//         break;
//     case "Tuesday":
//         echo "Today is Tuesday.\n";
//         break;
//     default:
//         echo "Invalid day.\n";
// }

// //Loops
// //For Loop, While Loop, Do-While Loop, Foreach Loop
// for ($i = 1; $i <= 5; $i++) {
//     echo "Number: $i\n";
// }

// $i = 1;
// while ($i <= 5) {
//     echo "Number: $i\n";
//     $i++;
// }

// $i = 1;
// do {
//     echo "Number: $i\n";
//     $i++;
// } while ($i <= 5);

// $fruits = array("Apple", "Banana", "Orange");
// foreach ($fruits as $fruit) {
//     echo "Fruit: $fruit\n";
// }


// //Functions
// function add($a, $b)
// {
//     return $a + $b;
// }
// //Calling a function
// $sum = add(10, 5);

// //Reference function
// function modify(&$num)
// {
//     $num += 10;
// }
// $x = 5;
// modify($x);
// echo $x; // Outputs: 15


// //Arrays
// // 1. Enumerated Arrays (Indexed Arrays)
// $fruits = array("Apple", "Banana", "Orange");
// echo $fruits[0] . "\n"; // Output: Apple
// echo $fruits[1] . "\n"; // Output: Banana

// // 2. Associative Arrays
// $person = array("name" => "John", "age" => 25);
// echo $person["name"] . "\n"; // Output: John

// // 3. Multidimensional Arrays
// $contacts = array(
//     array("name" => "John", "email" => "example1@email.com"),
//     array("name" => "Smith", "email" => "example2@email.com")
// );
// echo $contacts[0]["email"] . "\n"; // Output: example1@email.com
// echo $contacts[1]["email"] . "\n"; // Output: example2@emnail.com



// //Classes and Objects
// class Person
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function greet()
//     {
//         return "Hello, my name is " . $this->name;
//     }
// }

// $person = new Person("John", 25);
// echo $person->greet() . "\n"; // Output: Hello, my name is John


// //Variable Scope
// $x = 10; // Global variable
// function test()
// {
//     global $x;
//     echo $x;
// }
// test(); // Outputs: 10



//!--------------Task Reference Questions-----------------!
// 1.  Write a PHP script that inserts a new item in an array in any position.
$inp = [1, 2, 3, 4, 5];
$pos = 2;
$item = 10;
array_splice($inp, $pos, 0, $item); //array_splice(array, pos, numberofElemetToRemove, item)
foreach ($inp as $i) {
    echo $i . " ";
}


// 2. Write a PHP script to sort the following associative array :
$age = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
// a) ascending order sort by value
asort($age);
print_r($age);

// b) ascending order sort by Key
ksort($age);
print_r($age);

// c) descending order sorting by Value
arsort($age);
print_r($age);

// d) descending order sorting by Key
krsort($age);
print_r($age);


// 3. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 69.76  apply precision function
// List of seven lowest temperatures : 60, 62, 63, 63, 64, 
// List of seven highest temperatures : 76, 78, 79, 81, 85,
$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$avg = array_sum($temps) / count($temps);
echo "Average Temperature is : " . number_format($avg, 2) . "\n";
sort($temps);
echo "List of seven lowest temperatures : ";
for ($i = 0; $i < 7; $i++) {
    echo $temps[$i] . " ";
}
echo "\n";
echo "List of seven highest temperatures : ";
for ($i = count($temps) - 7; $i < count($temps); $i++) {
    echo $temps[$i] . " ";
}
echo "\n";


// 4. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

for ($i = 200; $i <= 250; $i += 4) {
    echo $i . " ";
}
echo "\n";

//5. Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
$inp = [1, 2, 2, 3, 4, 5, 5];
$unique = array_unique($inp);
foreach ($unique as $i) {
    echo $i . " ";
}
