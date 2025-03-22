<?php
$prices = [];
for ($i = 0; $i < 5; $i++) {
    $prices[$i] = readline();
}

$sum = 0;
foreach ($prices as $price) {
    $sum += $price;
}

echo $sum;
