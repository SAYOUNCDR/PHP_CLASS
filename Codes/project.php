<?php
// Grade calculator 1. PHP expressions 2. Operators 3. Control statement
echo "Enter your marks: ";
$marks = readline();

if ($marks >= 90 && $marks <= 100) {
    echo "Grade O";
} elseif ($marks >= 80 && $marks < 90) {
    echo "Grade A+";
} elseif ($marks >= 70 && $marks < 80) {
    echo "Grade A";
} elseif ($marks >= 60 && $marks < 70) {
    echo "Grade B+";
} elseif ($marks >= 50 && $marks < 60) {
    echo "Grade B";
} elseif ($marks >= 40 && $marks < 50) {
    echo "Grade C";
} elseif ($marks < 40) {
    echo "Fail";
} else {
    echo "Invalid marks entered.";
}

?>
