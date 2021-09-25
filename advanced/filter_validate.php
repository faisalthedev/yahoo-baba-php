<?php
/*-------FILTER_VALIDATE_INT------- */

$var = 99;
//$var = 9.9;
//$var = "99";
//$var = true;
//$var = false;
//$var = 0;

echo filter_var($var, FILTER_VALIDATE_INT) . "<br>";

var_dump(filter_var($var, FILTER_VALIDATE_INT));

if (filter_var($var, FILTER_VALIDATE_INT)) {
  echo "<br> $var is Integer.";
} else {
  echo "<br> $var is not an Integer.";
}


//Problem With 0 -->
if (filter_var($var, FILTER_VALIDATE_INT || filter_var($var, FILTER_VALIDATE_INT) == 0)) {
  echo "<br> $var is Integer.<br>";
} else {
  echo "<br> $var is not an Integer.<br>";
}

/*-------OPTIONS--FILTER_VALIDATE_INT------- */

$var1 = 50;

var_dump(filter_var($var1, FILTER_VALIDATE_INT));

if (filter_var($var1, FILTER_VALIDATE_INT, array("options" => array("min_range" => 20, "max_range" => 30)))) {
  echo "<br> $var1 is Integer.<br>";
} else {
  echo "<br> $var1 is not an Integer.<br>";
}

/*-------FILTER_VALIDATE_FLOAT------- */

//$var2 = 55;
$var2 = 25.36;
$var2 = 35.36;

$var2 = "25.36";
$var2 = "wow";
$var2 = true;  //---- not work as INT validate

var_dump(filter_var($var2, FILTER_VALIDATE_FLOAT));

if (filter_var($var2, FILTER_VALIDATE_FLOAT)) {
  echo "<br> $var2 is FLOAT.<br>";
} else {
  echo "<br> $var2 is not an FLOAT.<br>";
}

/*-------7.4.0	Added min_range and max_range options for FILTER_VALIDATE_FLOAT.------- */

$var3 = 22;
//$var3 = 22.25;

var_dump(filter_var($var3, FILTER_VALIDATE_FLOAT));
$options = array(
  "options" => array(
    "min_range" => 20,
    "max_range" => 30
  )
);
if (filter_var($var3, FILTER_VALIDATE_FLOAT, $options)) {
  echo "<br> $var3 is FLOAT.<br>";
} else {
  echo "<br> $var3 is not an FLOAT.<br>";
}

/*-------FILTER_VALIDATE_BOOLEAN------- */


//$var4 = false;
$var4 = true; //--- "on" / "yes" / 1 / "1"

$var4 = 11;
$var4 = "onn";

//var = false; //--- "off" / "no" / 0 / "0"

$var4 = "34";

var_dump(filter_var($var4, FILTER_VALIDATE_BOOLEAN));

if (filter_var($var4, FILTER_VALIDATE_BOOLEAN)) {
  echo "<br> $var4 is Boolean.<br>";
} else {
  echo "<br> $var4 is not an  Boolean.<br>";
}

/*-------Flag - FILTER_NULL_ON_FAILURE -- if not boolean then NULL return------- */

$var5 = "wow";

var_dump(filter_var($var5, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));

if (filter_var($var5, FILTER_VALIDATE_BOOLEAN)) {
  echo "<br> $var5 is Boolean.<br>";
} else {
  echo "<br> $var5 is not an  Boolean.<br>";
}

/*-------FILTER_VALIDATE_EMAIL------- */

//$var6 = "hello";
$var6 = "hello@yahoobaba.net";
$var6 = "hel lo@yahoobaba.net";
$var6 = "hello@yahoobabanet";

if (filter_var($var6, FILTER_VALIDATE_EMAIL)) {
  echo "$var6 is valid Email.<br>";
} else {
  echo "$var6 is not an valid Email.<br>";
}

/*-------FILTER_VALIDATE_URL------- */

//$var7 = "yahoobaba";
$var7 = "www.yahoobaba.net";
$var7 = "https://www.yahoobaba.net";
$var7 = "https://www.yahoo baba.net";
$var7 = "https://www.yahooba^^ba.net";

$var7 = "https://www.yahoobaba.net/test/page.php";

if (filter_var($var7, FILTER_VALIDATE_URL)) {
  echo "$var7 is valid URL.<br>";
} else {
  echo "$var7 is not an valid URL.<br>";
}

/*-------Flags :FILTER_FLAG_PATH_REQUIRED--- URL must have a path after the domain name (like www.example.com/example1/)------- */


$var8 = "https://www.yahoobaba.net/test/page.php";


if (filter_var($var8, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
  echo "$var8 is valid URL.<br>";
} else {
  echo "$var8 is not an valid URL.<br>";
}

/*-------Flags :FILTER_FLAG_QUERY_REQUIRED---- URL must have a query string (like "example.php?name=Peter&age=37")------- */


$var9 = "https://www.yahoobaba.net/test.php?a=1&b=2";

if (filter_var($var9, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
  echo "$var9 is valid URL.<br>";
} else {
  echo "$var9 is not an valid URL.<br>";
}

/*-------FILTER_VALIDATE_IP --  Internet Protocol address------- */

$var10 = "192.168.1.1";
//$var10 = "192.168.1.0";
//$var10 = "192.168.1";
//$var10 = "192.168.1.800";
//$var10 = "192.168.1.100";

//not telling  IPv4 or IPv6 advance IP

if (filter_var($var10, FILTER_VALIDATE_IP)) {
  echo "$var10 is valid IP.<br>";
} else {
  echo "$var10 is not an valid IP.<br>";
}

/*-------FILTER_VALIDATE_MAC  -- media access control address -- unique address of networking devices------- */

$var11 = "FA-F9-DD-B2-5E-0D";
//$var11 = "FA-F9-DD-B2-5E";

if (filter_var($var11, FILTER_VALIDATE_MAC)) {
  echo "$var11 is valid MAC.<br>";
} else {
  echo "$var11 is not an valid MAC.<br>";
}
