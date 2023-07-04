<?php
//// Conditions
echo "\n";
$x = 5;
$y = 6;
$result = $x<=>$y;
if ($result == 1) {
    echo "{$x} is greater than {$y}";
}
else if ($result == 0) {
    echo "{$x} is equal to {$y}";
}
else if ($result == -1) {
    echo "{$x} is smaller than {$y}";
}

$default_lat = 23.9;
$default_lon = 90.8;

// $user_lat = 12.3;
$user_lat;
// $lat = isset($user_lat) ? $user_lat : $default_lat;
$lat = $user_lat ?? $default_lat;
// null coalesce operatior

echo $lat;