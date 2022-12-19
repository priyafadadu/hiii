<?php
include_once "conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = " DELETE FROM `priya` WHERE id ='" . $id ."'";
    $result=mysqli_query($conn, $q);
    try {
        if ($result)
        {
            header("location:index.php");
        } else
        {
            echo "Error";
        }
    }catch(Exception $e)
    {
        echo "failed";
        exit();
    }
}
?>

