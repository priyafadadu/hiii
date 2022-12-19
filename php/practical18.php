<?php
/*
$data=array("a"=>"apple","b"=>"ball");
$result=array_flip($data);
print_r($result);
echo("<br>");
*/
?>

//practical19
<?php
/*
$data1 = array("cat", "goat");
$data2 = array("dog", "cow");
$data3=array("white", "black", "red");
print_r(array_merge($data1,$data2,$data3));
echo("<br>");
*/
?>

//practical20
<?php
/*
$search= array("v"=>"vanilla", "s"=>"strawberry");
echo array_search("vanilla",$search);
echo("<br>");
*/
?>

//practical22
<?php
/*
$b = array(1,1,4,6,7,4);
print_r(array_unique($b));
echo("<br>");
*/
?>

//practical21
<?php
/*
$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
*/
?>


//practical28
<?php

$to = "xyz@somedomain.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == true) {
    echo "Message sent successfully...";
} else {
    echo "Message could not be sent...";
}

?>





