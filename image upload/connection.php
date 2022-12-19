
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="blog_samples";


$conn = mysqli_connect($servername, $username, $password,$db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected successfully.....";
?>