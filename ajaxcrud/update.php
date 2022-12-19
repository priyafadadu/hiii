<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="blog_samples";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("connection failed : " . mysqli_connect_error());
}

$id = $_POST['postid'];
$title= $_POST['titlecol'];
$desc=$_POST['desccol'];
$fullname=$_POST['fullname'];


$sql ="UPDATE posts SET title='".$title."',description='".$desc."',fullname='".$fullname."' where id='".$id."'";

mysqli_query($conn,$sql);



?>
