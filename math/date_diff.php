<?php
/*------Checkdate Function------- */
echo checkdate(2, 15, 2014) . "<br><br>";
echo checkdate(2, 29, 2014) . "<br><br>";
echo checkdate(2, 29, 2004) . "<br><br>";
echo checkdate(2, 15, 2024) . "<br><br>";

/*------Date Difference Function------- */
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
$diff = date_diff($date1, $date2);

echo "<pre>";
print_r($diff);
echo "</pre>";
// echo $diff->days . "days";

/*------Date Difference Function ----II--Example------- */
$date1 = date_create("2013-12-15");

$date2 = date_create("2013-03-12");

$diff = date_diff($date1, $date2);

echo $diff->format("%R%a %m days");

echo "<pre>";
print_r($diff);
echo "</pre>";
