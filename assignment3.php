<?php

$name = "Ayano";
//$name = "Ayano"となっていた部分を修正(異なる名前をいれると「あなたの名前ではありません」表示が出るように。)
if ($name == "Ayano") {
    echo "私はAyanoです。";
} else {
    echo "あなたの名前ではありません。";
}
//($i = 0; $i <= 10000; $i++)となっていた部分を修正
//$total = 0; echo $totalと記述していた部分を一部削除
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("strawberry","banana","peach","melon","apple");
//forereach($fruits as $fruits)としていた部分を修正
//echo "要素は" . $fruits; としていた部分を修正
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
//echo "\n"を追加し改行して結果を表示
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}