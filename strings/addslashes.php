<?php
$str = "I am 'Faisal' Ahammad";
echo "{$str} \n";

// $newStr = addslashes($str) . "\n";
// $newStr = addcslashes($str, "a") . "\n";
// $newStr = addcslashes($str, "A..Z") . "\n";
$newStr = addcslashes($str, "a..z") . "\n";

// echo stripslashes($newStr);
echo stripslashes($newStr);

// echo $newStr;
