<?php
// check specific value in array
$people = ["Peter", "Joe", "Glenn", "Cleveland", 23];

if (in_array("23", $people, true)) {
  echo "Match found \n";
} else {
  echo "Match not found \n";
}
if (in_array("Glenn", $people, true)) {
  echo "Match found \n";
} else {
  echo "Match not found \n";
}

if (in_array(23, $people, true)) {
  echo "Match found \n";
} else {
  echo "Match not found \n";
}
?>
