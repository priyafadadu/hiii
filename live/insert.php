<?php
$connect = mysqli_connect("localhost", "root", "root", "blog_samples");
if(isset($_POST["first_name"], $_POST["last_name"]))
{
    $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
    $query = "INSERT INTO abc(first_name, last_name) VALUES('$first_name', '$last_name')";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Inserted';
    }
}
?>
