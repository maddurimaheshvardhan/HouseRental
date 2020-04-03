<html>
<body>
<?php 
$c=mysqli_connect("localhost","root","","thouse");
if($c)
	 echo "success";
 else
	 echo "fail";

$username=$_POST['username'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$query="insert into signupdetails values('$username','$emailid','$password','$repassword')";


if(!mysqli_query($c,$query))
	   echo "not inserted";
 else
	   echo "inserted";
   mysqli_close($c);
   echo "<script>window.open('search.html','_self')</script>";

?>
</body>
</html>