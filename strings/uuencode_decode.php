<?php
$str = "Hello World";
$encodeString = convert_uuencode($str);
echo $encodeString . "\n";

echo convert_uudecode($encodeString);
