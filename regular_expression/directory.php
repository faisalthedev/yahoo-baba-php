<?php
/* -------getcwd()-----Returns the current working directory--------*/
echo getcwd() . "<br>";

/* -------chdir()-----Changes the current directory--------*/
chdir("css");
echo getcwd() . "<br>";

/* -------scandir()-----Returns an array of files and directories of a specified directory--------*/
$dir = ".";

$a = scandir($dir);

echo "<pre>";
print_r($a);
echo "</pre>";


$dir = "..";

$b = scandir($dir);

echo "<pre>";
print_r($b);
echo "</pre>";

$dir = "../";

$c = scandir($dir);

echo "<pre>";
print_r($c);
echo "</pre>";


$dir = "../";  //------- change order -- descending

$c = scandir($dir, 1);

echo "<pre>";
print_r($c);
echo "</pre>";
