<?php
/* -------Glob Function--------*/
echo "<pre>";
print_r(glob("*"));
echo "<pre>";

echo "<pre>";
print_r(glob("css/*"));
echo "<pre>";

echo "<pre>";
print_r(glob("*.txt"));
echo "<pre>";

echo "<pre>";
print_r(glob("*.php"));
echo "<pre>";

echo "<pre>";
print_r(glob("t*"));
echo "<pre>";

echo "<pre>";
print_r(glob("i*"));
echo "<pre>";

echo "<pre>";
print_r(glob("ins*"));
echo "<pre>";

echo "<pre>";
print_r(glob("*est*"));
echo "<pre>";

echo "<pre>";
print_r(glob("t*ml"));
echo "<pre>";

echo "<pre>";
print_r(glob("[st]*"));
echo "<pre>";

echo "<pre>";
print_r(glob("*[st]*"));
echo "<pre>";

echo "<pre>";
print_r(glob("css/s"));
echo "<pre>";

$ary = glob("*");
foreach ($ary as $filename) {
  echo "$filename size " . filesize($filename) . "<br>";
}

/* -------Real Path--------*/
echo "<pre>";
print_r(glob("*", GLOB_MARK));
echo "<pre>";

/* -------If file/folder is not found returns pattern--------*/
echo "<pre>";
print_r(glob("k*", GLOB_NOCHECK));
echo "<pre>";

/* -------Return only directories which match the pattern--------*/
echo "<pre>";
print_r(glob("*", GLOB_ONLYDIR));
echo "<pre>";

/* ------- -- Expands {a,b,c} to match 'a', 'b', or 'c'--------*/
echo "<pre>";
print_r(glob("{*.txt,*.html}", GLOB_BRACE));
echo "<pre>";


echo "<pre>";
print_r(glob("{css/*,js/*}", GLOB_BRACE));
echo "<pre>";
