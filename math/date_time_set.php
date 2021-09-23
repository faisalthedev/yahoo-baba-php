<?php
/*------Date Time Set Function------- */
$date = date_create("2015-05-15");

date_time_set($date, 13, 20);

echo date_format($date, "d-m-Y H:i:s") . "\n\n";

date_time_set($date, 05, 20, 45);

echo date_format($date, "d-m-Y H:i:s");
