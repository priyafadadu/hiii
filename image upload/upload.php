
<?php require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Image Upload in PHP and MYSQL database</title>
</head>
<body>
<?php
if(isset($_POST['form_submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $folder = "uploads/";
    $image_file=$_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $path = $folder . $image_file;
    $target_file=$folder.basename($image_file);
    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
    }
    if ($_FILES["image"]["size"] > 1048576) {
        $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
    }
    if(!isset($error))
    {
        // move image in folder
        move_uploaded_file($file,$target_file);
        $result=mysqli_query($conn,"INSERT INTO employee(name,email,address,image) VALUES('$name','$email','$address','$image_file')");
        if($result)
        {
            header("location:index.php?image_success=1");
        }
        else
        {
            echo 'Something went wrong';
        }
    }
}
if(isset($error)){

    foreach ($error as $error) {
        echo '<div class="message">'.$error.'</div><br>';
    }
}
?>
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <label>name</label>
        <input type="text" name="name" class="form-control" required>
        <label>Email</label>
        <input type="text" name="email" class="form-control" required>
        <label>Address</label>
        <input type="text" name="address" class="form-control" required>
        <label>Image </label>
        <input type="file" name="image" class="form-control" required style="margin-bottom: 30px">


        <button name="form_submit" class="btn-primary"> Upload</button>
    </form>
</div>
</body>
</html>