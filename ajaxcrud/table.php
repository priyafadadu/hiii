<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog_samples";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE posts (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,title VARCHAR(100) NOT NULL,description LONGTEXT NOT NULL,post_at DATE NOT NULL)";


if (mysqli_query($conn,$sql))
{
    echo "<h3>table created successfully..</h3>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


