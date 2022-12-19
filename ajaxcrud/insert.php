<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="blog_samples";

$conn = mysqli_connect($servername, $username, $password,$db);


if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$title= $_POST['titlecol'];
$desc=$_POST['desccol'];
$fullname=$_POST['fullname'];
$adddate=date('Y-m-d');


$sql ="insert into posts(title,description,fullname,post_at) values ('".$title."','".$desc."','".$fullname."','".$adddate."')";

mysqli_query($conn,$sql);


?>
