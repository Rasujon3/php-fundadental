<?php

$foods = [
  "vegetables" => "brinjal, brocolli,carrot,capsicam",
  "fruits" => "orange,banana, apple",
  "drinks" => "water,milk",
];

// echo count($foods);
$n = count($foods);
// echo $foods["drinks"];

foreach ($foods as $key => $value) {
  //   echo $key . "=" . $value . "\n";
}

$keys = array_keys($foods);
// $keys = array_values($foods);
// print_r($keys);
for ($i = 0; $i < count($keys); $i++) {
  $key = $keys[$i];
  //   echo $foods[$key] . "\n";
}

$foods["drinks"] .= ", orange juice";

$values = array_keys($foods);
// $keys = array_values($foods);
// print_r($keys);
for ($i = 0; $i < count($values); $i++) {
  $value = $values[$i];
  echo $foods[$value] . "\n";
}
