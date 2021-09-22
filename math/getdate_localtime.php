<?php
$olddate = mktime(0, 0, 0, 03, 15, 2015);

$date = getdate($olddate);

echo $date['month'] . " - " . $date['year'];

/*------Get Date Function------- */
echo "<pre>";
print_r(getdate());
echo "</pre>";


echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";


/*------Get Time OF Day Function------- */
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";


$date = gettimeofday();
echo $date['sec'] . "<br><br>";


echo gettimeofday(true);

/*------Local Time Function------- */
echo "<pre>";
print_r(localtime(time(), true));
echo "</pre>";


$olddate = mktime(0, 0, 0, 03, 15, 2015);

echo "<pre>";
print_r(localtime($olddate, true));
echo "</pre>";
