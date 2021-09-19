<?php
/*-------String Htmllentities Function------- */
// $str = "A 'quote' is <b>bold</b>";
$str = '<a href="https://www.yahoobaba.net">Yahoo "Baba" Website</a>';

// $newString = htmlentities($str, ENT_QUOTES);
$newString = htmlspecialchars($str, ENT_QUOTES);

// $decodeStr = html_entity_decode($newString);
$decodeStr = htmlspecialchars_decode($newString);

// echo $newString . "\n" . $decodeStr;

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";
