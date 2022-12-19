<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "blog_samples";

$conn = mysqli_connect($servername, $username, $password, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];

    $address = $_POST['address'];

//Insert Query of SQL
    $sql = "insert into `employee`(`name`, `email`,`address`) values ('" .$name. "','" .$email."','" .$address."')";

    if (mysqli_query($conn, $sql))
    {
        echo "<h5>inserted successfully</h5>";


    } else
    {
        echo "Error creating database: " . mysqli_error($conn);
    }
}

    ?>