
<?php
//while loop
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo("<br>");
$x = 15;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 20);
echo("<br>");

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo("<br>");

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo("<br>");

for ($x = 0; $x < 10; $x++) {
    if ($x == 6) {
        break;
    }
    echo "The number is: $x <br>";
}
echo("<br>");

for ($x = 0; $x < 10; $x++) {
    if ($x == 8) {
        continue;
    }
    echo "The number is: $x <br>";
}
?>