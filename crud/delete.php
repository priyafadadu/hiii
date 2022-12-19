<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$sql = "delete from detail where id=5";
$sql = "delete from detail where lastname = 'fadadu'";




if (mysqli_query($conn,$sql))
{
    echo "record deleted successfully..";
}
else
{
    echo "Error:not deleted " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>