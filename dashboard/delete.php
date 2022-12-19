<?php
include_once "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = " DELETE FROM `reg` WHERE id ='" . $id ."'";
    /** @var $conn */
    $result=mysqli_query($conn, $q);
    try {
        if ($result)
        {
            header("location:listing.php");
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




