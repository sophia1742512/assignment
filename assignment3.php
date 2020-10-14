<?php

$name = "Ayano";

if ($name = "Ayano") {
    echo "私はAyanoです。";
} else {
    echo "Ayanoではありません。";
}

$total = 0;
echo $total;

for ($i =0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("strawberry","banana","peach","melon","apple");

foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
        echo $i;
    }
}