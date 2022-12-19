<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "operation";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "select * from user_details where firstname not in('pinal','payal','mohit')";

//$sql = "select * from user_details where firstname in('meet')";
//$sql = "select userid as id, firstname as names, lastname as surname from user_details";
$sql = "select * from customers";
//$sql = "select count(customerid), country from customers group by country HAVING count(customerid) > 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["customerid"]. " - customername: " . $row["customername"]. " - contactname: " .  $row["contactname"]. " - address: " . $row["address"]. " - city: ". $row["city"]. "- postalcode: ". $row["postalcode"].  "- country: ". $row["country"]."<br>";

    }
}

else
{
    echo "0 results";
}

mysqli_close($conn);
?>
