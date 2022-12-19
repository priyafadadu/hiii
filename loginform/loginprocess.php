
<?php
session_start ();
include("connection.php");

if(isset($_REQUEST['sub']))
{

$a = $_REQUEST['email'];
$b =$_REQUEST['password'];
$password = md5($_POST['password']);
    /** @var $conn */
$res = mysqli_query($conn,"select * from registration where email='$a'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{

$_SESSION["login"]="1";
header("location:reg.php");
}
else
{
header("location:login.php?err=1");

}
}
?>




