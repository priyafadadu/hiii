<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "blog_samples";

$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{

    $email = $_POST['email'];
   $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
   $hobby = $_POST['hobby'];
   $gender = $_POST['gender'];
    //$capcha = $_POST['capcha'];

   // $check_name = "select * from reg where email='$email'";
   // $run = mysqli_query($check_name);

   // if (mysqli_num_rows($run) > 0) {
     //   echo "<script>alert('email $email already exit in your database.please try with another!')</script>";

  //  } elseif ($password == $cpassword)
  //  {
    //    echo 'match';
      //  exit();

                $query = "INSERT INTO registration(email ,password ,cpassword ,hobby ,gender) VALUES ('$email', '$password', '$cpassword',' $hobby','$gender')";

        //$query = "INSERT INTO registration(email ,password ,cpassword ,hobby ,gender) VALUES ('$email', '$password', '$cpassword',' $hobby','$gender')";
        $run1 = mysqli_query($query);

       if ($run1)
       {
            echo "<script>window.open('registration.php','_self')</script>";
       }

 //
   else
    {
        echo "<script>alert('password does not match try again')</script>";
   }


    /*$fnm=$_FILES["filename"]["name"];
    $extension = substr($fnm,strlen($fnm)-4,strlen($fnm));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
     echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
     $imgnewfile=md5($imgfile).time().$extension;
     move_uploaded_file($_FILES["filename"]["tmp_name"],"images/".$imgnewfile);

    }*/

    /* $sql = "insert into reg (email, password, cpassword, hobby, gender, capcha) values ('$email','$password','$cpassword', '$hobby', '$gender', '$capcha')";
    if (mysqli_query($conn, $sql))
    {
     echo "record inserted successfully..";
    }
     else
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

}*/
}
    mysqli_close($conn);

?>




