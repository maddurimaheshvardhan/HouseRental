<html>
<body>
<?php
$con=new mysqli("localhost","root","","house") or 
    die("Connection Failed");   
            $username=$_GET["username"];
            $password=$_GET["password"]; 
     $sql ="SELECT username, password FROM tsignuppage WHERE username = ('$username') and password = ('$password')";
 $result=$con->query($sql);
 
 
 if($result->num_rows>0)
        { 
           // $_SESSION["logged_in"] = true; 
            //$_SESSION["username"] = $username; 
		

		  echo "<center><h1>you are succesfully logged in</h1></center>";
          echo "<script>window.open('tlocation.html','_self')</script>";       
		   }
            else
            {
                echo "<script>alert('The username or  password are incorrect!','_self')</script></h1>";
				echo "<script>window.open('Mainpage1.html','_self')</script>";
            }
$con->close();			
?>
</body>
</html>