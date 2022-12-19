<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO detail (firstname, lastname, email)VALUES ('neel', 'aghera', 'neelaghera@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('bindiya', 'marviya', 'bindiyamarviya@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('alkesh', 'sardhara', 'alkeshsardhara@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('hardika', 'ghetiya', 'hardikaghetiya@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('yagnik', 'manvar', 'yagnikmanvar@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('jinal', 'boghra', 'jinalboghra@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('chirag', 'thummar', 'chiragthummar@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('rinku', 'jogani', 'rinkujogani@gmail.com');";
$sql .= "INSERT INTO detail (firstname, lastname, email)VALUES ('deep', 'fadadu', 'deepfadadu@gmail.com')";


if (mysqli_multi_query($conn,$sql))
{
    echo "records inserted successfully..";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

