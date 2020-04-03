<html>
<body>
<?php 
$c=mysqli_connect("localhost","root","","house");


$name=$_POST['name'];
$username=$_POST['username'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];

$mysqli_query="SELECT * FROM psignuppage WHERE username = '$username'";
$result = mysqli_query($c, $mysqli_query);
if(mysqli_num_rows($result)>0){
	echo "<script>alert('Username Already Exists')</script>";
	echo "<script>window.open('plocation.html','_self')</script>";
	
}
else{
	$mysqli_query = "INSERT into psignuppage(name,username,emailid,password) values('$name','$username','$emailid','$password')";
	$result = mysqli_query($c,$mysqli_query);
	if($result){
		
		echo '<b>Username already exists!</b>';
		
	}
	else{
		echo "<b> ERROR: unable to post</b>";
	}
   mysqli_close($c);
   echo "<script>window.open('plocation.html','_self')</script>";
}
?>
</body>
</html>
