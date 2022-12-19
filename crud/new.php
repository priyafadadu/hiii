<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";
$conn = mysqli_connect($servername, $username,$password,$dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "create database piyu";
if (mysqli_query($conn, $sql))
{
    echo "Database created successfully";
}
else
{
    echo "Error creating database: " . mysqli_error($conn);
}


$sqlt= "CREATE TABLE detail (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50))";

if (mysqli_query($conn,$sqlt))
{
    echo "table created successfully..";
}
else
{
    echo "Error: " . $sqlt. "<br>" . mysqli_error($conn);
}
$sqli= "INSERT INTO detail (firstname, lastname, email)VALUES ('priya','aghera','priyaaghera@gmail.com')";


if (mysqli_query($conn,$sqli))
{
    echo "<h4>record inserted successfully..</h4><br>";
}
else
{
    echo "Error: " . $sqli. "<br>" . mysqli_error($conn);
}
$sqlu = "update detail set lastname = 'varsur',firstname = 'visu'where id=1";
if (mysqli_query($conn,$sqlu))
{
    echo "<h4>record updated successfully..</h4><br>";
}
else
{
    echo "Error:not updated " . $sqlu . "<br>" . mysqli_error($conn);
}

$sqld = "delete from detail where lastname='priya'";


if (mysqli_query($conn,$sqld))
{
    echo "<h4>record deleted successfully..</h4><br>";
}
else
{
    echo "Error:not deleted " . $sqld . "<br>" . mysqli_error($conn);
}

$sqls = "select * from detail";

$result = mysqli_query($conn, $sqls);

if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "-email". $row["email"]."<br>";



    }
}

else
{
    echo "0 results";
}

mysqli_close($conn);
?>