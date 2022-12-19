<?php
define("GREETING","Hello you! How are you today?");
echo defined("GREETING");
echo("<br>");
?>



<?php
$site = "https://www.w3schools.com/";
fopen($site,"r")
or exit("Unable to connect to $site");
echo("<br>");
?>


<?php
$input = [
    "Red",
    "Pink",
    "Green",
    "Blue",
    "Purple"
];

$result = preg_grep("/^p/i", $input);
print_r($result);
echo("<br>");
?>

<?php
$str = 'Visit Microsoft!';
$pattern = '/microsoft/i';
echo preg_replace($pattern, 'W3Schools', $str);
echo("<br>");
?>

<?php
function countLetters($matches) {
    return $matches[0] . '[' . strlen($matches[0]) . 'letter]';
}

function countDigits($matches) {
    return $matches[0] . '[' . strlen($matches[0]) . 'digit]';
}

$input = "There are 365 days in a year.";
$patterns = [
    '/\b[a-z]+\b/i' => 'countLetters',
    '/\b[0-9]+\b/' => 'countDigits'
];
$result = preg_replace_callback_array($patterns, $input);
echo $result;
echo("<br>");
?>


<?php
$date = "1970-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
print_r($components);
echo("<br>");
?>


<?php
$search = preg_quote("://", "/");
$input = 'https://www.google.com/';

$pattern = "/$search/";
if(preg_match($pattern, $input)) {
    echo "The input is a URL.";
} else {
    echo "The input is not a URL.";
}
echo("<br>");
?>


<?php
$c = array("priya"=>"35", "neel"=>"37", "aghera"=>"43");
echo "c is " . is_array($c) . "<br>";
echo("<br>");
?>

<?php
$p = "Hello priya!";
echo "The value of variable 'a' before unset: " . $p . "<br>";
unset($p);
echo "The value of variable 'a' after unset: " . $p;
echo("<br>");
?>

<?php
echo("<br>");
$a = 269;
echo var_dump($a) . "<br>";

$b = "priya neel aghera are you married!";
echo var_dump($b) . "<br>";

$c = 32.5;
echo var_dump($c) . "<br>";

$d = array("shreya", "neel", "savan");
echo var_dump($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";

// Dump two variables
echo var_dump($a, $b) . "<br>";
?>


<?php
echo("<br>");
$a = 32;
echo var_export($a) . "<br>";

$b = "Hello world!";
echo var_export($b) . "<br>";

$c = 32.5;
echo var_export($c) . "<br>";

$d = array("red", "green", "blue");
echo var_export($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_export($e) . "<br>";
?>



