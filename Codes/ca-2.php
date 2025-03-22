<?php

function calculateTotalAmount($arr) {
    $totalAmount = 0;
    foreach ($arr as &$item) {
        $item['Quantity'] = 10;
        $totalAmount += $item['Price'] * $item['Quantity'];
    }
    return $totalAmount;
}



$arr = array(
    1 => array("name" => "Laptop", "Quantity" => 2, "Price" => 50000),
    2 => array("name" => "Mobile", "Quantity" => 5, "Price" => 200),
    3 => array("name" => "Keyboard", "Quantity" => 3, "Price" => 12000)
);
$totalAmount = calculateTotalAmount($arr);
echo "Total Amount: " . $totalAmount;
?>