<?php
/* -------File System-------*/
echo readfile("your_filename");

$var = readfile("your_filename");

echo $var . "<br><br>";


$file = "your_filename";
if (file_exists($file)) {
  echo readfile("your_filename");
} else {
  echo "File doest not exist" . "<br><br>";
}


$file = "your_filename";
if (file_exists($file)) {
  echo readfile("your_filename");

  copy($file, "your_new_filename");
} else {
  echo "File doest not exist" . "<br><br>";
}


$file = "your_filename";
if (file_exists($file)) {
  rename("your_new_filename", "your_filename");
} else {
  echo "File doest not exist" . "<br><br>";
}


$file = "your_filename";
if (file_exists($file)) {
  unlink("path_of_your_file_with_filename");
} else {
  echo "File doest not exist" . "<br><br>";
}

mkdir("dir_name");


if (!file_exists("dir_name")) {
  mkdir("dir_name");
} else {
  echo "File already exist" . "<br>";
}

$file = "your_filename";
echo filesize($file) . "<br>";

echo filetype($file) . "<br>";   //---- Return type of passing file
echo filetype("dir_name") . "<br>";

echo realpath($file) . "<br>"; //--- Get the full path of the file

echo "<pre>";
print_r(pathinfo($file));  //--- passing only file name
echo "</pre>";

$path =  realpath($file) . "<br>";
print_r(pathinfo($path));       //--- passing full path

print_r(pathinfo($path, PATHINFO_DIRNAME)) . "<br>"; //------- return only dirname

print_r(pathinfo($path, PATHINFO_BASENAME)) . "<br>"; //------return only basename

print_r(pathinfo($path, PATHINFO_EXTENSION)) . "<br>"; //------return only extension

print_r(pathinfo($path, PATHINFO_FILENAME)) . "<br>"; //------return only filename

//Show filename
echo basename($path) . "<br/>";

//Show filename, but cut off file extension for ".php" files
echo basename($path, ".txt");


$file = "your_filename";
$path = realpath($file);

echo dirname($path) . "<br>"; //------ Return the path of the parent directory:

echo dirname($path, 2) . "<br>";
