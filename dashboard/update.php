<?php
session_start();
//include_once "db.php";


//$id=$_GET['id'];
//$sq ="SELECT * from reg where id='$id'";
//
//
///** @var $conn */
//$query =mysqli_query($conn,$sq);
//while($row = mysqli_fetch_array($query)){
//    ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $row['id'];?><!--</td>-->
<!--        <td>--><?php //echo $row['email'];?><!--</td>-->
<!--        <td>--><?php //echo $row['gender'];?><!--</td>-->
<!--        <td>--><?php //echo $row['hobby'];?><!--</td>-->
<!--        <td>--><?php //echo $row['country'];?><!--</td>-->
<!--        <td>--><?php //echo $row['state'];?><!--</td>-->
<!--        <td>--><?php //echo $row['city'];?><!--</td>-->
<!---->
<!--    --><?php
//}
//?>



<?php
session_start();
include_once "db.php";
    if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $check = implode(",", $hobby);
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];


    $sql = "UPDATE `reg` SET `email` = '$email', `hobby` = '$check', `gender` = '$gender', `country` = '$country', `state` = '$state', `city`= '$city' WHERE `id` = '$id'" or die(mysqli_error());
    /** @var $conn */
    $update = mysqli_query($conn, $sql);

    try
    {
        if ($update)
        {
            header("location:listing.php");
        } else
        {
            echo "Error";
        }
    }
    catch(Exception $e)
    {
        echo "failed";
        exit();
    }
}
?>


