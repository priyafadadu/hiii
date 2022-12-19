<?php
require_once("connection.php");
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

    <title>Admin</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet"
          href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript"
            src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body>
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.php">
                <span class="align-middle">Admin</span>
            </a>

            <ul class="sidebar-nav">


                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="letterhead.php">
                        <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Letter-head</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="letterhead.php">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Visiting-card</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="forms.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                    </a>
                </li>

            </ul>


        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>
        </nav>



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

</div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="js/app.js"></script>
</form>
</body>
</html>

