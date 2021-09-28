<?php
/* -------File System---II-------*/
$file = fopen("readme.txt", 'r');

//echo fread($file, 100);

//echo fread($file, filesize("readme.txt"));

echo fgets($file) . "<br>";
echo ftell($file) . "<br>"; //------- tell the current position
echo fgets($file) . "<br>";
echo ftell($file) . "<br>";

fseek($file, "15"); //------- change the cursor position
echo "<br>" . fgets($file) . "<br>";

echo "<br><br>";
echo fpassthru($file) . "<br><br>"; //------- read from the cursor to end of the file.

rewind($file) . "<br><br>";  //-------- Rewinds a file pointer
echo fgets($file) . "<br><br>";

//Output lines until EOF is reached
echo "<ul>";
while (!feof($file)) {
  $line = fgets($file);
  echo "<li>" . $line . "</li>";
}
echo "</ul>";


echo fgetc($file);
echo fgetc($file);

echo "<pre>";
print_r(file("readme.txt"));  //--- Reads a file into an array
echo "</pre>";


$file = fopen("readme.txt", 'r+'); //------- add at the first line of the file

fwrite($file, "\nHere is new line.");

$file = fopen("readme.txt", 'w+'); //----- overwrite the whole file

$file = fopen("readme.txt", 'a+'); //------ add at the end of the file and don't overwrite any line

fwrite($file, "\n Here is new line");
fputs($file, "\n Here is new line");

//------ ftruncate
ftruncate($file, 50);
fclose($file);
 /* echo filesize("test.txt");

    $file = fopen($file, 'a+');

    ftruncate($file,100);

    echo filesize("test.txt"); */