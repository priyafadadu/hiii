
<?php


//include 'formvalidation.php';
//require 'formvalidation.php';
?>
//practical24
<?php
/*$myfile = fopen("ab.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("ab.txt"));
fclose($myfile);

fp = fopen('ab.txt',"w");
fwrite($fp, 'welcome ');
fwrite($fp, 'to php file write');
fclose($fp);

echo "File written successfully";
*/
?>

//practical25
<?php

setcookie("username", "welccccvcccccccome", time()+30*24*60*60);
echo("<br>");
echo $_COOKIE["username"];
echo $_COOKIE["cookie_value"];


?>

//practical26
<?php

session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>


<?php/*
session_unset();
session_destroy();
*/
?>

<?php  /*
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";   */
?>

</body>
</html>
