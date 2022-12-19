<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

//create table using constraint
$sql = "create table ab(id int not null, lastname varchar(255) not null, firstname varchar(255), age int, unique (id),email varchar (255) not null)";
//$sql ="create table Persons (id int not null, lastname varchar(255) not null, firstname varchar(255), age int, unique (id),email varchar(255) not null)";
//$sql = "create table home(id int not null, lastname varchar (255) not null, firstname varchar(255), age int, unique (id),email varchar(255) not null)";

//drop table
//$sql = "drop table Persons ";
//$sql = "drop table t4tutorials_finance";


//alter table to add column
//$sql = "alter table Persons add Email varchar(255)";
//$sql = "alter table Persons add dateofbirth date";
//$sql = "alter table home add dateofbirth date";


//alter table to drop column
//$sql = "alter table Persons drop column Email";
//$sql = "alter table home drop column email";



if (mysqli_query($conn,$sql))
{
         echo "table created successfully..";
}
else
{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

