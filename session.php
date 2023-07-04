<?php
// user identify
// browser e beshi use hoy
session_start();
$_SESSION["MY_DATA"] = "lorem20";

if (count($_SESSION) > 0) {
  echo "true";
} else {
  echo "false";
}
echo $_SESSION["MY_DATA"];
unset($_SESSION["MY_DATA"]);

echo $_SESSION["MY_DATA"];
