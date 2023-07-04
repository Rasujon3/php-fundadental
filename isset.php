<?php
// variable is set or not
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.", $a . "\n";
} else {
  echo "not set";
}

// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.\n";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.", $b;
} else {
  echo "not set";
}

//// hayder vai
echo "\n";
echo "Hayder vai ====================";
echo "\n";
$name=0;

if (isset($name)) {
  echo "Name is set";
} else {
  echo "Not set";
}
echo "\n";

if (empty($name)) {
  echo "Name is empty";
} else {
  echo "Not empty";
}

echo "\n";
if (isset($name) && (is_numeric($name) || $name !="")) {
  echo "Name is set and it's not empty";
} else {
  echo "Name is either not set or it's empty";
}



?>
