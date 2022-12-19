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
//select data
//$sql = "SELECT id, firstname, lastname, email FROM detail";

//where condition
//$sql = "SELECT id, firstname, lastname FROM detail WHERE lastname='aghera'";

//order by
//$sql = "SELECT id, firstname, lastname FROM detail order by lastname";

//limit data
//$sql = "select * from detail LIMIT 5";


//like operator
//$sql = "select * from detail where lastname like 'f%'";
$sql = "select * from detail";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " ". $row["email"]." " ."<br>";

    }
}
else
{
    echo "0 results";
}

mysqli_close($conn);
?>
