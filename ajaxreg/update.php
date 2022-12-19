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
$email= $_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$hobby=$_POST['hobby'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$capcha=$_POST['capcha'];
$filename=$_POST['filename'];


$sql ="update reg set email='".$email."',password='".$password."',cpassword='".$cpassword."',hobby='".$hobby."',gender='".$gender."',country='".$country."',state='".$state."',city='".$city."',capcha='".$capcha."',filename='".$filename."' where id='".$id."'";

mysqli_query($conn,$sql);



?>


