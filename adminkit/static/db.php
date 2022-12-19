<?php
$servername = "localhost";
$username = "root";
$password = "root";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "create database blog_samples";
if (mysqli_query($conn, $sql))
{
    echo "<h3>Database created successfully</h3>";
}
else
{
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

