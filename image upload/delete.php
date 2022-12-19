<?php require_once("connection.php");
$id=$_GET['id'];
$res=mysqli_query($conn,"SELECT* from employee WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res))
{
    $deleteimage=$row['image'];
}
$folder="uploads/";
unlink($folder.$deleteimage);
$result=mysqli_query($conn,"DELETE from employee WHERE id=$id") ;
if($result)
{
    header("location:index.php?action=deleted");
}
?>