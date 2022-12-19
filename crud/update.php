<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$sql = "update detail set lastname = 'vacchani' where id=2";
//$sql = "update detail set firstname = 'shraddha' where id=2";
//$sql = "update detail set firstname = 'priya', lastname = 'fadadu', email = 'priyafadadu81@gmail.com' where id=3";
//$sql = "update detail set lastname = 'aghera' where id=3";
//sql =  = "update detail set lastname = 'malviya' where id=9";
$sql = "update detail set lastname = 'radiya',firstname = 'jiya' where id=21";
if (mysqli_query($conn,$sql))
{
    echo "record updated successfully..";
}
else
{
    echo "Error:not updated " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
