<?php
/*------Date Create Function------- */
$date = date_create("2023-03-15 22:25:00", timezone_open("Asia/Kolkata"));


/*------Date Format Function------- */
echo date_format($date, "l") . "\n";

echo date_format($date, "d/m/Y H:i:s") . "\n";
