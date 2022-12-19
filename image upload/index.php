<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Upload image, display, edit and delete in PHP </title>
</head>
<body>
<div class="container_display">
    <span style="float:right;"><a href="upload.php"><button class="btn-primary">Upload New image </button></a></span>
    <br><br>
    <?php
    if(isset($_GET['image_success']))
    {
        echo '<div class="success">Record inserted successfully</div>';
    }

    if(isset($_GET['action']))
    {
        $action=$_GET['action'];
        if($action=='saved')
        {
            echo '<div class="success">Saved </div>';
        }
        elseif($action=='deleted')
        {
            echo '<div class="success">Record deleted Successfully ... </div>';
        }
    }
    ?>
    <table cellpadding="10">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Image</td>
            <td colspan="2">Action</td>
        </tr>
        <?php $res=mysqli_query($conn,"SELECT* from employee");
        while($row=mysqli_fetch_array($res))
        {
            echo '<tr> 
  <td>'.$row['id'].'</td> 
         <td>'.$row['name'].'</td> 
           <td>'.$row['email'].'</td> 
             <td>'.$row['address'].'</td> 
                  <td><img src="uploads/'.$row['image'].'" height="100"></td> 
                 
                  <td><a href="edit.php?id='.$row['id'].'"><button class="btn-primary">Edit </button></a>
                  
                  	 <a href=\'delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                  </td> 
				</tr>';
        } ?>

    </table>
</div>
</body>
</html>