<?php
$connect = mysqli_connect("localhost", "root", "root", "blog_samples");
if(isset($_POST["id"]))
{
    $query = "DELETE FROM abc WHERE id = '".$_POST["id"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Deleted';
    }
}
?>