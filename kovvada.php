<html>
<body>
<?php 
$c=mysqli_connect("localhost","root","","house");


$image=$_POST['image'];
$typeofhouse=$_POST['typeofhouse'];
$rentpermonth=$_POST['rentpermonth'];
$nameofprovider=$_POST['nameofprovider'];
$dno=$_POST['dno'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$mysqli_query="SELECT * FROM kovvada WHERE image = '$image', typeofhouse = '$typeofhouse', rentpermonth = '$rentpermonth', nameofprovider = '$nameofprovider', dno ='$dno', contact = '$contact', address = '$address'";
$result = mysqli_query($c, $mysqli_query);
if(mysqli_num_rows($result)>0){
	echo "<script>alert('Details Already Exists')</script>";
	
}
else{
	$mysqli_query = "INSERT into kovvada(image,typeofhouse,rentpermonth,nameofprovider,dno,contact,address) values('$image','$typeofhouse','$rentpermonth','$nameofprovider','$dno','$contact','$address')";
	$result = mysqli_query($c,$mysqli_query);
	if($result){
		
		echo "<script>alert('Successfully Inserted')</script>";
	}
	else{
		echo "<b> ERROR: unable to post</b>";
	}
   mysqli_close($c);
   echo "<script>window.open('koinsert.php','_self')</script>";
}
?>
</body>
</html>