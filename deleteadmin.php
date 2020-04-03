<html>
<head>    
    <title>Edit Data</title>
	<link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
</head>
<?php
// including the database connection file
$mysqli = mysqli_connect("localhost","root","","house");

 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM chinamiram WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:deleteadmin.php");
?>