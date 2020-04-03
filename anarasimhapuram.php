<!DOCTYPE html>
<html>
<title>NARASIMHAPURAM</title><link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
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

$sql = "SELECT * FROM narasimhapuram";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>IMAGE</th><th>TYPE OF HOUSE</th><th>RENT PER MONTH</th><th>NAME OF PROVIDER</th><th>DNO</th><th>CONTACT</th><th>ADDRESS</th><th>EDIT</th><th>DELETE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tr>";
				echo "<td>"; echo  $row["id"]; echo "</td>";
				echo "<td>" ; ?><image src = "House/<?php echo $row["image"]; ?>"  width="100" height="100"/> <?php "</td>";
				echo "<td>"; echo  $row["typeofhouse"]; echo "</td>";
				echo "<td>"; echo $row["rentpermonth"]; echo "</td>";
				echo "<td>"; echo $row["nameofprovider"]; echo "</td>";
				echo "<td>"; echo $row["dno"]; echo "</td>";
				echo "<td>"; echo $row["contact"]; echo "</td>";
				echo "<td>"; echo $row["address"]; echo "</td>";	
				echo "<td>";  ?> <a href="http://localhost/House/neditadmin.php"><button id="edit_<?php echo $image ?>"<font size="4" color="black" font="Lucida Handwriting"><b>Edit</b></font></button></a><?php "</td>";
				echo "<td>";  ?> <a href="http://localhost/House/ndeleteadmin.php"><button id="<?php echo $id ?>"<font size="4" color="black" font="Lucida Handwriting"><b>Delete</b></font></button></a><?php echo "</td>";
			echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<script>alert('SORRY NO DETAILS PROVIDED')</script>";
	echo "<script>window.open('alocation.html','_self')</script>";
}

$conn->close();
?> 

</body>
</html>