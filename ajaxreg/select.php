<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="blog_samples";

$conn = mysqli_connect($servername, $username, $password,$db);


if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select * from registration";
$result = mysqli_query($conn,$sql);


echo ' <tr> 
              <th>Sr.No</th> 
              <th>Email</th> 
              <th>Hobby</th> 
              <th>Gender</th> 
              <th>Edit</th> 
              <th>Delete</th> 
              </tr>';

$i=1;
while($data=mysqli_fetch_array($result))
{
    echo ' 
             
              <tr> 
              <td>'.$i.'</td> 
               <td>'.$data['email'].'</td> 
         <td>'.$data['hobby'].'</td> 
         <td>'.$data['gender'].'</td> 
         
         <td><a href="edit.php?edit_id='.$data['id'].'">edit</a></td> 
         <td><a href="index.php?del_id='.$data['id'].'" >delete</a></td> 
       </tr>';

    $i++;
}

?>



