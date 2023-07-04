<?php
$fruits = ['a'=>'apple','b'=>'banana','f'=>'orange','p'=>'plum','d'=>'dates','m'=>'mango'];
$numbers = [1,11,2,22,5,56,3,37,4];

$random = ['apple','Apple','banana','Banana',"Pineapple"];
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);

krsort($fruits);
// print_r($fruits);

// rsort($numbers);
sort($numbers,SORT_STRING);
// print_r($numbers);

foreach ($numbers as $number) {
    // echo $number."\n";
}