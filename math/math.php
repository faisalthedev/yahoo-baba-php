<?php
/*-----Random Number Functions------- */
echo (rand() . "<br>");
echo (rand() . "<br>");
echo (rand(0, 10) . "<br>");
echo (rand(10, 20) . "<br>");

/*-----mt_rand() -- Mersenne Twister algorithm------- */
echo (mt_rand() . "<br>");

echo (mt_rand(10, 20) . "<br>");

/*-----lcg_value() --- return float value------- */
echo (lcg_value() . "<br>");
