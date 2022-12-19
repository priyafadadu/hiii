<?php
//if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
//{
//    $email=$_POST['email'];
//    $pass=$_POST['password'];
//    mysqli_connect('localhost','root','root');
//    mysqli_select_db('blog_samples');
//    $select=mysqli_query("update user set password='$pass' where email='$email'");
//}

//if (isset($_GET['email'])) {
//    $email = $_GET['email'];
//
//    $conn = new mySqli('localhost', 'root', 'root', 'blog_samples');
//    if ($conn->connect_error) {
//        die('Could not connect to the database');
//    }
include("db.php");
  /** @var $conn */
   $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE email='" . $email . "'");


    if (isset($_POST['reset']))
    {
        $email = $_POST['email'];
        $b = $_POST['password'];
        $password = md5($_POST['password']);


        $changeQuery =mysqli_query($conn,"UPDATE registration SET password = '$password' WHERE email = '$email'");

        if ($changeQuery)
        {
            header("Location: login.php");
        }
        else
        {
            echo "not updated successfully";
        }


}
?>


