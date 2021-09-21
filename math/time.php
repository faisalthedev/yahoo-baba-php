<?php
/*----Time Functions------- */
echo "Hour is " . date("h") . "\n";

echo "Hour is " . date("H") . "\n";

echo "Hour is " . date("g") . "\n";

echo "Hour is " . date("G") . "\n";

echo "Minutes is " . date("i") . "\n";

echo "Seconds is " . date("s") . "\n";

echo "Meridiem is " . date("a") . "\n";

echo "Meridiem is " . date("A") . "\n";

echo "Time is " . date("h:i:sa e") . "\n";

echo "Time & Date is " . date("d-m-Y h:i:sa") . "\n";

date_default_timezone_set("Asia/Dhaka");
echo "Time is " . date("h:i:sa e") . "\n";
