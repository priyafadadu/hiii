<?php require_once("connection.php");
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Image Upload and edit in PHP and MYSQL database</title>
</head>
<body>
<?php
if(isset($_POST['update_submit']))
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
    if($file!=''){

        if ($_FILES["image"]["size"] > 500000) {
            $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
        }
    }
    if(!isset($error))
    {
        if($file!='')
        {
            $res=mysqli_query($conn,"SELECT* from employee WHERE id=$id limit 1");
            if($row=mysqli_fetch_array($res))
            {
                $deleteimage=$row['image'];
            }
            unlink($folder.$deleteimage);
            move_uploaded_file($file,$target_file);
            $result=mysqli_query($conn,"UPDATE employee SET name='$name',email='$email',address='$address',image='$image_file' WHERE id=$id");
        }
        else
        {
            $result=mysqli_query($conn,"UPDATE employee SET name='$name',email='$email',address='$address' WHERE id=$id");
        }
        if($result)
        {
            header("location:index.php?action=saved");
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
$res=mysqli_query($conn,"SELECT* from employee WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res))
{

    $name=$row['name'];
    $email=$row['email'];
    $address=$row['address'];
    $image=$row['image'];
}
?>
<div class="container" style="width:500px;">
    <h1> Edit </h1>
    <?php if(isset($update_sucess))
    {
        echo '<div class="success">Record Updated successfully</div>';
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name;?>" class="form-control">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email;?>" class="form-control">
            <label>Address</label>
        <input type="text" name="address" value="<?php echo $address;?>" class="form-control">

        <label>Image Preview </label><br>
        <img src="uploads/<?php echo $image;?>" height="100"><br>
        <label>Change Image </label>
        <input type="file" name="image" class="form-control">

        <br><br>
        <button name="update_submit" class="btn-primary">Update </button>
    </form>
</div>
</body>
</html>