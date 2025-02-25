<?php
// echo "<h1>PHP CONTROL STRUCTURES</h1>";

// echo "<h2>1. PHP IF ELSE</h2>";
// $age = 20;
// if ($age >= 18) {
//     echo "You are eligible to vote.<br>";
// } else {
//     echo "You are not eligible to vote.<br>";
// }

// echo "<h2>If-else conctrol structure<br>";

// $marks = 85;
// if ($marks >= 90) {
//     echo "A grade.<br>";
// } elseif ($marks >= 80) {
//     echo "B grade.<br>";
// } elseif ($marks >= 70) {
//     echo "C grade.<br>";
// } elseif ($marks >= 60) {
//     echo "D grade.<br>";
// } else {
//     echo "Fail.<br>";
// }



// echo "<h2>2. PHP SWITCH CASE</h2>";
// $day = "Monday";
// switch ($day) {
//     case "Monday":
//         echo "Today is Monday.<br>";
//         break;
//     case "Tuesday":
//         echo "Today is Tuesday.<br>";
//         break;
//     case "Wednesday":
//         echo "Today is Wednesday.<br>";
//         break;
//     case "Thursday":
//         echo "Today is Thursday.<br>";
//         break;
//     case "Friday":
//         echo "Today is Friday.<br>";
//         break;
//     case "Saturday":
//         echo "Today is Saturday.<br>";
//         break;
//     case "Sunday":
//         echo "Today is Sunday.<br>";
//         break;
//     default:
//         echo "Invalid day.<br>";
// }

// echo "<h2>3. PHP WHILE LOOP</h2><br>";
// $counter = 1;
// while ($counter <= 10) {
//     echo "The number is: $counter<br>";
//     $counter++;
// }

// echo "<h2>4. PHP DO WHILE LOOP</h2><br>";
// $counter = 1;
// do {
//     echo "The number is: $counter<br>";
//     $counter++;
// } while ($counter <= 10);

// echo "<h2>5. PHP FOR LOOP</h2><br>";
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "The number is: $counter<br>";
// }
// echo "<h2>6. PHP FOREACH LOOP</h2><br>";
// $fruits = array("Apple", "Banana", "Orange");
// foreach ($fruits as $fruit) {
//     echo "Fruit: $fruit<br>";
// }

// echo "<h2>7. PHP Ternary Operator</h2><br>";
// $score = 80;
// echo ($score >= 60) ? "You passed the exam.<br>" : "You failed the exam.<br>";


// echo "<h2>Looping through associative array</h2><br>";
// $person = array("name" => "John", "age" => 30, "city" => "New York");
// foreach ($person as $key => $value) {
//     echo "$key: $value<br>";
// }

// echo "<h2>PHP Functions</h2><br>";


// $letter = "blank";
// $letters = range('a', 'z');
// for($i = 0; $i < strlen($letter); $i++) {
//     if(in_array($letter[$i], $letters)) {
//         echo $letter[$i];
//     }
// }
// $result = ["this", "dot", "com"];
// range($result[0], $result[2]);
// print_r($result);

// if(is_numeric(12.3)){
//     echo "Yes";
// }
// else{
//     echo "No";
// }

// $rand_num = rand(1, 100);
// echo $rand_num ."\n";


// echo tan(30);

// echo date("d-m-y");
// echo time();


$age= readline();
$marks =readline();

echo $age;
echo $marks;





