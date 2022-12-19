<?php require_once("connection.php");
include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container_display">
    <span style="float:right;"><a href="upload.php"><button class="btn-primary">+Upload New image </button></a></span>
    <br>
    <?php
    if(isset($_GET['status']))
    {
        $status=$_GET['status'];
        if($status=='success')
        {
            echo '<div class="success">Image resized and uploaded successfully.. </div>';
        }
    }
    ?>
    <table cellpadding="10">
        <tr>
            <th>image</th>
            <th>title</th>
            <th>size</th>
            <th>action</th>
        </tr>
        <?php $res=mysqli_query($conn,"SELECT* from items ORDER by id DESC");
        while($row=mysqli_fetch_array($res))
        {
            echo '<tr> 
            <td><img src="uploads/'.$row['image'].'" height="200"></td> 
             <td>'.$row['title'].'</td> 
            <td><strong>'.image_size('uploads/'.$row['image']).'</strong></td> 
          <td><a href="download.php?id='.$row['id'].'"><button class="btn-primary download_btn">Download</button></a>
				</tr>';

        } ?>
    </table>
</div>
</body>
</html>