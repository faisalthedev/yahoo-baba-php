<?php
/*------- Preg Replace And Split Function------- */
$string = "PHP is the web scripting language of choice.";

$pattern = "/PHP/i";

$replacement = "JavaScript";

echo preg_replace($pattern, $replacement, $string) . "<br><br>";

/*-------------- */
$string = "<h1>PHP is the web scripting language of choice.</h1>";

$pattern = "/<.+?>/i";

$replacement = "JavaScript";

echo preg_replace($pattern, $replacement, $string) . "<br><br>";

/*-------------- */
$string = 'April 15, 2020';

$pattern = "/(\w+) (\d+), (\d+)/i";

$replacement = "$1 25, $3";

echo preg_replace($pattern, $replacement, $string) . "<br><br>";

/*-------------- */
$string = '{startDate} = 1999-5-10';

$patterns = array(
  '/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
  '/^\s*{(\w+)}\s*=/'
);

$replace = array('\3/\4/\1\2', '$\1 =');

echo preg_replace($pattern, $replacement, $string) . "<br><br>";

/*------- Preg Quote------- */
echo preg_quote("$5.99", "/") . "<br><br>";

echo preg_quote("http://", "/") . "<br><br>";

$keywords = "$40 for a g3/400";
echo preg_quote($keywords, "/") . "<br><br>";

/*------- Preg split------- */
$string = "PHP is the web scripting language of choice.";

$split = preg_split("/[\s,]+/", $string);

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = "PHP is the web scripting language of choice.";

$split = preg_split("/[\s,]+/", $string, 3); //--- using limit 3rd parameter

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = "PHP is the web scripting language of choice.";

$split = preg_split("/(web|of)/", $string);

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = "https://www.yahoobaba.net/folder/file.php";

$split = preg_split("/\//", $string);

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = "https://www.yahoobaba.net/folder/file.php";

$split = preg_split("/\//", $string, -1, PREG_SPLIT_NO_EMPTY);

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = "https://www.yahoobaba.net/folder/file.php";

$split = preg_split("/\/\//", $string);

echo "<pre>";
print_r($split);
echo "</pre>";

/*-------------- */
$string = 'php hypertext language programming';
$chars = preg_split('/ /', $string, -1, PREG_SPLIT_OFFSET_CAPTURE);
echo "<pre>";
print_r($chars);
echo "</pre>";
