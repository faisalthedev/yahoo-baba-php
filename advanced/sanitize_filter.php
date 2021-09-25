<?php
/*-------FILTER_SANITIZE_EMAIL -- removes all illegal characters from an email address------- */
$var = "ram(.kumar)@exa//mple.com";
/* $var = "(ram.kumar@example.com)";
$var = "ram/kumar@example.com";
$var = "ram kumar@example.com";

$var = "ram.kumar@example/com";
$var = "ram.kumar@exam/ple.com"; */

echo filter_var($var, FILTER_SANITIZE_EMAIL);

$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
  echo "<br>$var is valid email.<br>";
} else {
  echo "<br>$var is not an valid email.<br>";
}

/*-------FILTER_SANITIZE_URL------- */
$var = "https://www.yahoo baba.net";
//$var = "https://www.ya hoo baba.net";

//$var = "https://www.yah^^oo//baba.net";

$var = filter_var($var, FILTER_SANITIZE_URL);

if (filter_var($var, FILTER_VALIDATE_URL)) {
  echo "<br>$var is valid URL.<br>";
} else {
  echo "<br>$var is not an valid URL.<br>";
}

/*-------FILTER_SANITIZE_NUMBER_INT------- */

$var = "45";
//$var = "45.00";
//$var = "*45";
//$var = "&45";
//$var = "45^^";
//$var = "abcd45@#$%";

//$var = "+45";
//$var = "-45";
//$var = "45+";
//$var = "-45.00";
//$var = "-45.50";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if (filter_var($var, FILTER_SANITIZE_NUMBER_INT)) {
  echo "<br>$var is valid Integer.<br>";
} else {
  echo "<br>$var is not an valid Integer.<br>";
}

/*-------FILTER_SANITIZE_NUMBER_FLOAT------- */

$var = "45.50";
//$var = "45.50abc";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT);

if (filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)) {
  echo "<br>$var is valid Float.<br>";
} else {
  echo "<br>$var is not an valid Float.<br>";
}


/*-------FILTER_FLAG_ALLOW_FRACTION - Allow fraction separator (like . )------- */
//$var = "45.50";
$var = "45.50abc";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

if (filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)) {
  echo "<br>$var is valid Float.<br>";
} else {
  echo "<br>$var is not an valid Float.<br>";
}


/*-------FILTER_FLAG_ALLOW_THOUSAND - Allow thousand separator (like , )------- */
$var = "1,50,000";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

if (filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)) {
  echo "<br>$var is valid Float.<br>";
} else {
  echo "<br>$var is not an valid Float.<br>";
}

/*-------FILTER_FLAG_ALLOW_SCIENTIFIC - Allow scientific notation (like e and E)------- */
$var = "10e";
//$var = "10E";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC);

if (filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)) {
  echo "<br>$var is valid Float.<br>";
} else {
  echo "<br>$var is not an valid Float.<br>";
}
