<?php
$foods = [
  "vegetables" => explode(", ", "brinjal, brocolli, carrot, capsicam"),
  "fruits" => explode(", ", "orange, banana, apple"),
  "drinks" => explode(", ", "water, milk"),
];

print_r($foods);
array_push($foods["drinks"], "orange juice");
print_r($foods);

echo $foods["vegetables"][3];

$simple = [
  "test" => [
    "test_again" => ["a", "b", "c", "d"],
  ],
];

print_r($simple["test"]["test_again"][2]);

$simple2 = [
  [1, 2, 3, 4],
  [11, 22, 33, 44],
  [111, 222, 333, 444],
  [1111, 2222, 3333, [5, 6, 7]],
];
print_r($simple2[3][3][1]);
