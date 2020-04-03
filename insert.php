<?php

include 'conn.php';

if(isset($_POST['done'])){

  $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " INSERT INTO `chinamiram`(`image`, `typeofhouse`, `rentpermonth` `nameofprovider` `dno` `contact` `address`) VALUES ( '$image', '$typeofhouse', '$rentpermonth', '$nameofprovider', '$dno', '$contact', '$address' )";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

  <label> IMAGE </label>
 <input name="image" type="file" name="image" accept="image/*" required><br>

  <label> TYPE OF HOUSE </label>
 <input type="text" name="typeofhouse" class="form-control"> <br>
 
 <label> RENT PER MONTH </label>
 <input type="text" name="rentpermonth" class="form-control"> <br>
 
 <label> NAME OF PROVIDER </label>
 <input type="text" name="nameofprovider" class="form-control"> <br>
 
 <label> DNO </label>
 <input type="text" name="dno" class="form-control"> <br>
 
 <label> CONTACT </label>
 <input type="text" name="contact" class="form-control"> <br>
 
 <label> ADDRESS </label>
 <input type="text" name="address" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
 <?php
 	if($query){
		
		echo "<script>alert('Successfully Inserted')</script>";
	}
	else{
		echo "<b> ERROR: unable to post</b>";
	}
   mysqli_close($c);
   echo "<script>window.open('pchinamiram.html','_self')</script>";
?>

</body>
</html>