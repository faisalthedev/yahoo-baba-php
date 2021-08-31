<?php
/*--------Array Flip---------*/
$a = array(
  "Bill" => 10,
  "Joe" => 20,
  "Peter" => 30
);

// before flip
print_r($a);

$arrayFlip = array_flip($a);

// after flip
// print_r($arrayFlip);

// Change case
$arrayKeyChange = array_change_key_case($a); // lowercase
$arrayKeyChange = array_change_key_case($a, CASE_UPPER); // uppercase

print_r($arrayKeyChange);
