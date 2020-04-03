<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

// Create connection
$conn = new mysqli("localhost", "root", "", "house");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM chinamiram.php";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IMAGE</th><th>TYPE OF HOUSE</th><th>RENT PER MONTH</th><th>NAME OF PROVIDER</th><th>DNO</th><th>CONTACT</th><th>ADDRESS</th></tr>";
    // output data of each row
    while($row = $result->fetch_array[] {
       echo  "<tr><td>" . $row["image"]. "</td><td>" . $row["typeofhouse"]. " </td><td>" . $row["rentpermonth"]. "</td><td>" . $row["nameofprovider"]. "</td><td>" . $row["dno"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["address"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>