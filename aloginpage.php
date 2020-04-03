<html>
<body><head>
<meta Http-Equiv="Cache-Control" Content="no-cache">
<meta Http-Equiv="Pragma" Content="no-cache">
<meta Http-Equiv="Expires" Content="0"> </head>
<?php
session_start();
$con=new mysqli("localhost","root","","house") or 
    die("Connection Failed");   
            $username=$_GET["username"];
            $password=$_GET["password"]; 
     $sql ="SELECT username, password FROM aloginpage WHERE username = ('$username') and password = ('$password')";
 $result=$con->query($sql);
 
 
 if($result->num_rows==1)
        { 
           // $_SESSION["logged_in"] = true; 
            //$_SESSION["username"] = $username; 
		  if(isset($_SESSION["username"]))
		  if(isset($_SESSION["password"])){
		  include_once("http://localhost/House/Mainpage1.html");
}
          echo "<center><h1>you are succesfully logged in</h1></center>";
          echo "<script>window.open('alocation.html','_self')</script>";   
			exit();
		   }
            else
            {
                echo "<script>alert('The username or  password are incorrect!','_self')</script></h1>";
				echo "<script>window.open('Mainpage1.html','_self')</script>";
				
            }
$con->close();			
?>
<p id="text">WARNING! Caps lock is ON.</p>
<script>
var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
 <SCRIPT type="text/javascript">    
             window.history.forward();
             function noBack() { 
                  window.history.forward(); 
             }
        </SCRIPT>
</body>
</html>