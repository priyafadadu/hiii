<?php
$age = array("priya"=>"24", "neel"=>"26");
ksort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
