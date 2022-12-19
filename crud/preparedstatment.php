<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO detail (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);


$firstname = "trusha";
$lastname = "mardiya";
$email = "trushamardiya@gmail.com";
$stmt->execute();

echo "record inserted successfully";

$stmt->close();
mysqli_close($conn);
?>