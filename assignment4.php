<?php
//課題1
function sum($x) {
    $result = 0;
    $result = $x *2;
    return $result;
}

echo sum(5);
echo "\n";

//課題２
function f($a, $b){
    $result = 0;
    $result = $a + $b;
    return $result;
}

echo f(2, 7);
echo "\n";

//課題３
$arr = array(1,3,5,7,9);

function g($arr){
    $result = 1;
    foreach($arr as $t) {
        $result *= $t;
    }
    return $result;
}

echo g($arr);
echo "\n";

//課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
           $max_number = $a;
        }
    }
    return $max_number;
}

$arr = array(2,4,6,8,10);
echo max_array($arr);
echo "\n";

//課題５
//strip_tags($testは取り除いてpは残したい)
$test = '<p>課題５<p>';
echo strip_tags($test,'<p>');
echo "\n";

//array_push
$food = array("らーめん","うどん");
array_push($food, "そうめん", "つけめん");
print_r($food);
echo "\n";

//array_merge
$array1 = array("red","green");
$array2 = array("blue", "white");
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

//time
$nextweek = time() + (7 * 24 * 60 * 60);
echo 'NOW: ' . date('Y-m-d') . "\n";
echo 'NEXT WEEK: ' . date('Y-m-d', $nextweek) . "\n";
//mktime
echo date('M-d-Y', mktime(0, 0, 0, 1, 1, 99));
echo "\n";

//date
echo date('l jS \of F Y h:i:s A');
echo "\n";
