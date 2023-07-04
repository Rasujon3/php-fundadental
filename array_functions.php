<?php
$colors=["red","green","blue"];
array_pop($colors);
print_r($colors);

$color=["red","green"];
array_push($color,"blue","yellow");
print_r($color);

$a1=["red","green"];
$a2=["blue","yellow"];
print_r(array_replace($a1,$a2));

$a=["a"=>"Volvo","b"=>"BMW","c"=>"Toyota"];
print_r(array_reverse($a));

$a=["a"=>"red","b"=>"green","c"=>"blue"];
echo array_shift($a);
print_r ($a);

$a=["red","green","blue","yellow","brown"];
print_r(array_slice($a,2));

$arr = ['Ruhul','Amin','Sujon'];
echo implode(" ",$arr);

$string = "Ruhul Amin Sujon";
print_r(explode(" ",$srting));