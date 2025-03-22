<?php
//! 4. Dont use php control statements and print numbers btw 200-250 divisible by 4



// $nums = [1,2,3,4,5];
// $nums[5]=9;
// print_r($nums);




//! 3. 

// $temps=array();
// $size =readline();
// $sum=0;
// for($i=0; $i<$size; $i++){
//     $elements =readline();
//     $temps[$i]=$elements;
//     $sum+=$elements;
// }

// sort($temps);
// echo $sum/$size;
// for($i=0;$i<7;$i++){
//     echo $elements[$i];
// }



//! 5. Remove dplicate values
// $dupArray = array(1, 3, 23, 5, 6, 1, 23, 3);
// print_r(array_unique($dupArray));



//! Strings
// 1. write a script to get last three characters of a string
// $testString = "rayy@gmail.com";
// echo substr($testString, -3);


// 2. Write a script to print letters from a - z
// for ($char = 'a'; $char <= 'z'; $char++) {
//     echo $char . " ";
// }

// 3. Split string input => 082307 output => 08:23:07
// $input = "082307";
// $output = substr($input, 0, 2) . ":" . substr($input, 2, 2) . ":" . substr($input, 4, 2);
// echo $output;



//! Functions

// 1. Write a function to calculate the factorial of a number














// 2. Prime number code

function checkPrime(){
    $num = readline();
    if ($num <= 1) {
        return false;
    }
    for($i=2; $i<=sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}

if(checkPrime()){
    echo "Prime";
}
else{
    echo "Not prime";
}

// 3. String is palindrome or Not


$palindrome = "121";

