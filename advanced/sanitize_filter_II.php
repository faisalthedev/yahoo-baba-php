<?php
/*-------FILTER_SANITIZE_MAGIC_QUOTES  -- work same as addslashes() function------- */
$var = "Yahoobaba's website!";
//$var = 'Yahoobaba"s website!';
//$var = 'Yahoobaba"s \website!';

echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES)."<br>";

/*-------FILTER_SANITIZE_STRING------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING)."<br>";

/*-------FILTER_FLAG_ENCODE_AMP ------ Convert & to &amp------- */
$var = "<h1>Yahoo & Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP)."<br>";

/*-------Search (Ascii table) - for special characters------- */

//FILTER_FLAG_STRIP_HIGH --- ASCII value > 127
//FILTER_FLAG_STRIP_LOW  --- ASCII value < 32

$var = "<h1>Yahoo & BabaÈÒØ</h1>";
echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_SANITIZE_ENCODED - Encode every thing------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_FLAG_STRIP_LOW - Remove characters with ASCII value < 32------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_LOW)."<br>";

/*-------FILTER_FLAG_STRIP_HIGH - Remove characters with ASCII value > 127------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_FLAG_ENCODE_LOW - Encode characters with ASCII value < 32------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_LOW)."<br>";

/*-------FILTER_FLAG_ENCODE_HIGH - Encode characters with ASCII value > 127------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH)."<br>";

/*-------FILTER_SANITIZE_SPECIAL_CHARS -- <>& and characters with ASCII value------- */
$var = "<h1>Yahoo & Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
