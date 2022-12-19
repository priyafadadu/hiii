<?php
//turnery operator

echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
?>



