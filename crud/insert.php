<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO detail (firstname, lastname, email)VALUES ('divya', 'rathod', 'divyarathod@gmail.com')";


if (mysqli_query($conn,$sql))
{
    echo "record inserted successfully..";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
