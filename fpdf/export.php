<?php
require ('db.php');
$sql="select * from user";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>id</td><td>name</td><td>email</td></tr>';
 while($row=mysqli_fetch_assoc($res)){
     $html.='<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';

 }
 $html.='</table>';
 header('Content-Type:application/xls');
 header('Content-Disposition:attachment;filename=report.xls');
 echo $html;
 ?>

