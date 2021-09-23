<?php
/*------String To Time Function------- */
echo (strtotime("now")) . "\n\n";

echo date("d-m-Y", strtotime("now")) . "\n\n";

echo date("d-m-Y", strtotime("3 march 2005")) . "\n\n";

echo date("d-m-Y H:m", strtotime("+5 hours")) . "\n\n";

echo date("d-m-Y H:m", strtotime("+1 week")) . "\n\n";

echo date("d-m-Y H:m", strtotime("+1 week 3 days 7 hours 5 seconds")) . "\n\n";

echo date("d-m-Y H:m", strtotime("next Monday")) . "\n\n";

echo date("d-m-Y H:m", strtotime("last Sunday")) . "\n\n";

echo date("d-m-Y H:m", strtotime("First day of last month")) . "\n\n";

/*------String F Time Function------- */
echo  strftime("%B %d %Y %X %Z") . "\n\n";

echo  strftime("%B %d %Y %X %Z", mktime(21, 30, 0, 05, 18, 2005)) . "\n\n";

echo  strftime("%d/%m/%Y %H:%M:%S", mktime(21, 30, 0, 05, 18, 2005)) . "\n\n";

echo  gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21, 30, 0, 05, 18, 2005));
