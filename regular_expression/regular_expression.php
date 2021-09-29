<?php
/*-------Forward slash------- */
$string = "PHP is the web scripting language of choice.";

$exp = preg_match("/PHP/", $string);

if ($exp) {
  echo "A match was found." . "<br>";
} else {
  echo "A match was not found." . "<br>";
}

/*-------Case Incensitive------- */
$string = "PHP is the web scripting language of choice.";

$exp = preg_match("/php/i", $string);

if ($exp) {
  echo "A match was found." . "<br>";
} else {
  echo "A match was not found." . "<br>";
}

/*-------Array Search------- */
$string = "PHP is the web scripting php language of choice.";

$exp = preg_match_all("/php/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Multiple Array Search------- */
$exp = preg_match_all("/web|php/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Only For One Value------- */
echo $array[0][0] . "<br>";
echo $array[0][1];

$exp = preg_match_all("/w|o|t/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Search Even Numbers------- */
$string = "PHP is the web scripting language of 522 choice. 825";
$exp = preg_match("/522/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Character Set------- */
$exp = preg_match_all("/[w]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[we]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[wo]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[wot]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[^wot]/i", $string, $array); //----- not included w,o,t
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Character Range------- */
$exp = preg_match_all("/[a-c]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[a-j]/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[A-J]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[a-kA-K]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "PHP is the web scripting php language 522 of choice.";
$exp = preg_match_all("/[0-9]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[^0-9]/i", $string, $array); //---- not included 0 to 9 digits
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[0-9a-d]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "file1 file2 file3 file# file? file5 file6";
$exp = preg_match_all("/file[123]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/file[0-9]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/file[^0-9]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting php language 522 of choice.";
// 2015 2016 2017 2018
$exp = preg_match_all("/201[0-9]/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/w[abc]b/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/w[abcdef]b/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/w[a-j]b/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "bat cat mat rat";
$exp = preg_match_all("/[bc]at/", $string, $array); //------- match bat,cat
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[^bc]at/", $string, $array); //------- match mat */
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Meta characters------- */
$exp = preg_match_all("/\w/", $string, $array); //--- Matches all lower and upper case letters, digits and underscore.
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\W/", $string, $array); //--- Capital W - all spaces and other sign
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\d/", $string, $array); //--- Matches any digit from 0 to 9.
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\D/", $string, $array); //--- Capital D -- return all char, sign except numbers
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\s/i", $string, $array); //--- Find a whitespace character
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\S/i", $string, $array); //--- Find a non-whitespace character
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "PHP is the web i scripting language phpwow 522 of chooice.";
$exp = preg_match_all("/\bi\b/i", $string, $array); //--- specifies boundries
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\Bi\B/i", $string, $array); //--- specifies without boundries
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\bphp\b/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Meta characters(.)------- */
$exp = preg_match_all("/ph./", $string, $array); //--- It denotes almost any single character.
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/sc./", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/sc.../", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/web.../", $string, $array); //--- also count space
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/.eb/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


/*-------Special characters -- . ? ( [ + * $ | ^  --- can't use in patterns as usall------- */
$exp = preg_match_all("/\./", $string, $array); //--- use backslash before character
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\?/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/\//", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "https://www.yahoobaba.net/folder/file.php"; //---- use backslash before slashes
$exp = preg_match_all("/\//", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "file.txt file2txt file#txt file txt";
$exp = preg_match_all("/file\.txt/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "This is a car";
$exp = preg_match_all("/This is a .car/", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/* -------Meta characters(\n, \t, \v)------- */
$string = "This is a
car ";
$exp = preg_match_all("/\This is a\ncar/i", $string, $array); //<--- \n -- newline
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "This is a   car"; //--- add tab before car
$exp = preg_match_all("/\This is a\tcar/i", $string, $array); //<--- \t -- tab
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "This is a
car another
test";
$exp = preg_match_all("/\This is a\vcar/i", $string, $array); //This is a\ncar another \vtest <----- \v -- vertical tab
echo "<pre>";
print_r($array);
echo "</pre>";
