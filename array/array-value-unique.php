<?php
/* ------------Array Values------------ */
$a1 = array("a" => "red", "b" => "green", "c" => "red", "d" => "yellow");

// array value
$arr_value = array_values($a1);

print_r($arr_value);

// array unique
$arr_unique = array_unique($a1);

print_r($arr_unique);