<?php
/* -------Array Walk-------*/
$veggie = array("1" => "Carrot", "2" => "Tomatoes");

$fruits = array(
  $veggie,
  "a" => "Lemon",
  "b" => "Orange",
  "c" => "Banana",
  "d" => "Apple"
);

// array_walk($fruits, 'arrayWalk');
array_walk_recursive($fruits, 'arrayWalk', '=>');

function arrayWalk($value, $key, $param)
{
  echo "{$key} {$param} {$value} \n";
}
