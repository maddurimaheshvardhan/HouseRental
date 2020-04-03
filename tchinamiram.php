<!DOCTYPE html>
<html>
<title>CHINAMIRAM</title><link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM chinamiram";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IMAGE</th><th>TYPE OF HOUSE</th><th>RENT PER MONTH</th><th>NAME OF PROVIDER</th><th>DNO</th><th>CONTACT</th><th>ADDRESS</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tr>";
				echo "<td>" ; ?><image src = "House/<?php echo $row["image"]; ?>"  width="100" height="100" /> <?php "</td>";
				echo "<td>"; echo  $row["typeofhouse"]; echo "</td>";
				echo "<td>"; echo $row["rentpermonth"]; echo "</td>";
				echo "<td>"; echo $row["nameofprovider"]; echo "</td>";
				echo "<td>"; echo $row["dno"]; echo "</td>";
				echo "<td>"; echo $row["contact"]; echo "</td>";
				echo "<td>"; echo $row["address"]; echo "</td>";				
			echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<script>alert('SORRY NO DETAILS PROVIDED')</script>";
	echo "<script>window.open('tlocation.html','_self')</script>";
}

$conn->close();
?> 

</body>
</html>