<!DOCTYPE html>
<html>
<title>ADMIN LOGIN</title>
<head>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="-1">
</head>

    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

<link rel="icon" type="image/gif/png" href="http://localhost/House/House/15.jpg">
<center>  <body background="http://localhost/House/House/4.png">
<link rel="stylesheet" type="text/css" href="http://localhost/House/login.css"><br><br><br>
<h1><font color ="white" size="8" style="Jazz LET, fantasy">ENTER DETAILS TO LOGIN</font></h1>
<form action = "aloginpage.php" method="GET"><br><br><br><br><br><br>
<label><font color ="white" size="6" style="Jazz LET, fantasy">USERNAME</font></label>&emsp;&emsp;&emsp;<input type="text" name="username" required required placeholder="username" width="300px" height="150px"></br><br><br>
<label><font color ="white" size="6" style="Jazz LET, fantasy">PASSWORD</font></label>&emsp;&emsp;&emsp;<input type="password" name="password" required required placeholder="********" name = "password"></br>
<br><br><button type= "submit" class="button"width="300" height="200"><font size="5" color="white">LOGIN</font></a></button>
</form>
<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['username'])&&($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = new mysqli('localhost','root','') or die(mysqli_error());
	$db = mysqli_select_db($conn, "SELECT * FROM aloginpage WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0){
	while($row=mysqli_fetch_assoc($query)){
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}
	if($username == $dbusername && $password == $dbpassword){
	session_start();
	$_SESSION['sess_username']=$username;
	header("location:alocation.html");
	}
	}
	else{
	echo "INVALID USERNAME OR PASSWORD !";
	}
	}
}
?>

</body>
</html>