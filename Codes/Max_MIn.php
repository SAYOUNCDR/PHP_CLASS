<?php
$temp =[];
for($i=0; $i<5; $i++){
    $temp[$i]=readline();
}

$min=$temp[0];
$max=$temp[0];

foreach($temp as $t){
    if($t<$min){
        $min=$t;
    }
    else if($t>$max){
        $max=$t;
    }
}

echo "Min: ". $min."\n";
echo "Max: ". $max;
?>