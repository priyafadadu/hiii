<?php
require ('db.php');
$sql="select * from user";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>data</title>


</head>
<body>
<div class="container">
    <a href="export.php"> <button type="button" class="btn-btn-primary">export</button></a>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>

            <th>email</th>

        </tr>
        </thead>
        <tbody>
        <?php  while($row=mysqli_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>



</body>
</html>