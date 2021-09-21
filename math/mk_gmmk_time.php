<?php
/*------MK Time Function------- */
echo "Time & Date : " . date("d-m-Y h:i:sa") . "\n";

echo date("l", mktime(0, 0, 0, 10, 15, 2003)) . "\n";

echo date("d-m-Y h:i:sa", mktime(0, 0, 0, 10, 15, 2003)) . "\n";

/*------GMT Time Function------- */
echo date("d-m-Y h:i:sa", gmmktime(0, 0, 0, 10, 15, 2003));
