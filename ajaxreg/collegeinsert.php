<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php


    $conn = mysqli_connect("localhost", "root", "root", "blog_samples");


    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];


    $sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully</h3>";

        echo nl2br("\n$first_name\n $last_name\n "
            . "$gender\n $address\n $email");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>
