<?php
$fruits = ['apple','banana','orange','plum','dates','mango'];
$random = ['a'=>12,'b'=>45,'c'=>34,'d'=>22,'e'=>77,'f'=>31,12=>78,'g'=>87];

$newFruits = ['jackfruits','tamaring','pineapple'];
$someFruits = array_splice($fruits,-5,2,$newFruits);

// print_r($someFruits);
// print_r($fruits);

// // array add
$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3,null, true);

$newFruits = array_merge($newFruits1,$newFruits2);
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

$newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);

$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array("j"=>45,"k"=>12);

// $randomData = array_splice($random,2,2,array("j"=>45,"k"=>12));
$randomDataCorrectWay = $r1+$r2+$r3;

print_r($randomDataCorrectWay);
// print_r($randomData);
// print_r($random);