<?php
// $subscribers = [];
// for ($i = 0; $i < 5; $i++) {
//     $subscribers[] = readline();
// }

// foreach($subscribers as $subs){
//     echo $subs ."\n";
// }


//!----- Merge Question ------------------
// $a = [1, 2, 3, 4];
// $b = [5, 6, 7, 8];
// $c = array_merge($a, $b);

// foreach ($c as $m) {
//     echo $m . " ";
// }


//!------ Count --------------------------
// $sold = ["Laptop", "Mobile", "Mobile", "Laptop", "Laptop"];
// $cnt = 0;
// foreach ($sold as $s) {
//     if ($s == "Laptop") {
//         $cnt++;
//     }
// }
// echo $cnt;

//!--------Seprate------------------------

// $participants = ["John" => "Male", "Sarah" => "Female", "Mike" => "Male", "Emma" => "Female"];
// $gen = [
//     "Male" => [],
//     "Female" => []
// ];

// foreach ($participants as $name => $gender) {
//     if ($gender == "Male") {
//         $gen["Male"][] = $name;
//     } else if ($gender === "Female") {
//         $gen["Female"][] = $name;
//     }
// }

// foreach ($gen as $gender => $names) {
//     echo $gender . ":\n";
//     foreach ($names as $name) {
//         echo " - " . $name . "\n";
//     }
// }

//! Reverse 
// $recentChats = ["Hello", "How are you?", "I'm fine", "What about you?", "I'm good too"];
// $reversedChats = [];
// for ($i = count($recentChats) - 1; $i >= 0; $i--) {
//     $reversedChats[] = $recentChats[$i];
// }

// foreach ($reversedChats as $chat) {
//     echo $chat . "\n";
// }


//! Check if a Database table Structure is associative or indexed
function isAssociativeArray($arr) {
    if (array() === $arr) return false;
    return array_keys($arr) !== range(0, count($arr) - 1);
}

$arr1 = ["a" => 1, "b" => 2, "c" => 3];
$arr2 = [1, 2, 3, 4, 5];

echo "arr1 is " . (isAssociativeArray($arr1) ? "associative" : "indexed") . "\n";
echo "arr2 is " . (isAssociativeArray($arr2) ? "associative" : "indexed") . "\n";
