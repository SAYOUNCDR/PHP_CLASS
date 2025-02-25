<?php
$unitConsumed = readline();
switch (true) {
    case $unitConsumed <= 100:
        $rate = 0.10;
        $totalBillBeforeTax = $unitConsumed * $rate;
        $totalBillAfterTax = $totalBillBeforeTax + ($totalBillBeforeTax * 0.15) + 10;
        echo "Number of units consumed : " . $unitConsumed . "\n";
        echo "Rate per unit $0.10" . "\n";
        echo "Total bill before tax: " . $totalBillBeforeTax . "\n";
        echo "Total bill after tax: " . $totalBillAfterTax . "\n";
        break;
    case $unitConsumed <= 300:
        $rate = 0.15;
        $totalBillBeforeTax = $unitConsumed * $rate;
        $totalBillAfterTax = $totalBillBeforeTax + ($totalBillBeforeTax * 0.15) + 10;
        echo "Number of units consumed : " . $unitConsumed . "\n";
        echo "Rate per unit $0.15" . "\n";
        echo "Total bill before tax: " . $totalBillBeforeTax . "\n";
        echo "Total bill after tax: " . $totalBillAfterTax . "\n";
        break;
    case $unitConsumed < 500:
        $rate = 0.20;
        $totalBillBeforeTax = $unitConsumed * $rate;
        $totalBillAfterTax = $totalBillBeforeTax + ($totalBillBeforeTax * 0.15) + 10;
        echo "Number of units consumed : " . $unitConsumed . "\n";
        echo "Rate per unit $0.20" . "\n";
        echo "Total bill before tax: " . $totalBillBeforeTax . "\n";
        echo "Total bill after tax: " . $totalBillAfterTax . "\n";
        break;
    case $unitConsumed >= 500:
        $rate = 0.25;
        $totalBillBeforeTax = $unitConsumed * $rate;
        $totalBillAfterTax = $totalBillBeforeTax + ($totalBillBeforeTax * 0.15) + 10;
        echo "Number of units consumed : " . $unitConsumed . "\n";
        echo "Rate per unit $0.25" . "\n";
        echo "Total bill before tax: " . $totalBillBeforeTax . "\n";
        echo "Total bill after tax: " . $totalBillAfterTax . "\n";
        break;
    default:
        echo "Invalid input";
}


