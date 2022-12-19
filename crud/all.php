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

//$sql = "INSERT INTO detail (firstname, lastname, email)VALUES ('shivani', 'vaghela', 'shivanivaghela@gmail.com')";
$sql = "INSERT INTO detail (firstname, lastname, email)VALUES ('varsha', 'varsur', 'varshavarsur@gmail.com')";

//inserted record

if (mysqli_query($conn,$sql))
{
    echo "<h4>record inserted successfully..</h4><br>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//updated record
//$sqlu = "update detail set lastname = 'mardiya',firstname = 'shweta' where id=50";
$sqlu = "update detail set lastname = 'vaghela',firstname = 'shivu' where id=53";
if (mysqli_query($conn,$sqlu))
{
    echo "<h4>record updated successfully..</h4><br>";
}
else
{
    echo "Error:not updated " . $sqlu . "<br>" . mysqli_error($conn);
}
//deleted record

//$sqld = "delete from detail where id=49";
$sqld = "delete from detail where id=20";


if (mysqli_query($conn,$sqld))
{
    echo "<h4>record deleted successfully..</h4><br>";
}
else
{
    echo "Error:not deleted " . $sqld . "<br>" . mysqli_error($conn);
}

//display all record
  $sqls = "select * from detail";

  $result = mysqli_query($conn, $sqls);

if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "-email". $row["email"]." " ."<br>";



    }
}

else
{
    echo "0 results";
}

mysqli_close($conn);
?>

