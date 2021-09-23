<?php
/*------Time Zone Function------- */
echo date_default_timezone_get() . "\n\n";

date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get() . "\n\n";

/*------Time Zone Open Function------- */
$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz) . "\n\n";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";


$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz) . "\n\n";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

/*------Time Zone Identifiers List Function------- */
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
