<?php

include 'conn.php';

if(isset($_POST['id'])){

 $id	   		 = $_GET['id'];
 $image    		 = $_POST['image'];
 $typeofhouse 	 = $_POST['typeofhouse'];
 $rentpermonth    = $_POST['rentpermonth'];
 $nameofprovider = $_POST['nameofprovider'];
 $dno 			 = $_POST['dno'];
 $contact 		 = $_POST['contact'];
 $address		 = $_POST['address'];
 $q = " INSERT INTO `kovvada`(`image`, `typeofhouse`, `rentpermonth` `nameofprovider` `dno` `contact` `address`) VALUES ( '$image', '$typeofhouse', '$rentpermonth', '$nameofprovider', '$dno', '$contact', '$address' )";

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
<body background="http://localhost/House/House/8.jpg">

  <div class="col-lg-6 m-auto">
 
 <form method="post" action="kovvada.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  INSERT DETAILS </h1>
 </div><br>

  <label> IMAGE </label>
 <input name="image" type="file" name="image" accept="image/*" required><br>

  <label> TYPE OF HOUSE </label>
 <input type="text" name="typeofhouse" class="form-control" required> <br>
 
 <label> RENT PER MONTH </label>
 <input type="text" name="rentpermonth" class="form-control" required> <br>
 
 <label> NAME OF PROVIDER </label>
 <input type="text" name="nameofprovider" class="form-control" required> <br>
 
 <label> DNO </label>
 <input type="text" name="dno" class="form-control" required> <br>
 
 <label> CONTACT </label>
 <input type="text" name="contact" class="form-control" required> <br>
 
 <label> ADDRESS </label>
 <input type="text" name="address" class="form-control" required> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>

</body>
</html>