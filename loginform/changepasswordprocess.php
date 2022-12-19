<?php
session_start();
if(!isset($_SESSION["login"]))

    header("location:login.php");

include("connection.php");

if(isset($_POST['submit']))
{
 $a = $_POST['email'];
  $b =$_POST['password'];
  $password = md5($_POST['password']);
 $newpassword=md5($_POST['npwd']);

   /** @var $conn */
  $sql=mysqli_query($conn,"select password from registration where email='$a'");
 $num=mysqli_fetch_array($sql);

   if($num>0)
   {
     $con=mysqli_query($conn,"update registration set password=' $newpassword' where email='$a'");
       $_SESSION['msg1']="Password Changed Successfully !!";

  }
   else
    {
        $_SESSION['msg1']="Old Password not match !!";
    }
}
?>

