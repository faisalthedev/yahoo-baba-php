<?php
/* -------Array Reduce-------*/
function myFunction($n, $m)
{
  return $n . "-" . $m;
}

$a = ['orange', 'banana', 'apple'];

$newArray = array_reduce($a, 'myFunction', 'lemon');

print_r($newArray);
