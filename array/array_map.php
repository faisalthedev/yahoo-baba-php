<?php
$a = [1, 2, 3, 4, 5];
$b = ['lemon', 'orange', 'banana', 'apple', 'guava'];

$arrayMap = array_map('arrayMapFun', $a, $b);
function arrayMapFun($n, $m)
{
  // return "$n for $m";
  return [$n => $m];
}

print_r($arrayMap);
