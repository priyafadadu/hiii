<?php
include("connection.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = " DELETE FROM `employee` WHERE id ='" . $id ."'";
    /** @var $conn */
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




