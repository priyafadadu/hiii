<?php require_once("connection.php");
include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Resize image while uploading in PHP</title>
</head>
<body>
<?php
if(isset($_POST['form_submit']))
{
    $title=$_POST['title'];
    $desiredHeight =$_POST['height'];
    $desiredWidth=$_POST['width'];
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
    if ($_FILES["image"]["size"] > 1000000) {
        $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size.';
    }
    if(!isset($error))
    {
        $imageProcess = 0;
        if(is_array($_FILES)) {
            $sourceProperties = getimagesize($file);
            $unique_id=mt_rand(1000,9999).time();
            $uploadImageType = $sourceProperties[2];
            $sourceImageWidth = $sourceProperties[0];
            $sourceImageHeight = $sourceProperties[1];
            $image_point = $folder."image_".$unique_id.'.'. $imageFileType;
            switch ($uploadImageType) {
                case IMAGETYPE_JPEG:
                    $resourceType = imagecreatefromjpeg($file);
                    $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
                    imagejpeg($imageLayer,$image_point);
                    break;
                case IMAGETYPE_GIF:
                    $resourceType = imagecreatefromgif($file);
                    $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
                    imagegif($imageLayer,$image_point);
                    break;
                case IMAGETYPE_PNG:
                    $resourceType = imagecreatefrompng($file);
                    $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
                    imagepng($imageLayer,$image_point);
                    break;
                default:
                    $imageProcess = 0;
                    break;
            }
            move_uploaded_file($file,$folder. $unique_id. ".". $imageFileType);
            unlink($folder.$unique_id.'.'.$imageFileType);
            $imgtodb='image_'.$unique_id.'.'.$imageFileType;
            $imageProcess = 1;
        }

        $result=mysqli_query($conn,"INSERT INTO items(image,title) VALUES('$imgtodb','$title')");
        if($result)
        {
            header("location:index.php?status=success");
        }
        else
        {
            echo 'something went wrong';
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
    <h1>Resize image while uploading </h1>
    <?php if(isset($image_success))
    {
        echo '<div class="success">Image Uploaded successfully</div>';
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Image </label>
        <input type="file" name="image" class="form-control" required/>
        <br><br>
        <label>Title</label>
        <input type="text" name="title" class="form-control">
        <br><br>
        <label>Height</label>
        <input type="number" name="height" class="form-control">
        <br><br>
        <label>Width </label>
        <input type="number" name="width" class="form-control">
        <br><br>

        <button name="form_submit" class="btn-primary"> Upload</button>
    </form>
</div>
</body>
</html>