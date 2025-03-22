<html>
<body>
    <h1>this is php</h1>
</body>
</html>


<?php
echo "Hello, World!", "<br>";
$a = 10.2;

## output can be browser mode or terminal mode. for line break we can use br tag for browser or \n normally;
# \n doesnt work properly in broswer and <br> doesnt work properly in terminal;

echo($a), "<br>";
var_dump($a);

## var_dump gives the datatype;

if(is_int($a)){ 
    # is_int is a function to check the integer value;
    # is_float is a fnction to check if the num is float value; 
   echo "<br>", "The number is integer";
}else{
    echo "<br>", "The number is not integer";
}

function addTwo()
{
    $a = 10;
    $b = 20;
    $c = $a + $b;
    return $c;
}
echo "<br>", addTwo();

$num1 = 11;
$num2 = 2;
echo "<br>", "The sum of num1 and num2 is: ".$num1 + $num2. "<br>";

echo "The exponent of num1 and num2 is: ".pow($num1, $num2). "<br>";

$name = readline("Enter your name: ");
echo "Hello, $name", "<br>";

$newb = "this_name";
echo ("newb: ".$newb);

$nullVar = null;
echo "<br>","Null: ". var_export($nullVar, true),"<br>";



echo "<br><hr>";

echo "<h2>3. PHP Constant</h2>";

define("SiteName" , "This.php");
echo ("<br>Constant: Site name: ".SiteName);


echo "<br><p>Constants are like variables, but their values cannot change after being set. Use <code>define()</code> to create constants.</p>";

echo "<hr><br>";

$num1num1 =  14;
$num3num3 = 252;
$resultnum1num3 = $num1num1 + $num3num3;

echo "Arithmetic expression of num1 and num3 is : $resultnum1num3";

$a = true;
$b = false;

echo "Logical AND (&&): " . ($a && $b) . "<br>";
echo "Logical OR (||): " . ($a || $b) . "<br>";
echo "Logical NOT (!): " . (!$a) . "<br>";

$x = 10;
$y = 20;

$x += $y; // $x = $x + $y
echo "Addition assignment (+=): " . $x . "<br>";

$x -= $y; // $x = $x - $y
echo "Subtraction assignment (-=): " . $x . "<br>";

$x *= $y; // $x = $x * $y
echo "Multiplication assignment (*=): " . $x . "<br>";

$x /= $y; // $x = $x / $y
echo "Division assignment (/=): " . $x . "<br>";

$x %= $y; // $x = $x % $y
echo "Modulus assignment (%=): " . $x . "<br>";


$x .= $y; // $x = $x . $y (concatenation)
echo "Concatenation assignment (.=): " . $x . "<br>";

$x &= $y; // $x = $x & $y (bitwise AND)
echo "Bitwise AND assignment (&=): " . $x . "<br>";

$x |= $y; // $x = $x | $y (bitwise OR)
echo "Bitwise OR assignment (|=): " . $x . "<br>";

$x ^= $y; // $x = $x ^ $y (bitwise XOR)
echo "Bitwise XOR assignment (^=): " . $x . "<br>";

$x <<= $y; // $x = $x << $y (left shift)
echo "Left shift assignment (<<=): " . $x . "<br>";

$x >>= $y; // $x = $x >> $y (right shift)
echo "Right shift assignment (>>=): " . $x . "<br>";

echo "<br><h1>Coercion</h1>";

$x = "10 apples";
$y = 5;
$resultxy = $x + $y;
echo "Result: " . $resultxy . "<br>";

echo "<br><h1>Operators precedence</h1>";

echo "Result3 (multiple operators): " . (10 + 5 * 2) . "<br>"; #ouput is 20

echo "<hr><br>";

echo "<h2>4. Arrays </h2>";

$fruits = array("Apple", "Banana", "Orange");
echo "Fruits: " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . "<br>";

echo "lovebabbar";
echo "<hr><br>";

echo "<h2>5. Associative Arrays </h2>";


?>
