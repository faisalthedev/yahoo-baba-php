<?php

$dir = "./yahoo-baba-php";
if (is_dir($dir)) {
  if ($d = opendir($dir)) {
    while ($file = readdir($d)) {
      echo "Filename: {$file} \n";
    }
    closedir($d);
  }
}
