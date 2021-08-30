<?php
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "f" => "green", "d" => "purple");

// compare the value
// $newArr = array_diff($a1, $a2);

// compare the key
// $newArr = array_diff_key($a1, $a2);

// compare the key & value (key sensative)
// $newArr = array_diff_assoc($a1, $a2);

// compare the key & value by user diff func
function common($a, $b)
{
  if ($a === $b) return 0;
  return ($a > $b) ? 1 : -1;
}
// $newArr = array_diff_uassoc($a1, $a2, 'common');

// compare the key
// $newArr = array_diff_ukey($a1, $a2, 'common');

// compare just value
// $newArr = array_udiff($a1, $a2, 'common');

// compare the key
// $newArr = array_diff_ukey($a1, $a2, 'common');

// compare the key & value
$newArr = array_udiff_uassoc($a1, $a2, 'common', 'common');

print_r($newArr);
