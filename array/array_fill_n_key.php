<?php
/* -----------Array Fill Keys----------- */
$a = array("a", "b", "c", "d", "e");

$arrayFill = array_fill(0, 10, "Testing");

$arrayFillKey = array_fill_keys($a, 'Test');

print_r($arrayFillKey);
