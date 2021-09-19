<?php
/*-------Md5 Function------- */
$str = "Hello";
$md5Binary = md5($str, TRUE); // 16 char
$md5Hex = md5($str); // 32 char
// echo $md5Hex;

/*-------sha1 Function------- */
$sha1Binary = sha1($str, TRUE); // 20 char
$sha1Hex = sha1($str); // 40 char

echo $sha1Hex;
